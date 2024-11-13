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
        Schema::create('mod_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained('mod_properties')->onDelete('cascade'); // Beziehung zur Immobilie
            $table->string('path'); // Speicherort des Mediums
            $table->string('type')->nullable(); // Typ: Bild, Video, etc.
            $table->integer('order_index')->default(0); // Sortierreihenfolge
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mod_media');
    }
};
