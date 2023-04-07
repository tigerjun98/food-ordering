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
            $table->string('touch_pos_doc_no')->nullable()->after('consulted_at');
            $table->boolean('touch_pos_request_status')->nullable()->after('touch_pos_doc_no');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consultations', function (Blueprint $table) {
            $table->dropColumn('touch_pos_doc_no');
            $table->dropColumn('touch_pos_request_status');
        });
    }
};
