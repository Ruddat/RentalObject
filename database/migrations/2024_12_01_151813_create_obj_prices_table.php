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
        Schema::create('obj_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id'); // Foreign Key zur obj_properties
            $table->decimal('purchase_price', 15, 2)->nullable();
            $table->decimal('cold_rent', 15, 2)->nullable();
            $table->decimal('warm_rent', 15, 2)->nullable();
            $table->decimal('maintenance_fee', 15, 2)->nullable();
            $table->boolean('capital_investment')->default(false);
            $table->boolean('renovation_depreciation')->default(false);
            $table->boolean('historic_preservation')->default(false);
            $table->string('additional_information')->nullable();
            $table->decimal('price_per_square_meter', 15, 2)->nullable();
            $table->integer('parking_slots')->nullable();
            $table->decimal('parking_price', 15, 2)->nullable();
            $table->decimal('multiple_of_rent', 15, 2)->nullable();
            $table->decimal('utilities', 15, 2)->nullable();
            $table->decimal('heating_costs', 15, 2)->nullable();
            $table->string('no_specification')->nullable();
            $table->decimal('price_per_sqm', 15, 2)->nullable();
            $table->integer('number_parking_spaces')->nullable();
            $table->decimal('price_parking_space', 15, 2)->nullable();
            $table->decimal('deposit', 15, 2)->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('property_id')->references('id')->on('obj_properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obj_prices');
    }
};
