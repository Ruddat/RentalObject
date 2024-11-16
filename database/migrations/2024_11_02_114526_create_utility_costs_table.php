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
        Schema::create('utility_costs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Hinzufügen der user_id-Spalte
            $table->string('name'); // z.B. Hausmeister, Gewerbesteuer, etc.
            $table->string('short_name', 10)->nullable();
            $table->string('category', 50)->nullable(); // z.B. Betriebskosten, Verwaltungskosten, etc.
            $table->text('description')->nullable();
            $table->decimal('amount', 10, 2); // Betrag für die Position
            $table->enum('distribution_key', ['consumption', 'area', 'people', 'units'])
                  ->default('units')
                  ->comment('Verteilerschlüssel: consumption = Nach Verbrauch, area = Wohnfläche, people = Personenanzahl, units = Einheiten');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utility_costs');
    }
};
