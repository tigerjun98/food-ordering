<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use Faker\Provider\zh_CN\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ClinicFactory extends Factory
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
            'code' => strtoupper($this->faker->lexify('???')),
            'name_en' => $this->faker->company(),
            'name_cn' => Company::companyPrefix().Company::companySuffix(),
            'contact' => '601'.$this->faker->randomNumber(8),
            'email' => $this->faker->companyEmail(),
            'url' => $this->faker->url(),
            'address' => $this->faker->address(),
            'area' => $this->faker->city(),
            'postcode' => $this->faker->postcode(),
            'state' => array_rand(User::getStatesList()),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
        ];
    }
}
