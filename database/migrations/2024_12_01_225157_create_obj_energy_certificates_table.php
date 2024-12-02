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
        Schema::create('obj_energy_certificates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->string('name');
            $table->string('certificate_type');
            $table->string('building_type');
            $table->string('certificate_art');
            $table->date('issue_date')->nullable();
            $table->date('valid_until')->nullable();
            $table->string('primary_energy_carrier')->nullable();
            $table->integer('construction_year')->nullable();
            $table->decimal('energy_consumption', 10, 2)->nullable();
            $table->string('efficiency_class')->nullable();
            $table->boolean('water_included')->default(false);
            $table->timestamps();

            $table->foreign('property_id')->references('id')->on('obj_properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obj_energy_certificates');
    }
};
