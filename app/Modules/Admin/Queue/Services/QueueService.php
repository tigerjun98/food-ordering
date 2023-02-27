<?php

namespace App\Modules\Admin\Queue\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\Queue;
use App\Models\User;
use App\Modules\Admin\User\Services\UserService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\AssignOp\Plus;
use function PHPUnit\Framework\throwException;

class QueueService
{
    private Queue $model;

    public function __construct()
    {
        $this->model = new Queue();
    }

    public function index(): array
    {
        $role = request()->role ?? Queue::RECEPTIONIST;

        $queues = [];
        $handleStatus[Queue::RECEPTIONIST] = [Queue::WAITING, Queue::PENDING];
        $handleStatus[Queue::DOCTOR] = [Queue::SERVING, Queue::HOLDING];
        $handleStatus[Queue::PHARMACY] = [Queue::WAITING, Queue::PENDING];
        $handleStatus[Queue::CASHIER] = [Queue::WAITING, Queue::PENDING];

        if(!isset($handleStatus[$role])) $role = Queue::RECEPTIONIST;

        foreach ($handleStatus[$role] as $key => $status){

            $query = $this->model->Today();
            $queues[$status] = $query
                ->where('status', $status)
                ->Filter()
                ->Priority()
                ->get();
        }

        return $queues;
    }

    public function serve(Queue $queue): Queue
    {
        if($queue->type == Queue::MEDICINE){
            $nextStatus = Queue::COMPLETED;
        }

        $queue->status = $nextStatus ?? Queue::SERVING;
        $queue->save();
        return $this->model->find($queue->id);
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
            return $this->model->find($queue->id);
        }
    }

    public function exists($request): bool
    {
        $queue = $this->model->where('user_id', $request['user_id'])
            ->where('status', Queue::WAITING)
            ->Today()->first();

        return (bool)$queue;
    }

    public function store($request): Queue
    {
        if(!$this->model->find($request['id'])){
            $this->exists($request) ? throwErr('Patient on queue!') : null;
        }

        $prioritise = $request['prioritise'] ?? 0;
        if($prioritise){
            unset($request['prioritise']);
            $request['priority'] = 1000;
        }

        $request['doctor_id'] = $request['doctor_id'] ?? null;
        $request['status'] = $request['status'] ?? Queue::WAITING;
        $request['admin_id'] = Auth::user()->id;
        $request['appointment_date'] = Carbon::now();

        return $this->model->updateOrCreate([ 'id' => $request['id'] ], $request);
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
