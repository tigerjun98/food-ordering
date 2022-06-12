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
        Schema::create('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('product_type_id')->nullable();
            $table->unsignedBigInteger('order_detail_id')->nullable();
            $table->string('order_batch')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('product_type_name')->nullable();
            $table->string('product_name')->nullable();
            $table->string('order_id')->nullable();
            $table->double('unit_price', 8, 2)->nullable();
            $table->double('order_price', 8, 2)->nullable();
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
        Schema::dropIfExists('orders');
    }
};
