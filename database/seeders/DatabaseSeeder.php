<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Clinic;
use App\Models\Consultation;
use App\Models\Option;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(100)->create();
        Admin::factory(100)->create();

        $this->call([
            SpecialistSeeder::class,
            MedicineSeeder::class,
            SyndromeSeeder::class,
        ]);

        Option::factory(55)->create();
        Clinic::factory(15)->create();
        Consultation::factory(100)->create();

    }
}
