<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OpenWeatherService
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = env('OPENWEATHER_API_KEY');
        $this->baseUrl = 'https://api.openweathermap.org/data/2.5/onecall/timemachine';
    }

    public function fetchHistoricalWeather($lat, $lon, $timestamp)
    {
        $response = Http::get($this->baseUrl, [
            'lat' => $lat,
            'lon' => $lon,
            'dt' => $timestamp,
            'appid' => $this->apiKey,
            'units' => 'metric'
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception("Fehler beim Abrufen der Wetterdaten: " . $response->body());
    }
}
