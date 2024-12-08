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
        Schema::create('historical_weather', function (Blueprint $table) {
            $table->id();
            $table->string('city_name');
            $table->date('date');
            $table->float('temperature')->nullable(); // Durchschnittstemperatur
            $table->float('min_temperature')->nullable(); // Minimale Temperatur
            $table->float('max_temperature')->nullable(); // Maximale Temperatur
            $table->integer('humidity')->nullable(); // Luftfeuchtigkeit in %
            $table->float('precipitation')->nullable(); // Niederschlag in mm
            $table->float('snowfall')->nullable(); // Schneefall in mm
            $table->integer('pressure')->nullable(); // Luftdruck in hPa
            $table->string('weather_desc')->nullable(); // Beschreibung, z.B. "klar"
            $table->float('wind_speed')->nullable(); // Windgeschwindigkeit in m/s
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historical_weather');
    }
};
