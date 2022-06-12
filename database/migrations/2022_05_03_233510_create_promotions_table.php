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
        Schema::create('promotions', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->integer('status')->nullable();
            $table->string('image_en')->nullable();
            $table->string('image_cn')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_cn')->nullable();
            $table->string('label_en')->nullable();
            $table->string('label_cn')->nullable();
            $table->string('url')->nullable();
            $table->longText('desc_en')->nullable();
            $table->longText('desc_cn')->nullable();
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
        Schema::dropIfExists('promotions');
    }
};
