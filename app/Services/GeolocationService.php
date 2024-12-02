<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeolocationService
{
    public function fetchNearbyPlacesFromAPI($latitude, $longitude, $radius = 1000)
    {
        $url = "https://overpass-api.de/api/interpreter";

        $query = "
            [out:json];
            (
                node(around:{$radius},{$latitude},{$longitude});
            );
            out body;
        ";

        $response = Http::asForm()->post($url, [
            'data' => $query
        ]);

        if ($response->successful()) {
            $data = json_decode($response->body(), true);

            if (isset($data['elements']) && !empty($data['elements'])) {
                return $data['elements'];
            }

            throw new \Exception('Keine Orte gefunden.');
        }

        throw new \Exception('API-Antwort fehlerhaft: ' . $response->status());
    }
}
