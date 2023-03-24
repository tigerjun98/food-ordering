<?php

namespace Database\Seeders;

use App\Entity\Enums\ConsultationEnum;
use App\Models\Admin;
use App\Models\Fee;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\Prescription;
use App\Models\Setting;
use App\Models\Specialist;
use App\Models\Syndrome;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getListing() as $var){
            $model = new Fee();
            foreach ($var as $col => $val){
                $model->{$col} = $val;
            }
            $model->save();
        }
    }

    public function getListing()
    {
        return array(
            array(
                'name_en'   => 'Consultation (Normal)',
                'category'  => ConsultationEnum::CONSULTATION,
                'type'      => 100,
                'price'     => 30,
            ),
            array(
                'name_en'   => 'Consultation (Master)',
                'category'  => ConsultationEnum::CONSULTATION,
                'type'      => 101,
                'price'     => 40,
            ),
            array(
                'name_en'   => 'Consultation (Ph.D)',
                'category'  => ConsultationEnum::CONSULTATION,
                'type'      => 102,
                'price'     => 50,
            ),
            array(
                'name_en'   => 'Liquid 120ML',
                'category'  => ConsultationEnum::FLUID,
                'type'      => 120,
                'price'     => 30,
            ),
            array(
                'name_en'   => 'Liquid 200ML',
                'category'  => ConsultationEnum::FLUID,
                'type'      => 200,
                'price'     => 50,
            ),
            array(
                'name_en'   => 'Powder 42g',
                'remark'    => 'measurement for child',
                'category'  => ConsultationEnum::GRANULE_OR_POWDER,
                'type'      => 42,
                'price'     => 100,
            ),
            array(
                'name_en'   => 'Powder 63g',
                'remark'    => 'measurement for Adult',
                'category'  => ConsultationEnum::GRANULE_OR_POWDER,
                'type'      => 63,
                'price'     => 150,
            ),
            array(
                'name_en'   => 'Tablets 42pcs',
                'category'  => ConsultationEnum::TABLET_OR_CAPSULE,
                'type'      => 42,
                'price'     => 15,
            ),
            array(
                'name_en'   => 'Tablets 63pcs',
                'category'  => ConsultationEnum::TABLET_OR_CAPSULE,
                'type'      => 63,
                'price'     => 22,
            ),
            array(
                'name_en'   => 'Tablets 126pcs',
                'category'  => ConsultationEnum::TABLET_OR_CAPSULE,
                'type'      => 126,
                'price'     => 40,
            ),
        );
    }
}
