<?php

namespace Database\Seeders;

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PromotionController;
use App\Models\Location;
use App\Models\OrderDetail;
use App\Models\ProductType;
use App\Models\Promotion;
use App\Models\User;
use Faker\Factory;
use Faker\Provider\DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use DB;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('promotions')->delete();

        foreach ($this->getLists() as $var) {
            try {
                \DB::beginTransaction();
                $id = strval(abs( crc32( uniqid() ) ));
                Promotion::create([
                    'id' => $id,
                    'image_en'      => '1651599971.jpg',
                    'image_cn'      => '1651599971.jpg',
                ]);
                app(PromotionController::class)->update(new Request($var), $id);
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
        $faker_cn = Factory::create('zh_Hans_CN');

        for ($i = 0; $i < 10; $i++){
            $arr[]  = [
                'id'            => abs( crc32( uniqid() ) ),
                'event_date'    => '2022/05/04 23:59-2022/06/04 23:59',
                'url'           => $faker->url(),
                'status'        => 0,
                'label_en'      => $faker->realText(rand(10, 20)),
                'label_cn'      => $faker_cn->realText(rand(10, 20)),
                'desc_en'       => $faker->text(200),
                'desc_cn'       => $faker_cn->text(200),
                'title_en'      => $faker->text(50),
                'title_cn'      => $faker_cn->text(50),
            ];
        }


        return $arr;
    }
}
