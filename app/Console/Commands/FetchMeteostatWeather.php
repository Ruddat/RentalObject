<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\HistoricalWeather;
use Illuminate\Support\Facades\Http;

class FetchMeteostatWeather extends Command
{
    protected $signature = 'weather:fetch-meteostat {lat} {lon} {start} {end}';
    protected $description = 'Lädt historische Wetterdaten von der Meteostat-API und speichert sie in der Datenbank';

    public function handle()
    {
        $lat = $this->argument('lat');
        $lon = $this->argument('lon');
        $start = $this->argument('start');
        $end = $this->argument('end');
        $apiKey = env('METEOSTAT_API_KEY');

        $url = "https://api.meteostat.net/v2/point/daily";
        $params = [
            'lat' => $lat,
            'lon' => $lon,
            'start' => $start,
            'end' => $end,
            'key' => $apiKey,
        ];

        $this->info("Lade Wetterdaten für Koordinaten: {$lat}, {$lon} ({$start} bis {$end})");

        $response = Http::get($url, $params);

        if ($response->failed()) {
            $this->error("Fehler beim Abrufen der Daten: " . $response->body());
            return 1;
        }

        $data = $response->json();

        if (empty($data['data'])) {
            $this->error("Keine Daten gefunden.");
            return 1;
        }

        foreach ($data['data'] as $day) {
            HistoricalWeather::updateOrCreate(
                [
                    'city_name' => "{$lat},{$lon}",
                    'date' => $day['date'],
                ],
                [
                    'temperature' => $day['tavg'] ?? null,
                    'min_temperature' => $day['tmin'] ?? null,
                    'max_temperature' => $day['tmax'] ?? null,
                    'humidity' => $day['rhum'] ?? null,
                    'pressure' => $day['pres'] ?? null,
                    'weather_desc' => $day['coco'] ?? null,
                    'wind_speed' => $day['wspd'] ?? null,
                ]
            );
        }

        $this->info("Wetterdaten erfolgreich gespeichert.");
        return 0;
    }
}
