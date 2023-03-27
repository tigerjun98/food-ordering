<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\GroupDataTable;
use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Modules\Admin\Group\Requests\GroupStoreRequest;
use App\Modules\Admin\Group\Services\GroupService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    use ApiResponser;

    private Group $model;
    private GroupService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Group();
        $this->service = new GroupService();
    }

    public function index(GroupDataTable $dataTable)
    {
        return $dataTable->render('admin.group.datatable', [
            'filter' => $this->model->Filter()
        ]);
    }

    public function create()
    {
        return html('admin.group.form.create',[
            'data' => null
        ]);
    }

    public function store(GroupStoreRequest $request)
    {
        $this->service->store($request->validated());
        return makeResponse(200);
    }

    public function edit($groupId)
    {
        return html('admin.group.form.create',[
            'data' => $this->model->findOrFail($groupId)
        ]);
    }

    public function delete($groupId)
    {
        return html('admin.group.form.delete',[
            'canDelete' => true,
            'data' => $this->model->findOrFail($groupId)
        ]);
    }

    public function destroy($groupId)
    {
        $this->service->delete($this->model->findOrFail($groupId));
        return makeResponse(200);
    }
}
