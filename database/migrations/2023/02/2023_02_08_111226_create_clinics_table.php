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
        Schema::create('clinics', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->integer('status')->nullable();
            $table->string('code')->nullable();
            $table->string('slug')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_cn')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('url')->nullable();
            $table->string('address')->nullable();
            $table->string('postcode')->nullable();
            $table->string('area')->nullable();
            $table->string('state')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('gmap_embed_code')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
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
        Schema::dropIfExists('clinics');
    }
};
