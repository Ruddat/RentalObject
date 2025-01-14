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
        Schema::create('mod_receipts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Benutzer-ID
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Fremdschlüssel
            $table->string('name')->nullable();
            $table->decimal('amount', 10, 2);
            $table->string('amount_in_words')->nullable();
            $table->decimal('tax_percent', 5, 2)->nullable();
            $table->decimal('tax_amount', 10, 2)->nullable();
            $table->date('date');
            $table->text('description')->nullable();
            $table->string('sender'); // Sender hinzufügen
            $table->string('receiver'); // Empfänger hinzufügen
            $table->string('number')->unique(); // Quittungsnummer
            $table->string('type'); // Typ der Quittung (z.B. Miete, Nebenkosten, etc.)
            $table->string('hash')->nullable(); // Hash-Wert für die Quittung
            $table->string('pdf_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mod_receipts');
    }
};
