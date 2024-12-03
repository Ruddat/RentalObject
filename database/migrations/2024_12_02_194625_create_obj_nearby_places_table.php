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
        Schema::create('obj_nearby_places', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id'); // Verknüpfung zur Immobilie
            $table->unsignedBigInteger('place_id'); // Verknüpfung zum nahegelegenen Ort
            $table->decimal('distance', 8, 2)->nullable(); // Entfernung in km
            $table->timestamps();

            // Fremdschlüssel-Beziehungen
            $table->foreign('property_id')->references('id')->on('obj_properties')->onDelete('cascade');
            $table->foreign('place_id')->references('id')->on('near_by_places')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obj_nearby_places');
    }
};
