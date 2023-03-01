<?php

namespace App\Modules\Admin\Account\Services;

use App\Models\Admin;
use App\Models\User;
use App\Modules\Admin\Role\Services\RoleService;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use function PHPUnit\Framework\throwException;

class AdminAccountService
{
    private Admin $model;

    public function __construct()
    {
        $this->model = new Admin();
    }

    public function updatePassword(Admin $admin, array $request): bool
    {
        if($request['password'] && $request['password_confirmation']){
            return $admin->update([
               'password' => Hash::make('123123')
            ]);
        }

        return false;
    }

    public function store(array $request): Admin
    {
        $data = array_except( $request, ['roles', 'password'] );
        $admin = $this->model->updateOrCreate([ 'id' => $request['id'] ], $data);
        $this->updatePassword($admin, $request);
        $this->assignRoles($admin, $request['roles']);

        return $admin;
    }

    public function assignPermission(Admin $admin, Role $role): Collection
    {
        $permissions = $role->permissions->pluck('name')->toArray();
        $admin->syncPermissions($permissions);
        return $admin->getAllPermissions();
    }

    public function assignRoles(Admin $admin, array $roleIds = []): Collection
    {
        foreach ($roleIds as $roleId){
            $role = Role::findById($roleId);
            $admin->assignRole($role);
            // $this->assignPermission($admin, $role);
        }

        return $admin->getRoleNames();
    }

    public function delete(Admin $admin)
    {
        $admin->delete();
    }
}
