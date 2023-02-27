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
class PrescriptionFactory extends Factory
{
    use RefreshDatabase;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category = array_rand(Prescription::getCategoryList());
        $metric = isset(Medicine::getCategoryList()[$category]) ? $category : null;
        $dayPerTime = rand(1, 6);
        $dosePerTime = rand(1, 6);
        $daily = $dayPerTime + $dosePerTime;

        return [
            'category'          => $category,
            'direction'         => array_rand(Prescription::getDirectionList()),
            'metric'            => $metric,
            'time_per_day'      => $dayPerTime,
            'dose_per_time'     => $dosePerTime,
            'dose_daily'        => $daily,
            'consultation_id'   => Consultation::all()->random()->id,
        ];
    }

}
