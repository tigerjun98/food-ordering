<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdminsDataTable;
use App\DataTables\RolesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Role;
use App\Modules\Admin\Role\Requests\RoleStoreRequest;
use App\Modules\Admin\Role\Services\RoleService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Lang;
use Spatie\Permission\Models\Role as SpatieRole;

class RoleController extends Controller {

    use ApiResponser;
    private Role $model;
    private RoleService $service;
    private SpatieRole $role;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Role();
        $this->role = new SpatieRole();
        $this->service = new RoleService();
    }

    public function index(RolesDataTable $dataTable)
    {
        $filter = $this->model->Filter();
        return $dataTable->render('admin.role.datatable', compact('filter'));
    }

    public function create()
    {
        $data = null;
        return html('admin.role.form.create', compact('data'));
    }

    public function edit($roleId)
    {
        $data = $this->role->findOrFail($roleId);
        $permissions = $data->permissions->pluck('name')->toArray();

        return html('admin.role.form.create',compact('data', 'permissions'));
    }

    public function store(RoleStoreRequest $request)
    {
        $this->service->store($request->validated());
        return makeResponse(200);
    }

    public function delete($roleId)
    {
        return html('admin.role.form.delete',[
            'data' => $this->role->findOrFail($roleId)
        ]);
    }

    public function destroy($adminId)
    {
        $this->service->delete($this->model->findOrFail($adminId));
        return makeResponse(200);
    }
}

