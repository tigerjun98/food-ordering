<?php

namespace Database\Factories;

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
        $dobAndNric = $this->getRandDobAndNric();
        $gender = $this->getRandGender();

        $specialist = ['儿科', '骨科'];

        return [
            'user_id' => User::all()->random()->id,
            'name' => $this->faker->userName(),
            'name_en' => $this->faker->name($gender[1]),
            'phone' => '601'.$this->faker->randomNumber(8),
            'gender' => $gender[0],
            'dob' => $dobAndNric[0],
            'nric' => $dobAndNric[1],
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$qivlTFx6oBeB92J13hCIruir0zqMp8qN5JVq058YoGfoQQ4.MGm9a', // 123123
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return string
     */

    /**
     * NRIC = National Registration Identity Card
     * DOB = DateOfBirth;
     */

    public function getRandGender()
    {
        $gender = array("male", "female");
        $randomGenderKey = array_rand($gender,1);
        return [$randomGenderKey+1, $gender[$randomGenderKey]]; // Refer Constants.php to understand KEY value
    }

    public function getRandDobAndNric()
    {
        $birthDate = Carbon::now()->addYears(-10)->format('Y-m-d');
        $date = explode("-", $birthDate);
        $lastTwoDigitYear = substr($date[0], -2);
        $nric = $lastTwoDigitYear.$date[1].$date[2]
            .$this->faker->numberBetween(11,99)
            .$this->faker->numberBetween(1111,9999);

        return [ $birthDate, $nric ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
