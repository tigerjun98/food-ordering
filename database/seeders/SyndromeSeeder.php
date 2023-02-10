<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Setting;
use App\Models\Specialist;
use App\Models\Syndrome;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class SyndromeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getListing() as $var){
            $model = new Syndrome();
            foreach ($var as $col => $val){
                $model->{$col} = $val;
            }
            $model->admin_id = Admin::all()->random()->id;
            $model->save();
        }
    }

    public function getListing()
    {
        return array(
            array(
                'name_cn' => '风湿',
                'name_en' => 'Rheumatism',
                'desc_cn' => '',
                'desc_en' => '',
            ),
            array(
                'name_cn' => '风寒',
                'name_en' => 'wind-cold',
                'desc_cn' => '',
                'desc_en' => '',
            ),
            array(
                'name_cn' => '风热',
                'name_en' => '',
                'desc_cn' => '',
                'desc_en' => '',
            ),
            array(
                'name_cn' => '湿气',
                'name_en' => '',
                'desc_cn' => '',
                'desc_en' => '',
            ),
        );
    }
}
