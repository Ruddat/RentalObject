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
        Schema::create('rental_objects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();  // Object Name
            $table->string('street');            // Straße
            $table->string('house_number');      // Hausnummer
            $table->string('zip_code');          // Postleitzahl
            $table->string('city');              // Stadt
            $table->string('object_type')->default('Privat'); // Objekttyp
            $table->string('country')->default('Deutschland'); // Land
            $table->decimal('rent_amount', 10, 2)->nullable(); // Mietbetrag
            $table->enum('billing_method', ['units', 'people'])->default('units');
            $table->string('floor')->nullable(); // Etage
            $table->text('description')->nullable();           // Beschreibung
            $table->unsignedInteger('max_units')->nullable();  // Max Einheiten/Mieter
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_objects');
    }
};
