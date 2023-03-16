<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdminsDataTable;
use App\DataTables\ConsultationsDataTable;
use App\DataTables\MedicinesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\PrintTemplate;
use App\Models\Queue;
use App\Models\User;
use App\Modules\Admin\Consultation\Requests\ConsultationStoreRequest;
use App\Modules\Admin\Consultation\Services\ConsultationPrintService;
use App\Modules\Admin\Consultation\Services\ConsultationService;
use App\Modules\Admin\Queue\Services\QueueService;
use App\Modules\Admin\User\Requests\UserStoreRequest;
use App\Traits\ApiResponser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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

    public function print($consultId)
    {
        $consultation = $this->model->findOrFail($consultId);
        $template = PrintTemplate::findOrFail(request()->print_template_id);
        return view('admin.consultation.print.mini', compact('consultation', 'template'));
    }

    public function printSubmit($consultId)
    {
        $res = (new ConsultationPrintService())->print($consultId);
        return makeResponse(200, '', $res);
    }

    public function printOption($consultId)
    {
        $templates = PrintTemplate::where('type', 'consultation')->get();
        $consultation = $this->model->findOrFail($consultId);
        return html('admin.consultation.print.option', compact('consultation', 'templates'));
    }

    public function getMedicineOpt()
    {
        return response()->json(
            Medicine::whereIn('category', [0, request()->category])
                ->Active()
                ->FilterOption()
                ->paginate(10)
        );
    }

    public function getSelectOpt($type)
    {
        return response()->json(
            Option::where('type', $type)->Active()->FilterOption()->paginate(10)
        );
    }

    public function index(ConsultationsDataTable $dataTable)
    {
        return $dataTable->render('admin.consultation.datatable', [
            'filter' => $this->model->Filter()
        ]);
    }

    public function show($consultationId)
    {
        $consultation = Consultation::findOrFail($consultationId);
        $tabs = isset(request()->tabs) ? explode(',', request()->tabs) : ['details', 'medicine', 'patient', 'attachment'];


        return html('admin.consultation.modal.view',
            compact('consultation', 'tabs')
        );
    }

    public function create() // use edit() to create consultation.
    {
        abort(404);
    }

    public function getPatientHistory($patientId)
    {
        $consultations = $this->model
            ->where('user_id', $patientId)
            ->latest()->paginate(10);
        return html('admin.consultation.include.patient-history', compact('consultations'));
    }

    public function getPatientCard($patientId)
    {
        $patient = User::findOrFail($patientId);
        return html('components.admin.component.card.patient', compact('patient'));
    }

    public function edit($id) // $id == userId ? create, $id == consultationId ? edit
    {
        [$consultation, $patient, $onHold] = $this->service->edit($id);

        if(!$patient)
            return redirect()->route('admin.user.index')
                ->with('fail', trans('messages.patient_not_found'));

        return html('admin.consultation.form.create', compact(
            'consultation', 'patient', 'onHold'
        ));
    }

    public function store(ConsultationStoreRequest $request)
    {
        $this->service->store($request->validated());
        return makeResponse(201, null, [
            'redirect' => session('redirect', url()->previous())
        ]);
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

