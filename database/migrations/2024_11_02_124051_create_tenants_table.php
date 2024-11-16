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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User-ID als Fremdschlüssel
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street')->nullable();
            $table->string('house_number')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->foreignId('rental_object_id')->constrained('rental_objects')->onDelete('cascade');
            $table->enum('billing_type', ['units', 'people', 'flat_rate'])->default('units');
            $table->integer('unit_count')->nullable();
            $table->integer('person_count')->nullable();
            $table->decimal('square_meters', 8, 2)->nullable(); // Quadratmeter
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            // Zählerstand Felder
            $table->decimal('gas_meter', 10, 2)->nullable();
            $table->decimal('electricity_meter', 10, 2)->nullable();
            $table->decimal('water_meter', 10, 2)->nullable();
            $table->decimal('hot_water_meter', 10, 2)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
