<?php

namespace App\Modules\Admin\Appointment\Services;

use App\Models\Appointment;

class AppointmentService
{
    private Appointment $appointment;

    public function __construct()
    {
        $this->model = new Appointment();
    }

    public function store(array $request): Appointment
    {
        $request['datetime'] = date("Y-m-d H:i:s", strtotime($request['datetime']));
        return $this->model->updateOrCreate([
            'id' => $request['id'],
            'status' => Appointment::PENDING,
        ], $request);
    }
}
