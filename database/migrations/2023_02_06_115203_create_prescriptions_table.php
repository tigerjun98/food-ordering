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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->integer('category')->nullable();
            $table->integer('time_per_day')->nullable();
            $table->integer('dose_per_time')->nullable();
            $table->integer('dose_daily')->nullable();
            $table->integer('metric')->nullable();
            $table->integer('combination_amount')->nullable();
            $table->integer('direction')->nullable();
            $table->longText('remark')->nullable();
            $table->unsignedBigInteger('consultation_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
};
