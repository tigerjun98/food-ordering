<?php

namespace Database\Factories;

use App\Models\Admin;
use Carbon\Carbon;
use Faker\Provider\zh_CN\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class OptionFactory extends Factory
{
    use RefreshDatabase;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $types = ['diagnose', 'syndrome'];

        return [
            'type' => $types[array_rand($types)],
            'name_en' => $this->faker->streetName(),
            'name_cn' => Company::companyPrefix(),
            'admin_id' => Admin::all()->random()->id,
        ];
    }
}
