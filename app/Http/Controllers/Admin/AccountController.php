<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdminsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Modules\Admin\Account\Requests\AdminAccountStoreRequest;
use App\Modules\Admin\Account\Services\AttachmentService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;

class AccountController extends Controller {

    use ApiResponser;
    private Admin $model;
    private AttachmentService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Admin();
        $this->service = new AttachmentService();
    }

    public function index(AdminsDataTable $dataTable)
    {
        $filter = $this->model->Filter();
        return $dataTable->render('admin.account.datatable', compact('filter'));
    }

    public function create()
    {
        return html('admin.account.form.create',[
            'data' => null
        ]);
    }

    public function edit($userId)
    {
        return html('admin.account.form.create',[
            'data' => $this->model->findOrFail($userId)
        ]);
    }

    public function store(AdminAccountStoreRequest $request)
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

