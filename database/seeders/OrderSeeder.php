<?php

namespace Database\Seeders;

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Models\Location;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getLists() as $var) {
            try {
                \DB::beginTransaction();
                $id = strval(abs( crc32( uniqid() ) ));
                OrderDetail::create([
                    'id' => $id,
                ]);
                app(OrderController::class)->update(new Request($var), $id);
                \DB::commit();

            } catch (\Exception $e) {
                dd($e);
                \DB::rollback();
            }
        }
    }

    public function getLists()
    {
        $arr    = [];
        $faker  = Factory::create();

        $referral = ['yumi', 'tiger', 'origin'];

        for ($i = 0; $i < 500; $i++){

            $state = strtolower(str_replace(' ','_',Arr::random(Location::getStateList(), 1)[0]));
            $location = Arr::random(Location::getList('kuala_lumpur'), 1)[0];

            $arr[]  = [
                'referral_username' => Arr::random($referral, 1)[0],
                'first_name'        => $faker->firstName(),
                'last_name'         => $faker->lastName(),
                'email'             => $faker->email(),
                'phone'             => '01'.$faker->numberBetween(0, 9).$faker->numberBetween(111, 999).$faker->numberBetween(1111, 9999),
                'quantity'          => [ $faker->numberBetween(1, 20) ],
                'orders'            => [ Arr::random(ProductType::pluck('id')->toArray(), 1)[0] ],
                'state'             => $state,
                'area'              => strtolower(str_replace(' ','_',Arr::random(Location::getAreaList($state), 1)[0])),
                'postcode'          => $location['postcode'],
                'address_1'         => $faker->numberBetween(111, 999).' lorong '.$faker->numberBetween(1, 99).' '.$location['location'],
//                'dob' => $faker->date($format = 'D-m-y', $max = '2010',$min = '1980')
                'status'            => 0,
            ];
        }


        return $arr;
    }
}
