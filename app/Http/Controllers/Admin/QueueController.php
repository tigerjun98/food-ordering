<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Medicine;
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
        $query = Queue::query()->Today();
        $waiting = $query->Waiting()->get();
        return view('admin.queue.index', compact('waiting'));
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
        $queue = $this->service->create($request->validated());
        return makeResponse(200, 'success', $queue);
    }

    public function edit($userId)
    {
        return html('admin.user.form.create',[ 'data' => User::findOrFail($userId) ]);
    }



    public function delete($userId)
    {
        return html('admin.user.form.delete',[
            'data' => User::findOrFail($userId)
        ]);
    }

    public function destroy($userId)
    {
        (new UserService())->delete(User::findOrFail($userId));
        return makeResponse(200);
    }
}

