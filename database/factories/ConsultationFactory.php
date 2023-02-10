<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Diagnose;
use App\Models\Specialist;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ConsultationFactory extends Factory
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
            'admin_id' => Admin::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'advise' => $this->faker->realText(),
            'symptom' => $this->faker->realText(),
            'remark' => $this->faker->realText(),
            'diagnose' => implode(',', Diagnose::all()->random(rand(1,2))->pluck('id')->toArray()),
            'syndrome' => implode(',', Specialist::all()->random(rand(1,2))->pluck('id')->toArray()),
            'specialist' => implode(',', Specialist::all()->random(rand(1,5))->pluck('id')->toArray()),
        ];
    }

}
