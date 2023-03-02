<?php

namespace App\Modules\Admin\Queue\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\Queue;
use App\Models\User;
use App\Modules\Admin\Queue\Events\QueueUpdatedEvent;
use App\Modules\Admin\User\Services\UserService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\AssignOp\Plus;
use function PHPUnit\Framework\throwException;

class QueueService
{
    private Queue $model;
    private QueueEventService $event;

    public function __construct()
    {
        $this->model = new Queue();
        $this->event = new QueueEventService();
    }

    public function getDashboardMessage($roleId): ?string
    {
        if(!$this->hasPermission($roleId)) return 'Permission denied!';

        switch ($roleId){
            case Queue::RECEPTIONIST:
                if($this->countServingPatient() == 0){
                    return 'Doctor room are empty!';
                }
                break;
            case Queue::DOCTOR:
                $count = $this->countWaitingPatient();
                return $count > 0
                    ? $count.' patient are waiting!'
                    : 'No more patient waiting!';
                break;
        }
        return null;
    }

    public function hasPermission($roleId)
    {
        return auth()->user()->hasPermissionTo( 'queue.'.$roleId );
    }

    public function index($roleId): array
    {
        $queues = [];
        $handleStatus[Queue::RECEPTIONIST] = [Queue::WAITING, Queue::PENDING];
        $handleStatus[Queue::DOCTOR] = [Queue::SERVING, Queue::HOLDING];
        $handleStatus[Queue::PHARMACY] = [Queue::WAITING, Queue::PENDING];
        $handleStatus[Queue::CASHIER] = [Queue::WAITING, Queue::PENDING];

        if(!$this->hasPermission($roleId)) return [];

        if(!isset($handleStatus[$roleId])) $roleId = Queue::RECEPTIONIST;

        foreach ($handleStatus[$roleId] as $key => $status){

            $query = $this->model->Today();
            $queues[$status] = $query
                ->where('status', $status)
                ->Filter($roleId)
                ->Priority()
                ->get();
        }

        return $queues;
    }


    public function countServingPatient(): int
    {
        return $this->model->where('status', Queue::SERVING)->Today()->count();
    }

    public function serve(Queue $queue): Queue
    {

        if($queue->type == Queue::MEDICINE){
            $nextStatus = Queue::COMPLETED;
        } else{
            $this->countServingPatient() > 0 ? throwErr('Doctor on serving!') : null;
        }

        $queue->status = $nextStatus ?? Queue::SERVING;
        $queue->save();

        if($queue->type == Queue::CONSULTATION){
             $this->event->serve($queue);
        }
        return $this->model->find($queue->id);
    }

    public function canOnHold(User $user, $consultation): ?Queue
    {
        return $this->model->where('user_id', $user->id)
            ->where('type', Queue::CONSULTATION)
            ->whereIn('status', [ Queue::SERVING, Queue::HOLDING ])
            ->whereDate('appointment_date', $consultation ? $consultation->created_at : Carbon::now())
            ->first();
    }

    public function consulted(Consultation $consultation)
    {
        $queue = $this->model
            ->where('user_id', $consultation->user_id)
            ->where('type', Queue::CONSULTATION)
            ->whereIn('status', [Queue::SERVING, Queue::HOLDING])
            ->Today()
            ->first();

        if($queue){

            $queue->consultation_id = $consultation->id;

            if(intval(request()->on_hold) == 1){
                $queue->status = Queue::HOLDING;
            } else{
                $queue->status = Queue::WAITING;
                $queue->type = Queue::MEDICINE;
            }
            $queue->save();
            $this->event->consulted($queue);

            return $queue;
        }

        return false;
    }

    public function onQueue($request): bool
    {
        $queue = $this->model->where('user_id', $request['user_id'])
            ->whereNotIn('status', [ Queue::EXPIRED, Queue::COMPLETED ])
            ->Today()
            ->first();

        return (bool)$queue;
    }

    public function patientOnQueue($patientId): ?Queue
    {
        return $this->model
            ->where('user_id', $patientId)
            ->whereNotIn('status', [Queue::COMPLETED, Queue::EXPIRED])
            ->Today()
            ->first();
    }

    public function countWaitingPatient(): int
    {
        return $this->model->where('status', Queue::WAITING)->where('type', Queue::CONSULTATION)->Today()->count();
    }

    public function queueExist($queueId)
    {
        return $this->model->find($queueId);
    }

    public function store($request): Queue
    {
        $newQueue = false;

        if( ! $this->queueExist( $request['id'] ) ){
            $this->patientOnQueue($request['user_id']) ? throwErr('Patient on queue!') : null;
            $newQueue = true;
        }

        $prioritise = $request['prioritise'] ?? 0;
        if($prioritise){
            $request['priority_checkbox'] = $request['prioritise'] ?? false;
            $request['priority'] = 1000;
            unset($request['prioritise']);
        }

        $request['doctor_id'] = $request['doctor_id'] ?? null;
        $request['status'] = $request['status'] ?? Queue::WAITING;
        $request['admin_id'] = Auth::user()->id;
        $request['appointment_date'] = Carbon::now();

        $queue = $this->model->updateOrCreate([ 'id' => $request['id'] ], $request);
        if($newQueue) $this->event->newQueue($queue, $this->countWaitingPatient());

        return $queue;
    }

    public function abs_diff($v1, $v2) {
        $diff = $v1 - $v2;
        return $diff < 0 ? (-1) * $diff : $diff;
    }

    public function getBetweenQueuePriority($request): float
    {
        $higherQueue = $this->model->find($request['higher_queue_id'] ?? null);
        $lowerQueue = $this->model->find($request['lower_queue_id'] ?? null);

        if(!$higherQueue && !$lowerQueue){
            return 999;
        }

        if(!$higherQueue)
            $higherQueue = $this->model->where('priority', '>', $lowerQueue->priority)
                ->orderBy('priority', 'asc')
                ->first();

        if(!$lowerQueue)
            $lowerQueue = $this->model->where('priority', '<', $higherQueue->priority)
                ->orderBy('priority', 'desc')
                ->first();

        $lowerQueuePriority = $lowerQueue->priority ?? 0;
        $higherQueuePriority = $higherQueue->priority ?? 999;
        $priorityInBetween = $this->abs_diff($lowerQueuePriority, $higherQueuePriority)/2;
        return $higherQueuePriority - $priorityInBetween;
    }

    public function setSorting(Queue $queue, array $request): ?Queue
    {
        $queue->status = $request['status'];
        $queue->priority = $this->getBetweenQueuePriority($request);
        $queue->save();
        return $queue;
    }

    public function delete(Queue $queue): bool
    {
        return $queue->delete();
    }


}
