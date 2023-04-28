<?php

namespace App\Modules\Admin\Appointment\Services;

use App\Models\Appointment;
use function PHPUnit\Framework\throwException;

class AppointmentService
{
    private Appointment $model;

    public function __construct()
    {
        $this->model = new Appointment();
    }

    public function store(array $request)
    {
        $isCreate = ($request['process'] === 'create') ? true : false;
        unset($request['process']);

        $request['appointment_date'] = date("Y-m-d H:i:s", strtotime($request['appointment_date']));
        $isAppointmented = self::isAppointmented($request['user_id'], $request['appointment_date']);

        return ($isAppointmented && $isCreate)
            ? throwErr(trans('messages.user_appointed'))
            : $this->model->updateOrCreate(['id' => $request['id']], $request);
    }

    public function delete(Appointment $appointment)
    {
        !self::isQueued($appointment) ? $appointment->delete() : throwErr(trans('messages.permission_denied'));
    }

    public function isQueued(Appointment $appointment): bool
    {
        return $appointment->status != Appointment::PENDING;
    }

    public function isAppointmented($userId, $appointmentDate): bool
    {
        return $this->model->where('user_id', $userId)
                    ->whereDate('appointment_date', date('Y-m-d', strtotime($appointmentDate)))
                    ->whereNot('status', Appointment::CANCELLED)
                    ->exists();
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

    public function getTotalToday()
    {
        return $this->model->countToday();
    }
}
