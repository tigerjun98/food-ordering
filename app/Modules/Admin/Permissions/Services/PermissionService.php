<?php

namespace App\Modules\Admin\Permissions\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\User;
use App\Modules\Admin\User\Services\UserService;
use Carbon\Carbon;
use PhpParser\Node\Expr\AssignOp\Plus;
use function PHPUnit\Framework\throwException;

class PermissionService
{
    public function getDoctorAccounts()
    {
        $permissionName = ['consultation.*', 'consultation.create'];

        $query = Admin::query();
        return $query->whereHas('permissions', function ($query) use ($permissionName) {
            $query->whereIn('name', $permissionName);
        })->orWhereHas('roles.permissions', function ($query) use ($permissionName) {
            $query->whereIn('name', $permissionName);
        })->excludeSuperAdmin();
    }
}
