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
            $table->string('name')->nullable();
            $table->string('street');
            $table->string('house_number');
            $table->string('zip_code');
            $table->string('city');
            $table->string('object_type')->default('Privat');
            $table->string('country')->default('Deutschland');
            $table->decimal('rent_amount', 10, 2)->nullable();
            $table->enum('billing_method', ['units', 'people', 'area'])->default('units');
            $table->string('floor')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('max_units')->nullable();
            $table->decimal('square_meters', 8, 2)->nullable(); // Quadratmeter
            $table->enum('heating_type', ['Gas', 'Öl', 'Fernwärme', 'Elektro'])->nullable(); // Heiztyp
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
