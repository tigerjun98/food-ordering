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
        Schema::create('consultations', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('ref_id')->nullable();
            $table->longText('symptom')->nullable();
            $table->longText('advise')->nullable();
            $table->longText('internal_remark')->nullable();
            $table->string('specialists')->nullable();
            $table->string('syndromes')->nullable();
            $table->string('diagnoses')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
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
        Schema::dropIfExists('consultations');
    }
};
