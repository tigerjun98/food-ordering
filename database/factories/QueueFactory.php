<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Queue;
use App\Models\User;
use Carbon\Carbon;
use Faker\Provider\zh_CN\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class QueueFactory extends Factory
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
            'id'                => new_id(),
            'status'            => Queue::WAITING, //array_rand(Queue::getStatusList()),
            'type'              => Queue::CONSULTATION, // array_rand(Queue::getTypeList()),
            'remark'            => $this->faker->realText(),
            'appointment_date'  => Carbon::now(),
            'user_id'           => User::all()->random()->id,
            'admin_id'          => Admin::all()->random()->id,
            'doctor_id'         => Admin::all()->random()->id,
        ];
    }
}
