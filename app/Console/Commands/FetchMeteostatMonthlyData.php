<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\GeocodeService;
use App\Models\HistoricalWeather;
use Illuminate\Support\Facades\Http;

class FetchMeteostatMonthlyData extends Command
{
    protected $signature = 'weather:fetch-monthly {city} {start} {end}';
    protected $description = 'Lädt monatliche historische Wetterdaten von Meteostat über die RapidAPI ab und speichert sie in der Datenbank';

    protected $geocodeService;

    public function __construct(GeocodeService $geocodeService)
    {
        parent::__construct();
        $this->geocodeService = $geocodeService;
    }

    public function handle()
    {
        $city = $this->argument('city');
        $start = $this->argument('start');
        $end = $this->argument('end');

        // Schritt 1: Koordinaten mit dem GeocodeService abrufen
        $this->info("Suche nach Koordinaten für '{$city}'...");
        try {
            $location = $this->geocodeService->searchByAddress($city);

            if (empty($location) || !isset($location[0]['lat'], $location[0]['lon'])) {
                $this->error("Koordinaten für Stadt '{$city}' konnten nicht gefunden werden.");
                return 1;
            }

            // Runden der Koordinaten
            $lat = round($location[0]['lat'], 4);
            $lon = round($location[0]['lon'], 4);
            $alt = 0; // Standardhöhe

            // Validierung der Koordinaten
            if (!is_numeric($lat) || $lat < -90 || $lat > 90) {
                $this->error("Ungültiger Breitengrad (lat): {$lat}. Der Wert muss zwischen -90 und 90 liegen.");
                return 1;
            }

            if (!is_numeric($lon) || $lon < -180 || $lon > 180) {
                $this->error("Ungültiger Längengrad (lon): {$lon}. Der Wert muss zwischen -180 und 180 liegen.");
                return 1;
            }

            $this->info("Validierte Koordinaten für {$city}: Lat {$lat}, Lon {$lon}, Alt {$alt}");
        } catch (\Exception $e) {
            $this->error("Fehler beim Abrufen der Koordinaten: " . $e->getMessage());
            return 1;
        }

        // Schritt 2: Meteostat-Daten abrufen
        $this->fetchMeteostatData($lat, $lon, $alt, $start, $end, $city);
        return 0;
    }

    protected function fetchMeteostatData($lat, $lon, $alt, $start, $end, $city)
    {
        // RapidAPI Headers
        $headers = [
            'x-rapidapi-host' => 'meteostat.p.rapidapi.com',
            'x-rapidapi-key' => env('RAPIDAPI_KEY'),
        ];

        // URL mit Query-String
        $url = "https://meteostat.p.rapidapi.com/point/monthly";
        $queryString = http_build_query([
            'lat' => $lat,
            'lon' => $lon,
            'start' => $start,
            'end' => $end,
        ]);

        $urlWithQuery = "{$url}?{$queryString}";

        $this->info("Sende folgende Anfrage: {$urlWithQuery}");

        // Anfrage senden
        $response = Http::withHeaders($headers)->get($urlWithQuery);

        if ($response->failed()) {
            $this->error("Fehler beim Abrufen der Wetterdaten: " . $response->body());
            return;
        }

        $data = $response->json();

        if (empty($data['data'])) {
            $this->error("Keine Wetterdaten für {$city} gefunden.");
            return;
        }

        // Daten verarbeiten und in die Datenbank einfügen
        foreach ($data['data'] as $entry) {
            $date = $entry['date'];

            HistoricalWeather::updateOrCreate(
                [
                    'city_name' => $city,
                    'date' => $date,
                ],
                [
                    'temperature' => $entry['tavg'] ?? null,
                    'min_temperature' => $entry['tmin'] ?? null,
                    'max_temperature' => $entry['tmax'] ?? null,
                    'humidity' => $entry['rhum'] ?? null,
                    'precipitation' => $entry['prcp'] ?? null,
                    'pressure' => $entry['pres'] ?? null,
                    'wind_speed' => $entry['wspd'] ?? null,
                ]
            );
        }

        $this->info("Wetterdaten für {$city} erfolgreich gespeichert.");
    }
}
