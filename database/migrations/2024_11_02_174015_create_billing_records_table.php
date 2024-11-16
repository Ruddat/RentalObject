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
        Schema::create('billing_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Verknüpft User
            $table->foreignId('billing_header_id')->constrained()->onDelete('cascade'); // Verknüpft Abrechnungskopf
            $table->foreignId('tenant_id')->constrained()->onDelete('cascade'); // Verknüpft Mieter
            $table->unsignedBigInteger('rental_object_id')->nullable();
            $table->string('billing_period'); // Zeitraum für die Abrechnung
            $table->decimal('total_cost', 10, 2); // Gesamtkosten
            $table->decimal('prepayment', 10, 2); // Vorauszahlungen
            $table->decimal('balance_due', 10, 2); // Restbetrag (nachzuzahlen oder Guthaben)
            $table->string('pdf_path')->nullable(); // Pfad zur PDF-Datei
            $table->string('pdf_path_second')->nullable();
            $table->string('pdf_path_third')->nullable();
            $table->json('standard_costs'); // Auflistung der Standardkosten
            $table->json('heating_costs'); // Auflistung der Heizkosten
            $table->timestamps();

            $table->foreign('rental_object_id')->references('id')->on('rental_objects')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing_records');
    }
};
