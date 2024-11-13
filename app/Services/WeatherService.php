<?php

namespace App\Services;

use GuzzleHttp\Client;

class WeatherService
{
    protected $client;
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = config('services.weatherapi.key'); // API-Schlüssel aus Konfiguration
        $this->baseUrl = 'http://api.weatherapi.com/v1/'; // Basis-URL der API
    }

    // Methode zum Abrufen des aktuellen Wetters
    public function getCurrentWeather($city)
    {
        $response = $this->client->get($this->baseUrl . 'current.json', [
            'query' => [
                'key' => $this->apiKey,
                'q' => $city,
                'lang' => 'de'
            ]
        ]);

        return json_decode($response->getBody(), true); // JSON-Daten zurückgeben
    }

    // Methode zum Abrufen der Wettervorhersage
    public function getWeatherForecast($city)
    {
        $response = $this->client->get($this->baseUrl . 'forecast.json', [
            'query' => [
                'key' => $this->apiKey,
                'q' => $city,
                'days' => 7, // Anzahl der Tage
                'lang' => 'de'
            ]
        ]);

        return json_decode($response->getBody(), true);
    }
}
