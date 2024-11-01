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
        Schema::create('auto_translations', function (Blueprint $table) {
            $table->id();
            $table->string('key'); // Erhöhte Zeichenbeschränkung auf 1024
            $table->string('locale', 5);
            $table->longText('text'); // Verwendung von longText für längere Übersetzungen
            $table->unique(['key', 'locale']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auto_translations');
    }
};
