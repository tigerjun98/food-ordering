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
        Schema::create('products', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('product_name')->unique()->nullable();
            $table->string('product_name_en')->nullable();
            $table->string('product_name_cn')->nullable();
            $table->json('product_images')->nullable();
            $table->integer('status')->nullable();
            $table->double('price_0')->nullable();
            $table->double('price_1')->nullable();
            $table->double('product_rating')->nullable();
            $table->string('product_short_desc_en')->nullable();
            $table->string('product_short_desc_cn')->nullable();
            $table->longText('product_desc_en')->nullable();
            $table->longText('product_desc_cn')->nullable();
            $table->string('product_variant_name_en')->nullable();
            $table->string('product_variant_name_cn')->nullable();
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
        Schema::dropIfExists('products');
    }
};
