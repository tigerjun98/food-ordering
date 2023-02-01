<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('name')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_cn')->nullable();
            $table->string('nric')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('occupation')->nullable();
            $table->text('remark')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('status')->nullable();
            $table->integer('gender')->nullable();
            $table->string('emergency_person_name')->nullable();
            $table->string('emergency_person_contact')->nullable();
            $table->string('emergency_person_relationship')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken()->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->date('dob')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
