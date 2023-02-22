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

    public function index()
    {
        if(request()->filled('status')){
            $queues = $this->model->Today()->Sort()->Filter()->get();

        } else{
            $queues['waiting'] = $this->model->Today()->Waiting()->Sort()->Filter()->get();
            $queues['pending'] = $this->model->Today()->Pending()->Sort()->Filter()->get();
        }

        return $queues;

    }

    public function serve(Queue $queue): Queue
    {
        $queue->status = Queue::SERVING;
        $queue->save();
        return $this->model->find($queue->id);
    }

    public function store($request): Queue
    {
        $request['doctor_id'] = $request['doctor_id'] ?? null;
        $request['status'] = $request['status'] ?? Queue::WAITING;
        $request['admin_id'] = Auth::user()->id;
        $request['appointment_date'] = Carbon::now();

        return $this->model->updateOrCreate(['id' => $request['id'] ], $request);
    }

    public function delete(Queue $queue): bool
    {
        return $queue->delete();
    }


}
