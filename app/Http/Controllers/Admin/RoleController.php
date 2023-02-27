<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdminsDataTable;
use App\DataTables\RolesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Modules\Admin\Role\Requests\RoleStoreRequest;
use App\Modules\Admin\Role\Services\RoleService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Lang;

class RoleController extends Controller {

    use ApiResponser;
    private Admin $model;
    private RoleService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Admin();
        $this->service = new RoleService();
    }

    public function index(RolesDataTable $dataTable)
    {
        $filter = $this->model->Filter();
        return $dataTable->render('admin.role.datatable', compact('filter'));
    }

    public function create()
    {
        $permissions = Lang::get('permission'); // return entire array
        return html('admin.role.form.create', compact('permissions'));
    }

    public function edit($userId)
    {
        return html('admin.role.form.create',[
            'data' => $this->model->findOrFail($userId)
        ]);
    }

    public function store(RoleStoreRequest $request)
    {
        $this->service->store($request->validated());
        return makeResponse(200);
    }

    public function delete($adminId)
    {
        return html('admin.account.form.delete',[
            'data' => $this->model->findOrFail($adminId)
        ]);
    }

    public function destroy($adminId)
    {
        $this->service->delete($this->model->findOrFail($adminId));
        return makeResponse(200);
    }
}

