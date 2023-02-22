<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Clinic;
use App\Models\Consultation;
use App\Models\Option;
use App\Models\Prescription;
use App\Models\PrescriptionCombination;
use App\Models\Queue;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Clinic::factory(15)->create();
        User::factory(100)->create();
        Admin::factory(100)->create();

        $this->call([
            SpecialistSeeder::class,
            MedicineSeeder::class,
            SyndromeSeeder::class,
        ]);

        Option::factory(55)->create();
//        Consultation::factory(100)->create();
//        Prescription::factory(150)->create();
//        PrescriptionCombination::factory(250)->create();
        Queue::factory(55)->create();

        Artisan::call("db:medicine:update_name");
        Artisan::call("db:medicine:update_type");
        Artisan::call("db:medicine:update_category");
    }
}
