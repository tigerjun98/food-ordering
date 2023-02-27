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
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Modules\Admin\Permissions\Permission as PermissionAlias;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guard = 'admin';

        $roles = [
            'super-admin' => [
                'user.*',
                'queue.*',
                'account.*',
                'medicine.*',
                'option.*',
                'consultation.*',
                'attachment.*',
            ],
        ];

        collect($roles)->each(function ($permissions, $role) use($guard) {
            $role = Role::findOrCreate($role, $guard);
            collect($permissions)->each(function ($permission) use ($role, $guard) {
                $role->permissions()->save(Permission::findOrCreate($permission, $guard));
            });
        });

        $this->createAndAssignSuperAdmin();
    }

    public function createAndAssignSuperAdmin()
    {
        $userFactory = (new UserFactory());
        $dobAndNric = $userFactory->getRandDobAndNric();
        $gender = $userFactory->getRandGender();

        $faker = \Faker\Factory::create();
        $fakerCN = \Faker\Factory::create('zh_CN');

        $admin = Admin::create([
            'name' => $faker->userName(),
            'name_en' => $faker->name($gender[1]),
            'name_cn' =>  $fakerCN->name($gender[1]),
            'gender' => $gender[0],
            'nric' => $dobAndNric[1],
            'phone' => '601'.$faker->randomNumber(8),
            'email' => 'admin@admin.com',
            'password' => '$2y$10$qivlTFx6oBeB92J13hCIruir0zqMp8qN5JVq058YoGfoQQ4.MGm9a', // 123123
            'remember_token' => Str::random(10),
            'clinic_id' => Clinic::all()->random()->id
        ]);

        $admin->assignRole('super-admin');
    }

}
