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
        Schema::table('mod_invoice_creators', function (Blueprint $table) {
            $table->softDeletes(); // Fügt das Feld `deleted_at` hinzu

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mod_invoice_creators', function (Blueprint $table) {
            $table->dropSoftDeletes(); // Entfernt das Feld `deleted_at`
        });
    }
};
