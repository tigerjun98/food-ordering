<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Provider\DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'origin',
            'password' => Hash::make('123123'),
            'email' => 'origin@gmail.com',
        ]);

    }
}
