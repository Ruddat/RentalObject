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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('rental_object_id');
            $table->enum('billing_type', ['units', 'people'])->default('units');
            $table->integer('unit_count')->nullable();
            $table->integer('person_count')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            // Optional Zählerstand Felder
            $table->decimal('gas_meter', 10, 2)->nullable();  // Zählerstand Gas
            $table->decimal('electricity_meter', 10, 2)->nullable();  // Zählerstand Strom
            $table->decimal('water_meter', 10, 2)->nullable();  // Zählerstand Wasser
            $table->decimal('hot_water_meter', 10, 2)->nullable();  // Zählerstand Warmwasser

            $table->timestamps();

            $table->foreign('rental_object_id')->references('id')->on('rental_objects')->onDelete('cascade');
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
