<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\QueuesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Queue;
use App\Models\User;
use App\Modules\Admin\Permissions\Services\PermissionService;
use App\Modules\Admin\Queue\Requests\QueueStoreRequest;
use App\Modules\Admin\Queue\Requests\QueueUpdateSortingRequest;
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

    public function getSpecificBox($queueId)
    {
        $queue = $this->model->findOrFail($queueId);
        return html('components.admin.component.card.queue', compact('queue'));
    }

    public function index(QueuesDataTable $dataTable)
    {
        $filter = $this->model->Filter();
        return $dataTable->render('admin.queue.datatable', compact('filter'));
    }

    public function show($roleId)
    {
        if(request()->ajax()){
            return html('components.admin.page.queue.receptionist',[
                'queues' => $this->service->index($roleId),
                'message' => $this->service->getDashboardMessage($roleId)
            ]);
        }

        if( ! array_key_exists( $roleId, Queue::getRoleList() ) ){
            abort(404);
        }

        $doctors = (new PermissionService())
            ->getDoctorAccounts()
            ->get();

        return view('admin.queue.index', compact('roleId', 'doctors'));
    }

    public function serve($queueId)
    {
        $this->service->serve( $this->model->findOrFail($queueId) );
        return makeResponse(200);
    }

    public function create()
    {
        return html('admin.queue.form.create',[
            'patient' => User::find(request()->user_id),
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

    public function updateSorting(QueueUpdateSortingRequest $request, $queueId)
    {
        $model = $this->model->findOrFail($queueId);
        $queue = $this->service->setSorting( $model, $request->validated() );
        return makeResponse(200, null, $queue);
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

    public function getTotalQueue($doctorId)
    {
        return makeResponse(200, 'success', $this->service->getTotalQueue($doctorId));
    }
}

