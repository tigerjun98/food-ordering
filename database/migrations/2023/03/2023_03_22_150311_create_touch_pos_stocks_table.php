<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('touch_pos_stocks', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('stock_id')->nullable();
            $table->string('barcode')->nullable();
            $table->float('price')->default(0);
            $table->text('data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('touch_pos_stocks');
    }
};
