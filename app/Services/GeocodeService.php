<?php

namespace App\Services;

use GuzzleHttp\Client;

class GeocodeService
{
    protected $client;
    protected $userAgent;

    public function __construct()
    {
        $this->client = new Client();
        $this->userAgent = 'YourAppName/1.0 (your.email@example.com)'; // Setze hier deinen eigenen User-Agent
    }

    /**
     * Suche nach einer Adresse.
     */
    public function searchByAddress($query)
    {
        $url = "http://nominatim.openstreetmap.org/search";
        $params = [
            'query' => [
                'q' => $query,
                'format' => 'json',
                'addressdetails' => 1,
            ],
            'headers' => [
                'User-Agent' => $this->userAgent,
            ],
        ];

        return $this->sendRequest($url, $params);
    }

    /**
     * Suche nach Koordinaten.
     */
    public function searchByCoordinates($lat, $lon)
    {
        $url = "http://nominatim.openstreetmap.org/reverse";
        $params = [
            'query' => [
                'lat' => $lat,
                'lon' => $lon,
                'format' => 'json',
                'addressdetails' => 1,
            ],
            'headers' => [
                'User-Agent' => $this->userAgent,
            ],
        ];

        return $this->sendRequest($url, $params);
    }

    /**
     * Hole den aktuellen Standort des Benutzers.
     */
    public function getCurrentPosition()
    {
        if (!isset($_SERVER['REMOTE_ADDR']) || $_SERVER['REMOTE_ADDR'] === '127.0.0.1') {
            throw new \Exception('Geolocation not available for local environments.');
        }

        $ip = $_SERVER['REMOTE_ADDR']; // IP-Adresse des Benutzers
        $url = "https://ip-api.com/json/{$ip}"; // Kostenlose API zur Geolocation per IP-Adresse

        $params = [
            'headers' => [
                'User-Agent' => $this->userAgent,
            ],
        ];

        $response = $this->sendRequest($url, $params);

        if (!empty($response) && isset($response['lat'], $response['lon'])) {
            return [
                'latitude' => $response['lat'],
                'longitude' => $response['lon'],
                'address' => $this->searchByCoordinates($response['lat'], $response['lon'])['display_name'] ?? '',
            ];
        }

        throw new \Exception('Unable to fetch current location.');
    }

    /**
     * HTTP-Anfrage senden.
     */
    protected function sendRequest($url, $params)
    {
        try {
            $response = $this->client->get($url, $params);

            if ($response->getStatusCode() == 200) {
                return json_decode($response->getBody(), true);
            } else {
                throw new \Exception('Failed to fetch data from API', $response->getStatusCode());
            }
        } catch (\Exception $e) {
            throw new \Exception('An error occurred: ' . $e->getMessage(), 500);
        }
    }
}
