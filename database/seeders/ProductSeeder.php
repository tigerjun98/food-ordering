<?php

namespace Database\Seeders;

use App\Http\Controllers\Admin\ProductController;
use App\Models\Location;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductSeeder extends Seeder
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
                Product::create([
                    'id'                => $id,
                    'product_images'    => $var['product_images'],
                ]);
                app(ProductController::class)->update(new Request($var), $id);
                \DB::commit();

            } catch (\Exception $e) {
                \DB::rollback();
            }
        }
    }

    public function getLists()
    {
        $arr = [];
        $faker = Factory::create();

        $arr[] = [
            'product_images'            => ["1650283145.jpg", "1650283149.jpg"],
            'product_variant_name_en'   => 'size',
            'product_short_desc_en'     => $faker->paragraph,
            'product_type'              => ['75ml', '105ml'],
            'product_type_label'        => ['s', 'l'],
            'product_name_en'           => 'Samboja Ratu',
            'product_desc_en'           => '<p>Bird&rsquo;s Nest is produced by wild golden edible bird nest, which is harvested from one of the best-managed edible bird&rsquo;s nest caves in the world &ldquo;Gomantong Cave&rdquo;, Sabah. The wild bird nests are rare due to the limited harvested quantity. It contains rich natural nutrition, high mineral, Sialic acid, and protein. It&rsquo;s easily absorbed by the human body, also able to keep body stay hydrated, excellent for beauty complexion, aid in improving the lungs, gastral, and kidneys function.</p>
<p><img src="http://yale-app.test/storage/products/1650283284.jpg" style="width: 100%;" /></p>
<p><img src="http://yale-app.test/storage/products/1650283274.jpg" style="width: 100%;" /></p>
<p><img src="http://yale-app.test/storage/products/1650283263.jpg" style="width: 100%;" /></p>',
            'status'        => 0,
            'price_0'       => 280,
            'price_1'       => 258,
            'max'           => [100, 200, 500],
            'commission'    => [10, 15, 20, 25],
        ];

        $arr[] = [
            'product_images'            => ["1650283394.jpg", "1650283396.jpg"],
            'product_variant_name_en'   => 'size',
            'product_short_desc_en'     => $faker->paragraph,
            'product_type'              => ['75ml', '105ml'],
            'product_type_label'        => ['s', 'l'],
            'product_name_en'           => 'Samboja Putri',
            'product_desc_en'           => '<p>Bird&rsquo;s Nest is produced by wild golden edible bird nest, which is harvested from one of the best-managed edible bird&rsquo;s nest caves in the world &ldquo;Gomantong Cave&rdquo;, Sabah. The wild bird nests are rare due to the limited harvested quantity. It contains rich natural nutrition, high mineral, Sialic acid, and protein. It&rsquo;s easily absorbed by the human body, also able to keep body stay hydrated, excellent for beauty complexion, aid in improving the lungs, gastral, and kidneys function.</p>
<p><img src="http://yale-app.test/storage/products/1650283284.jpg" style="width: 100%;" /></p>
<p><img src="http://yale-app.test/storage/products/1650283274.jpg" style="width: 100%;" /></p>
<p><img src="http://yale-app.test/storage/products/1650283263.jpg" style="width: 100%;" /></p>',
            'status'        => 0,
            'price_0'       => 205,
            'price_1'       => 198,
            'max'           => [100, 200, 500],
            'commission'    => [10, 15, 20, 25],
        ];

        return $arr;
    }

}
