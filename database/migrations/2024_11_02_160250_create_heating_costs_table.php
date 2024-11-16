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
        Schema::create('heating_costs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // User-ID hinzufügen
            $table->unsignedBigInteger('rental_object_id');
            $table->enum('heating_type', ['gas', 'oil']);
            $table->decimal('price_per_unit', 8, 2)->nullable(); // Preis pro Einheit (Liter für Öl oder m³ für Gas)
            $table->integer('initial_reading')->nullable(); // Anfangsstand (z.B. für Gas)
            $table->integer('final_reading')->nullable(); // Endstand für Abrechnungsperiode
            $table->decimal('total_oil_used', 8, 2)->nullable(); // Gesamtverbrauch Öl in Litern
            $table->decimal('warm_water_percentage', 5, 2)->default(0.2); // Prozentanteil für Warmwasser
            $table->integer('year')->nullable()->comment('Abrechnungsjahr');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('rental_object_id')->references('id')->on('rental_objects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heating_costs');
    }
};
