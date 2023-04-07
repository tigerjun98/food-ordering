<?php

namespace App\Modules\Admin\Appointment\Services;

use App\Modules\Admin\Appointment\Services\AppointmentJobService;
use App\Models\Appointment;

class AppointmentService
{
    private Appointment $appointment;

    public function __construct()
    {
        $this->model = new Appointment();
        $this->job = new AppointmentJobService();
    }

    public function store(array $request): Appointment
    {
        $newAppointment = $this->appointmentNotExist($request['id']);

        $request['datetime'] = date("Y-m-d H:i:s", strtotime($request['datetime']));
        $appointment = $this->model->updateOrCreate(['id' => $request['id']], $request);

        if ($newAppointment) $this->job->queue($appointment);

        return $appointment;
    }

    public function delete($appointment)
    {
        !self::queued($appointment) ? $appointment->delete() : throwErr(trans('messages.permission_denied'));
    }

    public function queued($appointment): bool
    {
        return $appointment->status != Appointment::PENDING;
    }

    public function appointmentNotExist($appointmentId): bool
    {
        return $this->model->where('id', $appointmentId)->doesntExist();
    }
}
