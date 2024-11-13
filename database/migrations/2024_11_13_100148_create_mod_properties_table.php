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
        Schema::create('mod_properties', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name der Immobilie
            $table->text('description')->nullable(); // Beschreibung
            $table->decimal('price', 10, 2)->nullable(); // Preis
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mod_properties');
    }
};
