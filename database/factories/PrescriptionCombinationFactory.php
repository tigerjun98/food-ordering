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
        return [
            'quantity'          => rand(1, 6),
            'remark'            => $this->faker->realText(),
            'prescription_id'   => Prescription::all()->random()->id,
            'medicine_id'       => Medicine::all()->random()->id,
        ];
    }

}
