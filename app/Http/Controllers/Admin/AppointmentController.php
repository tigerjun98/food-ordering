<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AppointmentsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;
use App\Modules\Admin\Appointment\Requests\AppointmentStoreRequest;
use App\Modules\Admin\Appointment\Services\AppointmentService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    use ApiResponser;

    private Appointment $model;
    private AppointmentService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Appointment();
        $this->service = new AppointmentService();
    }

    public function index(AppointmentsDataTable $dataTable)
    {
        return $dataTable->render('admin.appointment.datatable', [
            'filter' => $this->model->Filter()
        ]);
    }

    public function create()
    {
        return html('admin.appointment.form.create',[
            'patient' => User::find(request()->user_id),
            'data' => []
        ]);
    }

    public function delete($appointmentId)
    {
        return html('admin.appointment.form.delete',[
            'canDelete' => false,
            'data' => $this->model->findOrFail($appointmentId)
        ]);
    }
}
