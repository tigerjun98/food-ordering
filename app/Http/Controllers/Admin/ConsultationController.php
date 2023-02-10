<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdminsDataTable;
use App\DataTables\ConsultationsDataTable;
use App\DataTables\MedicinesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\User;
use App\Modules\Admin\Account\Requests\AdminAccountStoreRequest;
use App\Modules\Admin\Medicine\Requests\MedicineStoreRequest;
use App\Modules\Admin\Consultation\Services\ConsultationService;
use App\Modules\Admin\User\Requests\UserStoreRequest;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use DB;

class ConsultationController extends Controller {

    use ApiResponser;

    private Consultation $model;
    private ConsultationService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Consultation();
        $this->service = new ConsultationService();
    }

    public function index(ConsultationsDataTable $dataTable)
    {
        return $dataTable->render('admin.consultation.datatable', [
            'filter' => $this->model->Filter()
        ]);
    }

    public function create()
    {
        // use edit() to create consultation.
        abort(404);
    }

    public function edit($id) // $id == userId ? create, $id == consultationId ? edit
    {
        $consultation = Consultation::find($id) ?? [];
        $patient = $consultation ? $consultation->patient : User::find($id);
        if(!$patient)
            return redirect()->route('admin.user.index')->with('fail', trans('messages.patient_not_found'));

        return html('admin.consultation.form.create', compact('consultation', 'patient'));
    }

    public function store(MedicineStoreRequest $request)
    {
        $this->service->store($request->validated());
        return makeResponse(200);
    }

    public function delete($adminId)
    {
        return html('admin.consultation.form.delete',[
            'data' => $this->model->findOrFail($adminId)
        ]);
    }

    public function destroy($adminId)
    {
        $this->service->delete($this->model->findOrFail($adminId));
        return makeResponse(200);
    }
}

