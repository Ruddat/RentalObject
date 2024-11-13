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
        Schema::create('modvideos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained('mod_properties')->onDelete('cascade'); // Beziehung zur Immobilie
            $table->string('url'); // URL des Videos
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modvideos');
    }
};
