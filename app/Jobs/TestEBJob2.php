<?php

namespace App\Jobs;

use App\Models\Admin;
use Faker\Factory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class TestEBJob2 implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $timeout = 1500;

    public function __construct()
    {
        $this->onConnection('database');
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $faker = Factory::create();

        $admin = [
            'name' => $faker->userName(),
            'name_en' => $faker->name(),
            'phone' => '601'.$faker->randomNumber(8),
            'email' => $faker->companyEmail(),
            'password' => '$2y$10$qivlTFx6oBeB92J13hCIruir0zqMp8qN5JVq058YoGfoQQ4.MGm9a', // 123123
            'remember_token' => Str::random(10),
        ];

        Admin::create($admin);

        \Log::error('Test Job done');
    }

}
