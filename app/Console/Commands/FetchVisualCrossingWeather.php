<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Models\HistoricalWeather;
use Illuminate\Support\Facades\Http;

class FetchVisualCrossingWeather extends Command
{
    protected $signature = 'weather:fetch-visualcrossing {location} {startDate?} {endDate?}';
    protected $description = 'Ruft Wetterdaten von Visual Crossing ab und speichert sie in der Datenbank';

    public function handle()
    {
        $location = $this->argument('location');
        $startDate = $this->argument('startDate') ?? '2020-01-01';
        $endDate = $this->argument('endDate') ?? '2020-12-31';

        $apiKey = env('VISUAL_CROSSING_API_KEY');

        if (!$apiKey) {
            $this->error('API-Schlüssel ist nicht konfiguriert. Bitte füge VISUAL_CROSSING_API_KEY in der .env-Datei hinzu.');
            return 1;
        }

        $start = Carbon::parse($startDate);
        $end = Carbon::parse($endDate);

        while ($start->lte($end)) {
            $periodStart = $start->copy();
            $periodEnd = $start->copy()->endOfMonth(); // Monatsweise Abfrage
            if ($periodEnd->gt($end)) {
                $periodEnd = $end;
            }

            $this->info("Abfrage für Zeitraum {$periodStart->toDateString()} bis {$periodEnd->toDateString()}");

            $url = "https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/{$location}/{$periodStart->toDateString()}/{$periodEnd->toDateString()}?key={$apiKey}";

            $response = Http::get($url);

            if ($response->failed()) {
                $this->error("Fehler beim Abrufen der Wetterdaten: " . $response->body());
                return 1;
            }

            $data = $response->json();

            if (isset($data['days'])) {
                foreach ($data['days'] as $day) {
                    $this->info("Speichere Daten für Datum: {$day['datetime']}, Temperatur: {$day['temp']}°C");
                    HistoricalWeather::updateOrCreate(
                        [
                            'city_name' => $location,
                            'date' => $day['datetime'],
                        ],
                        [
                            'temperature' => $day['temp'] ?? null,
                            'min_temperature' => $day['tempmin'] ?? null,
                            'max_temperature' => $day['tempmax'] ?? null,
                            'humidity' => $day['humidity'] ?? null,
                            'precipitation' => $day['precip'] ?? null,
                            'wind_speed' => $day['windspeed'] ?? null,
                            'weather_desc' => $day['conditions'] ?? null,
                        ]
                    );
                }
            } else {
                $this->error("Keine Wetterdaten gefunden für Zeitraum {$periodStart->toDateString()} bis {$periodEnd->toDateString()}.");
            }

            $start->addMonth(); // Zum nächsten Monat wechseln
        }

        $this->info("Wetterdaten erfolgreich gespeichert.");
        return 0;
    }
}
