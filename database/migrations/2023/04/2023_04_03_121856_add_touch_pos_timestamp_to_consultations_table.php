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
        Schema::table('consultations', function (Blueprint $table) {
            $table->timestamp('touch_pos_requested_at')->nullable()->after('touch_pos_response');
            $table->timestamp('touch_pos_responded_at')->nullable()->after('touch_pos_requested_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consultations', function (Blueprint $table) {
            $table->dropColumn('touch_pos_requested_at');
            $table->dropColumn('touch_pos_responded_at');
        });
    }
};
