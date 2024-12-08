<?php

namespace App\Http\Controllers\Frontend\Location;

use Illuminate\Http\Request;
use App\Services\GeocodeService;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function getLocation(Request $request)
    {
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $latitude = $request->latitude;
        $longitude = $request->longitude;

        try {
            $geocodeService = new GeocodeService();
            $response = $geocodeService->searchByCoordinates($latitude, $longitude);

            if (!empty($response) && isset($response['display_name'])) {
                return response()->json([
                    'address' => $response['display_name'],
                ]);
            }

            return response()->json(['error' => 'Address not found.'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
