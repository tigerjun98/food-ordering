<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdminsDataTable;
use App\DataTables\MedicinesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Medicine;
use App\Models\User;
use App\Modules\Admin\Account\Requests\AdminAccountStoreRequest;
use App\Modules\Admin\Medicine\Requests\ConsultationStoreRequest;
use App\Modules\Admin\Medicine\Requests\MedicineStoreRequest;
use App\Modules\Admin\Medicine\Services\MedicineService;
use App\Modules\Admin\User\Requests\UserStoreRequest;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use DB;

class MedicineController extends Controller {

    use ApiResponser;

    private Medicine $model;
    private MedicineService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Medicine();
        $this->service = new MedicineService();
    }

    public function index(MedicinesDataTable $dataTable)
    {
        return $dataTable->render('admin.medicine.datatable', [
            'filter' => $this->model->Filter()
        ]);
    }

    public function create()
    {
        return html('admin.medicine.form.create',[
            'data' => null
        ]);
    }

    public function edit($userId)
    {
        return html('admin.medicine.form.create',[
            'data' => $this->model->findOrFail($userId)
        ]);
    }

    public function store(MedicineStoreRequest $request)
    {
        $this->service->store($request->validated());
        return makeResponse(200);
    }

    public function delete($medicineId)
    {
        $model = $this->model->findOrFail($medicineId);
        return html('admin.medicine.form.delete',[
            'canDelete' => !$this->service->occupied($model),
            'data' => $model
        ]);
    }

    public function destroy($adminId)
    {
        $this->service->delete($this->model->findOrFail($adminId));
        return makeResponse(200);
    }
}

