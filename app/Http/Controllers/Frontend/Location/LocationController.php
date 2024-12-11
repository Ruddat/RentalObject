<?php

namespace App\Http\Controllers\Frontend\Location;

use Illuminate\Http\Request;
use App\Services\GeocodeService;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    /**
     * Ermittelt die aktuelle Position basierend auf den übergebenen Koordinaten und gibt entweder den 'village' oder den 'state' zurück.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getLocation(Request $request)
    {
        // Validiere die Anfrage: 'latitude' und 'longitude' müssen vorhanden und numerisch sein
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // Extrahiere die Koordinaten aus der Anfrage
        $latitude = $request->latitude;
        $longitude = $request->longitude;

        try {
            // Simuliere eine echte Benutzeranfrage
            $headers = [
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
                'Accept' => 'application/json',
            ];

            // Erstelle eine Instanz des GeocodeService
            $geocodeService = new GeocodeService();

            // Führe die Anfrage aus, indem du die Header einbindest
            $response = $geocodeService->searchByCoordinates($latitude, $longitude, $headers);

            // Überprüfe, ob die Antwort nicht leer ist und der 'address'-Schlüssel vorhanden ist
            if (!empty($response) && isset($response['address'])) {
                $address = $response['address'];

                // Überprüfe, ob 'village' oder 'state' vorhanden ist
                $location = $address['village'] ?? $address['state'] ?? null;

                if ($location) {
                    return response()->json(['location' => $location]);
                } else {
                    return response()->json(['error' => 'Village or state not found in address.'], 404);
                }
            } else {
                return response()->json(['error' => 'Address not found in response.'], 404);
            }
        } catch (\Exception $e) {
            \Log::error('GeocodeService Error', ['exception' => $e]);

            return response()->json(['error' => 'An unexpected error occurred while fetching the location.'], 500);
        }
    }
}
