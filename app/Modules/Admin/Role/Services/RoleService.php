<?php

namespace App\Modules\Admin\Role\Services;

use App\Models\Admin;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
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

        $permissions = [];
        foreach(Lang::get('permission') as $role => $permission){

            if( isset( $request['role'][$role] ) && $request['role'][$role] == 1 ){ // IF Full Permission
                $permission = Permission::findOrCreate($role.'.*', self::GUARD);
                $permissions[] = $permission->name;

            } elseif( isset( $request['permission'][$role] ) ) {

                foreach ( $request['permission'][$role] as $name => $value ) {
                    if( $value == 1 ){
                        $permission = Permission::findOrCreate($role.'.'.$name, self::GUARD);
                        $permissions[] = $permission->name;
                    }
                }
            }
        }
        $spatieRole->syncPermissions($permissions);
        return $spatieRole->getAllPermissions();
    }

    public function delete(Role $role)
    {
        $role->delete();
    }
}
