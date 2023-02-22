<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Queue;
use App\Models\User;
use App\Modules\Admin\Queue\Requests\QueueStoreRequest;
use App\Modules\Admin\Queue\Services\QueueService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;

class QueueController extends Controller {

    use ApiResponser;

    private Queue $model;
    private QueueService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Queue();
        $this->service = new QueueService();
    }

    public function index()
    {
        $queues = $this->service->index();
        return view('admin.queue.index', compact('queues'));
    }

    public function serve($queueId)
    {
        $this->service->serve( $this->model->findOrFail($queueId) );
        return makeResponse(200);
    }

    public function create()
    {
        $patient = User::findOrFail(request()->user_id);
        return html('admin.queue.form.create',[
            'patient' => $patient,
            'data' => []
        ]);
    }

    public function store(QueueStoreRequest $request)
    {
        $queue = $this->service->store($request->validated());
        return makeResponse(200, 'success', $queue);
    }

    public function edit($queueId)
    {
        return html('admin.queue.form.create',[ 'data' => Queue::findOrFail($queueId) ]);
    }

    public function editBox($queueId)
    {
        return html('components.admin.component.card.queue',[ 'queue' => Queue::findOrFail($queueId) ]);
    }

    public function update($queueId)
    {
        dd( request()->all() );

        $model = Queue::findOrFail($queueId);
        dd($model);
        return makeResponse(200);
    }

    public function delete($queueId)
    {
        return html('admin.queue.form.delete',[
            'data' => Queue::findOrFail($queueId)
        ]);
    }

    public function destroy($queueId)
    {
        $this->service->delete(Queue::findOrFail($queueId));
        return makeResponse(200);
    }
}

