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
use App\Modules\Tp\TouchPos\Services\TouchPosCreateSalesService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\AssignOp\Plus;
use function PHPUnit\Framework\throwException;

class QueueCountService
{
    private Queue $model;

    public function __construct()
    {
        $this->model = new Queue();
    }

    public function getTodayReceptionistCount(): int
    {
        return $this->model
            ->Today()
            ->Waiting()
            ->where('role', Queue::RECEPTIONIST)
            ->count();
    }

    public function getTodayDoctorCount(?Admin $doctor = null): int
    {
        $model = $this->model
            ->Today()
            ->Serving()
            ->where('role', Queue::DOCTOR);

        if($doctor)
            $model->where('doctor_id', $doctor->id);

        return $model->count();
    }

    public function getTodayPharmacyCount(): int
    {
        return $this->model
            ->Today()
            ->Waiting()
            ->where('role', Queue::PHARMACY)
            ->count();
    }

    public function getTodayCashierCount(): int
    {
        return $this->model
            ->Today()
            ->Waiting()
            ->where('role', Queue::CASHIER)
            ->count();
    }
}
