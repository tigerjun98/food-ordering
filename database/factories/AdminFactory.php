<?php

namespace Database\Factories;

use Carbon\Carbon;
use Faker\Provider\zh_CN\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AdminFactory extends Factory
{
    use RefreshDatabase;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $userFactory = (new UserFactory());
        $dobAndNric = $userFactory->getRandDobAndNric();
        $gender = $userFactory->getRandGender();

        return [
            'name' => $this->faker->userName(),
            'name_en' => $this->faker->name($gender[1]),
            'name_cn' => Company::companyPrefix().Company::companyPrefix(),
            'gender' => $gender[0],
            'nric' => $dobAndNric[1],
            'phone' => '601'.$this->faker->randomNumber(8),
            'email' => $this->faker->companyEmail(),
            'password' => '$2y$10$qivlTFx6oBeB92J13hCIruir0zqMp8qN5JVq058YoGfoQQ4.MGm9a', // 123123
            'remember_token' => Str::random(10),
        ];
    }
}
