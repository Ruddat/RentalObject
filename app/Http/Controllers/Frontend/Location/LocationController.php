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
            // Erstelle eine Instanz des GeocodeService
            $geocodeService = new GeocodeService();

            // Rufe die Geocode-Antwort basierend auf den Koordinaten ab
            $response = $geocodeService->searchByCoordinates($latitude, $longitude);

            // Überprüfe, ob die Antwort nicht leer ist und der 'address'-Schlüssel vorhanden ist
            if (!empty($response) && isset($response['address'])) {
                $address = $response['address'];

                // Überprüfe, ob 'village' oder 'state' vorhanden ist
                $location = $address['village'] ?? $address['state'] ?? null;

                if ($location) {
                    // Gib den 'village' oder 'state' zurück
                    return response()->json([
                        'location' => $location,
                    ]);
                } else {
                    // Gib eine Fehlermeldung zurück, wenn 'village' oder 'state' nicht gefunden wurden
                    return response()->json(['error' => 'Village or state not found in address.'], 404);
                }
            } else {
                // Gib eine Fehlermeldung zurück, wenn der 'address'-Schlüssel nicht in der Antwort gefunden wurde
                return response()->json(['error' => 'Address not found in response.'], 404);
            }
        } catch (\Exception $e) {
            // Gib eine Fehlermeldung zurück, wenn ein Fehler auftritt
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
