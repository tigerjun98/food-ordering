<?php

namespace App\Modules\Admin\Queue\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\Queue;
use App\Models\User;
use App\Modules\Admin\Permissions\Services\PermissionService;
use App\Modules\Admin\Queue\Events\QueueUpdatedEvent;
use App\Modules\Admin\User\Services\UserService;
use App\Modules\Tp\TouchPos\Services\TouchPosCreateSalesService;
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

    public function getPatientWaitingMsg(): string
    {
        $count = $this->countWaitingPatient();
        return trans_choice('messages.patient_waiting', $count, ['count' => $count]);
    }

    public function pluckDoctorNameOnly($doctor): string
    {
        $doctors = '';
        foreach ( $this->getDoctorsNotServing() as $doctor){
            $doctors .= $doctor->full_name .', ';
        }
        return substr($doctors, 0, -1); // remove last comma
    }

    public function getDoctorsNotServing()
    {
        $doctorsOnServing = $this->model->Serving()->Today()
            ->where('role', Queue::DOCTOR)
            ->pluck('doctor_id')
            ->toArray();

        $doctors = (new PermissionService())
            ->getDoctorAccounts()
            ->pluck('id')
            ->toArray();

        $doctorIds = array_diff( $doctors, $doctorsOnServing );
        return Admin::whereIn('id', $doctorIds)->FilterOptionActive()->get();

    }

    public function getDoctorsAvailableMsg()
    {
        $doctor_available = $this->getDoctorsNotServing();
        if (count($doctor_available) > 0) {
            return trans('messages.doctor_room_empty', [
                "doctor" => $this->pluckDoctorNameOnly($doctor_available)
            ]);
        }
    }

    public function getDashboardMessage($roleId): ?string
    {
        if(!$this->hasPermission($roleId)) return trans('messages.permission_denied');

        switch ($roleId){
            case Queue::RECEPTIONIST:
            case Queue::PHARMACY:
                return $this->getDoctorsAvailableMsg();
                break;
            case Queue::DOCTOR:
                return $this->getPatientWaitingMsg();
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
            request()->role = $roleId;
            $queues[$status] = $query
                ->where('status', $status)
                ->Filter()
                ->Priority()
                ->get();
        }
        return $queues;
    }


    public function countServingPatient($doctorId = null): int
    {
        $model = $this->model->where('status', Queue::SERVING)->Today();
        if($doctorId){
            return $model->where('doctor_id', $doctorId)->count();
        }
        return $model->count();
    }

    public function isConsultationType(Queue $queue): bool
    {
        return $queue->role == Queue::RECEPTIONIST || $queue->role == Queue::DOCTOR;
    }

    public function serve(Queue $queue): Queue
    {
        if($queue->role == Queue::DOCTOR) {
            $this->countServingPatient($queue->doctor_id) > 0
                ? throwErr(trans('messages.doctor_on_serve'))
                : null;
        }

        (new QueueRoleService($queue))->updateToNextStatus();

        if(self::isConsultationType($queue)){
             $this->event->serve($queue, $this->countWaitingPatient());
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
        $queue = $this->model->Today()
            ->where('role', Queue::DOCTOR)
            ->where('user_id', $consultation->user_id)
            ->whereIn('status', [Queue::SERVING, Queue::HOLDING])
            ->first();

        if($queue){

            $queue->consultation_id = $consultation->id;

            intval(request()->on_hold) == 1
                ? $queue->status = Queue::HOLDING
                : (new QueueRoleService($queue))->serveToPharmacy();

            $queue->save();

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

    public function countWaitingPatient($type = Queue::CONSULTATION): int
    {
        return $this->model
            ->where('status', Queue::WAITING)
            ->where('type', $type)
            ->Today()
            ->count();
    }

    public function queueExist($queueId)
    {
        return $this->model->find($queueId);
    }

    public function getRoleId($type, $status): ?int
    {
        switch ($type){
            case Queue::CONSULTATION:
                return $status == Queue::PENDING || $status == Queue::WAITING
                    ? Queue::RECEPTIONIST
                    : (
                        $status == Queue::HOLDING || $status == Queue::SERVING
                        ? Queue::DOCTOR
                        : null
                    );

            case Queue::MEDICINE:
                return $status == Queue::PENDING || $status == Queue::WAITING
                    ? Queue::RECEPTIONIST
                    : null;

            case Queue::PAYMENT:
                return $status == Queue::PENDING || $status == Queue::WAITING
                    ? Queue::CASHIER
                    : null;

            default:
                return null;
        }
    }

    public function store($request): Queue
    {
        $newQueue = false;

        if( ! $this->queueExist( $request['id'] ) ){
            $this->patientOnQueue($request['user_id']) ? throwErr(trans('messages.patient_on_queue')) : null;
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
        $request['role'] = request()->role ?? Queue::RECEPTIONIST;

        $queue = $this->model->updateOrCreate([ 'id' => $request['id'] ], $request);
        if($newQueue) $this->event->newQueue($queue, $this->getPatientWaitingMsg());

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

    public function notifyReceptionist(Queue $queue)
    {
        $msg = '';
        $doctorNotServing = $this->getDoctorsNotServing();
        if( count($doctorNotServing) > 0 ){
            $msg = trans('messages.doctor_room_empty', [
                'doctor' => $this->pluckDoctorNameOnly($doctorNotServing)
            ]); // Notified receptionist Doctor room are empty
        }

        $this->event->consulted($queue, $msg);
    }

    public function notifyDoctor(Queue $queue)
    {
        $msg = $this->getPatientWaitingMsg();
        $this->event->newQueue($queue, $msg);
    }

    public function handleSortingEvent(Queue $oldQueue, Queue $queue)
    {
        if($oldQueue->status == Queue::PENDING && $queue->status == Queue::WAITING){
            $this->notifyDoctor($queue);
        }

        if($oldQueue->status == Queue::WAITING && $queue->status == Queue::PENDING){
            $this->notifyDoctor($queue);
        }

        if($oldQueue->status == Queue::HOLDING && $queue->status == Queue::SERVING){
            $this->notifyReceptionist($queue);
        }

        if($queue->status == Queue::HOLDING){
            $this->notifyReceptionist($queue);
        }
    }

    public function setSorting(Queue $queue, array $request): ?Queue
    {
        $oldQueue = Queue::find($queue->id);

        $queue->status = $request['status'];
        $queue->priority = $this->getBetweenQueuePriority($request);
        $queue->save();

        $this->handleSortingEvent($oldQueue, $queue);

        return $queue;
    }

    public function delete(Queue $queue): bool
    {
        $this->event->deleted($queue, 'deleted');
        return $queue->delete();
    }

    public function touchPosSystem($request)
    {
        $docNo = "";
        $queueIds = [];
        foreach ($request['queue_ids'] as $queueId){
            $queueIds[] = $queueId;
        }

        $consultIds = $this->model->whereIn('id', $queueIds)->pluck('consultation_id');
        foreach ($consultIds as $consultId){
            $consultation = Consultation::find($consultId);
            $docNo = (new TouchPosCreateSalesService($consultation, $docNo))->createSales();
        }
    }

    public function getTotalQueue($doctorId): array
    {
        return [
            Queue::RECEPTIONIST => $this->model->where('role', Queue::RECEPTIONIST)
                                    ->Waiting()->Today()->count(),
            Queue::DOCTOR       => $this->model->where('role', Queue::DOCTOR)
                                    ->where('status', Queue::SERVING)
                                    ->where('doctor_id', $doctorId)
                                    ->Today()
                                    ->count(),
            Queue::PHARMACY     => $this->model->where('role', Queue::PHARMACY)
                                    ->Waiting()->Today()->count(),
            Queue::CASHIER      => $this->model->where('role', Queue::CASHIER)
                                    ->waiting()->Today()->count()
        ];
    }
}
