<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Clinic;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Modules\Admin\Permissions\Permission as PermissionAlias;

class RoleAndPermissionSeeder extends Seeder
{
    public const GUARD = 'admin';
    public const ROLE_NAME = 'super-admin';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRoleAndPermissions();
        $this->createSuperAdminAccount();
    }

    public function createRoleAndPermissions()
    {
        $spatieRole = Role::findOrCreate( self::ROLE_NAME, self::GUARD);
        $spatieRole->name_en = 'Super admin';
        $spatieRole->name_cn = '超级管理员';
        $spatieRole->save();

        $permissions = [];

        foreach(Lang::get('permission') as $role => $permission){
            $permission = Permission::findOrCreate($role.'.*', self::GUARD);
            $permissions[] = $permission->name;
        }

        $spatieRole->syncPermissions($permissions);
    }

    public function createSuperAdminAccount()
    {
        $admin = Admin::create([
            'name' => self::ROLE_NAME,
            'name_en' => 'Super admin',
            'name_cn' =>  '超级管理员',
            'email' => 'admin@yilin.com.my',
            'password' => '$2y$10$qivlTFx6oBeB92J13hCIruir0zqMp8qN5JVq058YoGfoQQ4.MGm9a', // 123123
            'remember_token' => Str::random(10),
            'clinic_id' => Clinic::all()->random()->id
        ]);

        $admin->assignRole(self::ROLE_NAME);
    }

}
