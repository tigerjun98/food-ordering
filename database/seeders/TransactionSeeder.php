<?php

namespace Database\Seeders;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\DepositController;
use App\Models\Transaction;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 5; $i++){
            foreach ($this->getLists() as $var) {
                try {
                    \DB::beginTransaction();
                    $id = strval(abs( crc32( uniqid() ) ));
                    $var['id'] = $id;
                    Transaction::create($var);
                    \DB::commit();

                } catch (\Exception $e) {
                    \DB::rollback();
                }
            }
        }

    }

    public function getLists()
    {
        $arr = [];
        $faker = Factory::create();

        $random = $faker->unique()->numberBetween(0,2);
        $arr[] = [
            'amount'        => $faker->unique()->numberBetween(1, 2000),
            'address'       => Transaction::getNetworkAddress($random),
            'token'         => 0,
            'status'        => 1,
            'network'       => $random,
            'user_id'       => 2415834100,
        ];
        return $arr;
    }

}
