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
        Schema::create('recorded_utility_costs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // User-ID hinzufügen
            $table->unsignedBigInteger('rental_object_id');
            $table->unsignedBigInteger('utility_cost_id'); // Verknüpfung zur `utility_costs`-Tabelle
            $table->decimal('amount', 10, 2); // Spezifischer Betrag
            $table->enum('distribution_key', ['consumption', 'area', 'people', 'units'])
                ->default('units')
                ->comment('Verteilerschlüssel: consumption = Nach Verbrauch, area = Wohnfläche, people = Personenanzahl, units = Einheiten');
            $table->string('custom_name')->nullable(); // Optionaler benutzerdefinierter Name für zusätzliche Optionen
            $table->year('year')->default(date('Y')); // Standardmäßig aktuelles Jahr
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('rental_object_id')->references('id')->on('rental_objects')->onDelete('cascade');
            $table->foreign('utility_cost_id')->references('id')->on('utility_costs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recorded_utility_costs');
    }
};
