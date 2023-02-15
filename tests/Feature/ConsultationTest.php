<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\Prescription;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConsultationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create()
    {

        $faker = \Faker\Factory::create();

        $admin = Admin::all()->random();

        $reqData = [
            'user_id' => User::all()->random()->id,
            'specialists' => Option::take(3)->pluck('id'),
            'syndromes' => Option::take(2)->pluck('id'),
            'diagnoses' => Option::take(2)->pluck('id'),
            'symptom' => $faker->realText,
            'category' => [
                '123' => rand(1, 6),
                '456' => rand(1, 6),
                '789' => rand(1, 6),
            ],
            'metric' => [
                '123' => rand(1, 3),
                '456' => rand(1, 3),
                '789' => rand(1, 3),
            ],
            'time_per_day' => [
                '123' => rand(1, 6),
                '456' => rand(1, 6),
                '789' => rand(1, 6),
            ],
            'dose_per_time' => [
                '123' => rand(1, 6),
                '456' => rand(1, 6),
                '789' => rand(1, 6),
            ],
            'dose_daily' => [
                '123' => rand(1, 6),
                '456' => rand(1, 6),
                '789' => rand(1, 6),
            ],
            'direction' => [
                '123' => rand(1, 4),
                '456' => rand(1, 4),
                '789' => rand(1, 4),
            ],
            'medicine_id' => [
                '123' => Medicine::take(2)->pluck('id')->toArray(),
                '456' => Medicine::take(3)->pluck('id')->toArray(),
                '789' => Medicine::take(4)->pluck('id')->toArray(),
            ],
            'quantity' => [
                '123' => [3, 4],
                '456' => [1, 3, 5],
                '789' => [5, 7, 12],
            ],
        ];

        $admin = Admin::factory()->create();
        $response = $this->actingAs($admin, 'admin')->postJson(
            route('admin.consultation.store'), $reqData
        );


        $response->assertStatus(200);
    }
}
