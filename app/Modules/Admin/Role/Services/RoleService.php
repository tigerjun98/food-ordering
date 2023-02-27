<?php

namespace App\Modules\Admin\Role\Services;

use App\Models\Admin;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
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

    public function store(array $request): User
    {
        $spatieRole = $this->role->findOrCreate($request['name'], self::GUARD);

        // reset all permission for this role
        foreach ($spatieRole->getAllPermissions() as $permission) {
            $permission->delete();
        }

        // sync permission
        foreach ($request['permission'] as $role => $permission) {
            foreach ($permission as $name => $value) {
                if($value){
                    $name = $role . '.' . $name;
                    $spatieRole->givePermissionTo(Permission::findOrCreate($name, self::GUARD));
                }
            }
        }

        dd( $spatieRole->getAllPermissions() );
        return $this->admin->find($request['id']);
    }

    public function delete(Admin $admin)
    {
        $admin->delete();
    }
}
