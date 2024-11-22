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
        Schema::create('mod_invoice_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_id');
            $table->string('item_number')->nullable(); // Artikelnummer
            $table->string('description'); // Beschreibung
            $table->integer('quantity'); // Menge
            $table->decimal('unit_price', 10, 2); // Einzelpreis
            $table->decimal('tax_rate', 5, 2)->default(0); // Steuer (z.B. 19%)
            $table->decimal('total_price', 10, 2); // Gesamtpreis (Einzelpreis * Menge + Steuer)
            $table->timestamps();

            $table->foreign('invoice_id')->references('id')->on('mod_invoices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mod_invoice_items');
    }
};
