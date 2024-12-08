<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\HistoricalWeather;
use App\Services\OpenWeatherService;

class FetchHistoricalWeather extends Command
{
    protected $signature = 'weather:fetch {city_name} {lat} {lon} {date}';
    protected $description = 'Ruft historische Wetterdaten ab und speichert sie in der Datenbank';

    protected $weatherService;

    public function __construct(OpenWeatherService $weatherService)
    {
        parent::__construct();
        $this->weatherService = $weatherService;
    }

    public function handle()
    {
        $cityName = $this->argument('city_name');
        $latitude = $this->argument('lat');
        $longitude = $this->argument('lon');
        $date = $this->argument('date');
        $timestamp = strtotime($date);

        try {
            $data = $this->weatherService->fetchHistoricalWeather($latitude, $longitude, $timestamp);

            $weather = new HistoricalWeather();
            $weather->city_name = $cityName;
            $weather->date = $date;
            $weather->temperature = $data['current']['temp'];
            $weather->min_temperature = $data['current']['temp_min'] ?? null;
            $weather->max_temperature = $data['current']['temp_max'] ?? null;
            $weather->humidity = $data['current']['humidity'];
            $weather->pressure = $data['current']['pressure'];
            $weather->weather_desc = $data['current']['weather'][0]['description'];
            $weather->wind_speed = $data['current']['wind_speed'];
            $weather->rain = $data['current']['rain']['1h'] ?? null;
            $weather->snow = $data['current']['snow']['1h'] ?? null;
            $weather->save();

            $this->info("Wetterdaten für {$cityName} am {$date} erfolgreich gespeichert.");
        } catch (\Exception $e) {
            $this->error("Fehler: " . $e->getMessage());
        }
    }
}
