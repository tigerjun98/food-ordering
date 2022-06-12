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
            'email' => 'origin@gmail.com',
        ]);

        User::create([
            'name' => 'tiger',
            'email' => 'tiger@gmail.com',
        ]);

        User::create([
            'name' => 'yumi',
            'email' => 'yumi@gmail.com',
        ]);
    }
}
