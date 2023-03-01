<?php

namespace App\Modules\Admin\Role\Services;

use App\Models\Admin;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as SpatieRole;
use function PHPUnit\Framework\throwException;

class RoleService
{
    private Role $model;
    private SpatieRole $role;
    public const GUARD = 'admin';

    public function __construct()
    {
        $this->model = new Role();
        $this->role = new SpatieRole();
    }

    public function assignPermission(SpatieRole $role, array $permissions): Collection
    {
        $role->syncPermissions($permissions);
    }

    public function store(array $request): Collection
    {
        $spatieRole = $this->role->findOrCreate($request['name'], self::GUARD);
        self::resetRolePermission($spatieRole);

        if(isset($request['role'])){
            // sync permission
            foreach ($request['role'] as $name => $role) {
                if($role == 1){
                    $spatieRole->givePermissionTo(Permission::findOrCreate($name.'.*', self::GUARD));
                }
            }
        }



        foreach ($request['permission'] as $role => $permission) {
            foreach ($permission as $name => $value) {
                $allChecked = $request['role'][$role] ?? 0;
                if($value && $allChecked != 1){
                    $name = $role . '.' . $name;
                    $spatieRole->givePermissionTo(Permission::findOrCreate($name, self::GUARD));
                }
            }
        }

        return $spatieRole->getAllPermissions();
    }

    public function resetRolePermission(SpatieRole $spatieRole)
    {
        // reset all permission for the role
        foreach ($spatieRole->getAllPermissions() as $permission) {
            $permission->delete();
        }
    }

    public function delete(Role $role)
    {
        $role->delete();
    }
}
