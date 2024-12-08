<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoricalWeather extends Model
{
    // Erlaubte Felder für Massenbearbeitung
    protected $fillable = [
        'city_name',          // Name der Stadt
        'date',               // Datum
        'temperature',        // Durchschnittstemperatur
        'min_temperature',    // Minimale Temperatur
        'max_temperature',    // Maximale Temperatur
        'humidity',           // Luftfeuchtigkeit (%)
        'precipitation',      // Niederschlag (mm)
        'snowfall',           // Schneefall (mm)
        'pressure',           // Luftdruck (hPa)
        'weather_desc',       // Beschreibung (z.B. "klar")
        'wind_speed',         // Windgeschwindigkeit (m/s)
        'rain',               // Regen (falls spezifisch benötigt)
        'snow',               // Schnee (falls spezifisch benötigt)
    ];
}
