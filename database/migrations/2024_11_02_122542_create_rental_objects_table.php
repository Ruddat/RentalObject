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
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User-ID als Fremdschlüssel
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
            $table->decimal('base_cost_percentage', 5, 2)->default(0.3);  // 30% für Grundkosten
            $table->decimal('consumption_cost_percentage', 5, 2)->default(0.7); // 70% für Verbrauchskosten
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
