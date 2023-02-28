<?php

namespace App\Modules\Admin\Account\Services;

use App\Models\Admin;
use App\Models\User;
use App\Modules\Admin\Role\Services\RoleService;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Spatie\Permission\Models\Role;
use function PHPUnit\Framework\throwException;

class AdminAccountService
{
    private Admin $model;

    public function __construct()
    {
        $this->model = new Admin();
    }

    public function store(array $request): Admin
    {
        $data = array_except($request, ['roles']);
        $admin = $this->model->updateOrCreate([ 'id' => $request['id'] ], $data);
        $this->assignRoles($admin, $request['roles']);

        return $admin;
    }

    public function assignRoles(Admin $admin, array $roleIds = []): Collection
    {
        foreach ($roleIds as $roleId){
            $role = Role::findById($roleId);
            $admin->assignRole($role);
        }

        return $admin->getRoleNames();
    }

    public function delete(Admin $admin)
    {
        $admin->delete();
    }
}
