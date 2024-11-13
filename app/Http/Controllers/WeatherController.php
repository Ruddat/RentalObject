<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Services\WeatherService;
use Illuminate\Support\Facades\Cache;

class WeatherController extends Controller
{
    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function getWeatherData($city)
    {
        try {
            // Cache-Schlüssel basierend auf der Stadt
            $cacheKey = "weather_data_{$city}";

            // Wetterdaten für 1 Stunde (60 Minuten) cachen
            $weatherData = Cache::remember($cacheKey, 60, function () use ($city) {
                $currentWeather = $this->weatherService->getCurrentWeather($city);
                $forecast = $this->weatherService->getWeatherForecast($city);

                return [
                    'current' => $currentWeather,
                    'forecast' => $forecast['forecast']['forecastday']
                ];
            });

            return response()->json($weatherData);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function show($city)
    {
        $weather = $this->weatherService->getCurrentWeather($city);

        return view('weather.show', ['weather' => $weather]);
    }
}
