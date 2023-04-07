<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdminsDataTable;
use App\DataTables\MedicinesDataTable;
use App\DataTables\OptionsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\Queue;
use App\Models\User;
use App\Modules\Admin\Consultation\Requests\ConsultationStoreRequest;
use App\Modules\Admin\Medicine\Requests\MedicineStoreRequest;
use App\Modules\Admin\Medicine\Services\MedicineService;
use App\Modules\Admin\Option\Requests\OptionStoreRequest;
use App\Modules\Admin\Queue\Requests\QueueStoreRequest;
use App\Modules\Admin\Option\Services\OptionService;
use App\Modules\Admin\Queue\Services\QueueService;
use App\Modules\Admin\User\Requests\UserStoreRequest;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use DB;

class OptionController extends Controller {

    use ApiResponser;

    private Option $model;
    private OptionService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Option();
        $this->service = new OptionService();
    }

    public function index(OptionsDataTable $dataTable)
    {
        return $dataTable->render('admin.option.datatable', [
            'filter' => $this->model->Filter()
        ]);
    }

    public function show(OptionsDataTable $dataTable, $type)
    {
        request()->type = $type;
        return $dataTable->render('admin.option.datatable', [
            'filter' => $this->model->Filter(),
            'type' => $type
        ]);
    }

    public function create()
    {
        return html('admin.option.form.create',[
            'data' => null,
            'type' => request()->type
        ]);
    }

    public function edit($optionId)
    {
        return html('admin.option.form.create',[
            'data' => $this->model->findOrFail($optionId),
        ]);
    }

    public function store(OptionStoreRequest $request)
    {
        $this->service->store($request->validated());
        return makeResponse(200);
    }

    public function delete($optionId)
    {
        $model = $this->model->findOrFail($optionId);
        return html('admin.option.form.delete',[
            'canDelete' => !$this->service->occupied($model),
            'data' => $model
        ]);
    }

    public function destroy($optionId)
    {
        $this->service->delete($this->model->findOrFail($optionId));
        return makeResponse(200);
    }
}

