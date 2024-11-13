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
        Schema::create('mod_floors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained('mod_properties')->onDelete('cascade'); // Beziehung zur Immobilie
            $table->string('name'); // Name der Etage
            $table->decimal('size', 8, 2)->nullable(); // Größe in Quadratmetern
            $table->decimal('price', 10, 2)->nullable(); // Preis der Etage
            $table->integer('bedrooms')->default(0); // Anzahl der Schlafzimmer
            $table->integer('bathrooms')->default(0); // Anzahl der Badezimmer
            $table->string('floor_plan')->nullable(); // Link zum Etagenplan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mod_floors');
    }
};
