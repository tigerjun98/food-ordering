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
        Schema::table('users', function (Blueprint $table) {
            $table->string('touch_pos_cust_id')->nullable()->after('dob');
            $table->text('touch_pos_cust_data')->nullable()->after('touch_pos_cust_id');
            $table->timestamp('touch_pos_created_at')->nullable()->after('deleted_at');
            $table->timestamp('touch_pos_updated_at')->nullable()->after('touch_pos_created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('touch_pos_cust_id');
            $table->dropColumn('touch_pos_cust_data');
            $table->dropColumn('touch_pos_created_at');
            $table->dropColumn('touch_pos_updated_at');
        });
    }
};
