<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AppointmentDataTable;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
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

    public function index(AppointmentDataTable $dataTable)
    {
        return $dataTable->render('admin.appointment.datatable', [
            'filter' => $this->model->Filter()
        ]);
    }
}
