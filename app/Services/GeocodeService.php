<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class GeocodeService
{
    protected $client;
    protected $userAgent;

    public function __construct()
    {
        $this->client = new Client([
            'timeout' => 10.0, // Timeout von 10 Sekunden
        ]);
        $this->userAgent = 'YourAppName/1.0 (contact@yourdomain.com)';
    }

    /**
     * Suche nach einer Adresse.
     */
    public function searchByAddress($query)
    {
        $url = "https://nominatim.openstreetmap.org/search";
        $params = [
            'query' => [
                'q' => $query,
                'format' => 'json',
                'addressdetails' => 1,
            ],
            'headers' => $this->getDefaultHeaders(),
        ];

        return $this->sendRequest($url, $params);
    }

    /**
     * Suche nach Koordinaten.
     */
    public function searchByCoordinates($lat, $lon)
    {
        $url = "https://nominatim.openstreetmap.org/reverse";
        $params = [
            'query' => [
                'lat' => $lat,
                'lon' => $lon,
                'format' => 'json',
                'addressdetails' => 1,
            ],
            'headers' => $this->getDefaultHeaders(),
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
            'headers' => $this->getDefaultHeaders(),
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
     * Sende eine HTTP-Anfrage.
     */
    protected function sendRequest($url, $params)
    {
        try {
            $response = $this->client->get($url, $params);

            if ($response->getStatusCode() === 200) {
                return json_decode($response->getBody(), true);
            }

            throw new \Exception('Unexpected API response status: ' . $response->getStatusCode());
        } catch (RequestException $e) {
            $error = $e->getResponse() ? $e->getResponse()->getBody()->getContents() : $e->getMessage();
            throw new \Exception('Request failed: ' . $error, $e->getCode());
        }
    }

    /**
     * Standard-Header für HTTP-Anfragen.
     */
    protected function getDefaultHeaders()
    {
        return [
            'User-Agent' => $this->userAgent,
            'Accept' => 'application/json',
        ];
    }
}
