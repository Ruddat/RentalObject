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
            // recipient_id hinzufügen (ohne "after" wegen Fehler)
            $table->unsignedBigInteger('recipient_id')->nullable();

            // Fremdschlüssel setzen
            $table->foreign('recipient_id')
                ->references('id')
                ->on('mod_invoice_recipients')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mod_invoices', function (Blueprint $table) {
            // Fremdschlüssel entfernen
            $table->dropForeign(['recipient_id']);

            // Spalte recipient_id löschen
            $table->dropColumn('recipient_id');
        });
    }
};
