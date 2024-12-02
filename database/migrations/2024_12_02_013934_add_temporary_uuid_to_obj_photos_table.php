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
        Schema::table('obj_photos', function (Blueprint $table) {
            $table->uuid('temporary_uuid')->nullable()->after('property_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('obj_photos', function (Blueprint $table) {
            $table->dropColumn('temporary_uuid');
        });
    }
};
