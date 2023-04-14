<?php

namespace App\Modules\Admin\Appointment\Services;

use App\Models\Appointment;

class AppointmentService
{
    private Appointment $model;

    public function __construct()
    {
        $this->model = new Appointment();
    }

    public function store(array $request): Appointment
    {
        $request['appointment_date'] = date("Y-m-d H:i:s", strtotime($request['appointment_date']));
        return $this->model->updateOrCreate(['id' => $request['id']], $request);
    }

    public function delete(Appointment $appointment)
    {
        !self::isQueued($appointment) ? $appointment->delete() : throwErr(trans('messages.permission_denied'));
    }

    public function isQueued(Appointment $appointment): bool
    {
        return $appointment->status != Appointment::PENDING;
    }

    public function queueAppointment(Appointment $appointment, int $queueId)
    {
        $appointment->queue_id = $queueId;
        $appointment->status = Appointment::QUEUED;
        $appointment->save();
    }

    public function completeAppointment(Appointment $appointment)
    {
        $appointment->status = Appointment::COMPLETED;
        $appointment->save();
    }

    public function cancelAppointment(Appointment $appointment)
    {
        $appointment->status = Appointment::CANCELLED;
        $appointment->save();
    }
}
