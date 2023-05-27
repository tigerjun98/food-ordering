<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Clinic;
use App\Models\Consultation;
use App\Models\Merchant;
use App\Models\Option;
use App\Models\Prescription;
use App\Models\PrescriptionCombination;
use App\Models\Queue;
use App\Models\User;
use App\Models\Vendor;
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
//        User::factory(100)->create();
        Admin::factory(10)->create();
//        Merchant::factory(10)->create();
    }
}
