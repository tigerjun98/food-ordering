<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Diagnose;
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
        return [
            'category'          => array_rand(Prescription::getCategoryList()),
            'direction'         => array_rand(Prescription::getDirectionList()),
            'metric'            => array_rand(Prescription::getMetricList()),
            'time_per_day'      => rand(1, 6),
            'dose_per_time'     => rand(1, 6),
            'dose_daily'        => rand(1, 6),
            'consultation_id'   => Consultation::all()->random()->id,
        ];
    }

}
