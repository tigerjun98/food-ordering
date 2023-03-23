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
        Schema::create('fees', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('name_en')->nullable();
            $table->string('name_cn')->nullable();
            $table->text('remark')->nullable();
            $table->string('category')->nullable();
            $table->integer('type')->nullable();
            $table->float('price')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fees');
    }
};
