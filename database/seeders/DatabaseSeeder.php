<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Medicine;
use App\Models\Product;
use App\Models\Transaction;
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
        Admin::factory(1)->create();

        $this->call([
            // Medicine::class,
//            AdminSeeder::class,
//            TransactionSeeder::class,
        ]);
    }
}
