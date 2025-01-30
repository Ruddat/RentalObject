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
        Schema::table('mod_invoices', function (Blueprint $table) {
            $table->foreignId('creator_id')->nullable()->constrained('mod_invoice_creators')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mod_invoices', function (Blueprint $table) {
            $table->dropForeign(['creator_id']); // Entfernt den Fremdschlüssel
            $table->dropColumn('creator_id');   // Löscht die Spalte
        });
    }
};
