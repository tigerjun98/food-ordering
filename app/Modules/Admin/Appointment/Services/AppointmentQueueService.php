<?php

namespace App\Modules\Admin\Appointment\Services;

use App\Models\Appointment;

class AppointmentQueueService
{
    private Appointment $model;

    public function __construct(Appointment $model)
    {
        $this->model = $model;
    }

    public function queueAppointment($queueId)
    {
        $this->fillQueueId($queueId);
        $this->updateToNextStatus();
    }

    public function isPending(): bool
    {
        return $this->model->status == Appointment::PENDING;
    }

    public function isQueued(): bool
    {
        return $this->model->status == Appointment::QUEUED;
    }

    public function fillQueueId($queueId)
    {
        $this->model->queue_id = (int) $queueId;
        $this->model->save();
    }

    public function updateToNextStatus()
    {
        if ($this->isPending()) {
            $this->updateToQueued();

        } else if ($this->isQueued()) {
            $this->updateToCompleted();

        } else {
            $this->updateToCompleted();
        }
    }

    public function updateToQueued()
    {
        $this->model->status = Appointment::QUEUED;
        $this->model->save();
    }

    public function updateToCompleted()
    {
        $this->model->status = Appointment::COMPLETED;
        $this->model->save();
    }
}
