<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Diagnose;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\Prescription;
use App\Models\Specialist;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PrescriptionCombinationFactory extends Factory
{
    use RefreshDatabase;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $prescription = Prescription::all()->random();
        if(array_key_exists($prescription->category, Medicine::getCategoryList())){
            $medicineId = Medicine::all()->random()->id;
        } else{
            $remark = $this->faker->realText();
        }

        $qty = rand(1, 99);
        $prescription->increment('combination_amount',$qty);

        // no combination for remark; Hence remove previous medicines
        if(isset($remark)){
            foreach ($prescription->combinations as $combination){
                $combination->delete();
            }
            $prescription->remark = $remark;
            $prescription->save();
        }

        return [
            'quantity'          => $qty,
            'remark'            => $remark ?? null,
            'prescription_id'   => $prescription->id,
            'medicine_id'       => $medicineId ?? null,
        ];
    }

}
