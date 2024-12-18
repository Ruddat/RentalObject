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

        // Korrekte Angabe eines User-Agents, um Blockierung zu vermeiden
        $this->userAgent = 'MyAppName/1.0 (+https://mywebsite.com; contact@myemail.com)';
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
                'limit' => 1, // Nur ein Ergebnis
            ],
            'headers' => $this->getDefaultHeaders(),
        ];

        return $this->sendRequest($url, $params);
    }

    /**
     * Suche nach Koordinaten.
     *
     * @param float $lat
     * @param float $lon
     * @return array
     * @throws \Exception
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
     * Sende eine HTTP-Anfrage.
     */
    protected function sendRequest($url, $params)
    {
        try {
            $response = $this->client->get($url, $params);

            if ($response->getStatusCode() === 200) {
                return json_decode($response->getBody(), true);
            }

            throw new \Exception('Unerwarteter API-Status: ' . $response->getStatusCode());
        } catch (RequestException $e) {
            $error = $e->getResponse() ? $e->getResponse()->getBody()->getContents() : $e->getMessage();
            throw new \Exception('Anfrage fehlgeschlagen: ' . $error, $e->getCode());
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
