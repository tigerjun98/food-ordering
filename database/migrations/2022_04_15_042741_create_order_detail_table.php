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
        Schema::create('order_detail', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('referral_id')->nullable();
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->string('action')->nullable();
            $table->string('name')->nullable();
            $table->string('referral_username')->nullable();
            $table->integer('user_tier')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->integer('status')->nullable();
            $table->string('state')->nullable();
            $table->string('area')->nullable();
            $table->unsignedInteger('postcode')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('tracking_no')->nullable();
            $table->string('shipping_courier')->nullable();
            $table->boolean('new_user')->default(false);
            $table->string('reset_password_token')->nullable();
            $table->text('full_address')->nullable();
            $table->text('remark')->nullable();
            $table->double('total_price',8,2)->nullable();
            $table->timestamp('paid_at')->nullable();
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
        Schema::dropIfExists('order_detail');
    }
};
