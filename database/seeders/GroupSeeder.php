<?php

namespace Database\Seeders;

use App\Entity\Enums\ConsultationEnum;
use App\Entity\Enums\StatusEnum;
use App\Models\Admin;
use App\Models\Fee;
use App\Models\Group;
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

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getListing() as $var){

            $exists = Group::where('slug', $var['slug'])->first();

            if($exists){
                continue;
            }

            $model = new Group();
            foreach ($var as $col => $val){
                $model->{$col} = $val;
            }
            $model->status = StatusEnum::ACTIVE;
            $model->save();
        }
    }

    public function getListing()
    {
        return array(
            array(
                'slug'      => 'degree',
                'name_en'   => 'Bachelor\'s degree',
                'name_cn'   => '本科',
                'remark'    => 'For TouchPos system to get the consultation fee when the doctor labeled as this group.',
                'type'      => Group::ADMIN,
            ),
            array(
                'slug'      => 'master',
                'name_en'   => 'Master',
                'name_cn'   => '硕士',
                'remark'    => 'For TouchPos system to get the consultation fee when the doctor labeled as this group.',
                'type'      => Group::ADMIN,
            ),
            array(
                'slug'      => 'phd',
                'name_en'   => 'PhD',
                'name_cn'   => '博士',
                'remark'    => 'For TouchPos system to get the consultation fee when the doctor labeled as this group.',
                'type'      => Group::ADMIN,
            ),
        );
    }
}
