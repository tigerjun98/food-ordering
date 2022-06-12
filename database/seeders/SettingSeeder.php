<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name' => 'home',
        ]);

        Setting::create([
            'name' => 'popup',
        ]);

        Setting::create([
            'name'      =>'contact',
            'contact'   => [
                'email' => 'test@gmail.com',
                'phone' => '1700 81 9189',
                'address' => 'No. 26, Jalan Budi 1,Taman Industri Wawasan, 83000 Batu Pahat, Johor, Malaysia.',
            ],
        ]);
    }
}
