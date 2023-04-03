<?php

namespace App\Modules\Admin\Queue\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\Queue;
use App\Models\User;
use App\Modules\Admin\Permissions\Services\PermissionService;
use App\Modules\Admin\Queue\Events\QueueUpdatedEvent;
use App\Modules\Admin\User\Services\UserService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\AssignOp\Plus;
use function PHPUnit\Framework\throwException;

class QueueRoleService
{
    private Queue $model;

    public function __construct(Queue $model)
    {
        $this->model = $model;
    }

    public function isCashier():bool
    {
        return $this->model->role == Queue::CASHIER;
    }

    public function isDoctor():bool
    {
        return $this->model->role == Queue::DOCTOR;
    }

    public function isPharmacy():bool
    {
        return $this->model->role == Queue::PHARMACY;
    }

    public function isReception():bool
    {
        return $this->model->role == Queue::RECEPTIONIST;
    }

    public function updateToNextStatus()
    {
        if($this->isReception()){
            $this->serveToDoctor();

        } elseif($this->isDoctor()){
            $this->serveToPharmacy();

        } elseif($this->isPharmacy()){
            $this->serveToCashier();

        } else{
            $this->serveCompleted();
        }
    }

    public function serveCompleted()
    {
        $this->model->status    = Queue::COMPLETED;
        $this->model->save();
    }

    public function serveToPharmacy()
    {
        $this->model->role      = Queue::PHARMACY;
        $this->model->status    = Queue::WAITING;
        $this->model->save();
    }

    public function serveToDoctor()
    {
        $this->model->role      = Queue::DOCTOR;
        $this->model->status    = Queue::SERVING;
        $this->model->save();
    }

    public function serveToCashier()
    {
        $this->model->role      = Queue::CASHIER;
        $this->model->status    = Queue::WAITING;
        $this->model->save();
    }


}
