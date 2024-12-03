<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NearbyPlacesService
{
    public function fetchNearbyPlacesFromAPI($latitude, $longitude, $radius = 5000, $categories = [], $limitPerCategory = 6)
    {
        $url = "https://overpass-api.de/api/interpreter";

        // Standardkategorien definieren, falls keine angegeben wurden
        $defaultCategories = [
            // Gesundheit & Medizin
            'amenity=doctors',        // Ärzte
            'healthcare=doctor',      // Weitere Ärzte
            'amenity=hospital',       // Krankenhäuser
            'amenity=pharmacy',       // Apotheken
            'healthcare=pharmacy',    // Weitere Apotheken
            'amenity=dentist',        // Zahnärzte

            // Einkaufen
            'shop=supermarket',       // Supermärkte
            'shop=mall',              // Einkaufszentren
            'shop=convenience',       // Tante-Emma-Läden
            'shop=clothes',           // Kleidungsgeschäfte
            'shop=electronics',       // Elektronikläden
            'shop=department_store',  // Kaufhäuser
            'shop=butcher',           // Metzgereien
            'shop=bakery',            // Bäckereien

            // Gastronomie
            'amenity=restaurant',     // Restaurants
            'amenity=cafe',           // Cafés
            'amenity=fast_food',      // Schnellrestaurants
            'amenity=bar',            // Bars
            'amenity=pub',            // Pubs

            // Werkstätten & Autodienstleistungen
            'amenity=car_repair',     // Autowerkstätten
            'amenity=fuel',           // Tankstellen
            'amenity=charging_station', // Ladestationen für Elektroautos

            // Freizeit & Kultur
            'leisure=park',           // Parks
            'leisure=playground',     // Spielplätze
            'leisure=sports_centre',  // Sportzentren
            'tourism=museum',         // Museen
            'tourism=attraction',     // Touristische Attraktionen
            'leisure=fitness_centre', // Fitnessstudios
            'leisure=swimming_pool',  // Schwimmbäder
            'leisure=stadium',        // Stadien

            // Bildung
            'amenity=school',         // Schulen
            'amenity=college',        // Hochschulen
            'amenity=university',     // Universitäten
            'amenity=kindergarten',   // Kindergärten

            // Dienstleistungen
            'amenity=bank',           // Banken
            'amenity=post_office',    // Postämter
            'amenity=library',        // Bibliotheken
            'office=government',      // Regierungsbüros

            // Verkehr
            'amenity=bus_station',    // Bushaltestellen
            'railway=station',        // Bahnhöfe
            'amenity=taxi',           // Taxistände
        ];


        $categories = !empty($categories) ? $categories : $defaultCategories;

        // Erstelle die Abfrage für die Overpass API
        $query = "
            [out:json];
        ";
        foreach ($categories as $category) {
            $query .= "
                (
                    node[{$category}](around:{$radius},{$latitude},{$longitude});
                );
                out body {$limitPerCategory};
            ";
        }

        // API-Anfrage
        $response = Http::asForm()->post($url, [
            'data' => $query,
        ]);

        \Log::info('Generated Overpass Query:', ['query' => $query]);

        if ($response->successful()) {
            $data = json_decode($response->body(), true);

            \Log::info('Decoded API Response:', $data);

            if (isset($data['elements']) && !empty($data['elements'])) {
                return $data['elements'];
            }

            throw new \Exception('Keine Orte gefunden.');
        }

        throw new \Exception('API-Antwort fehlerhaft: ' . $response->status());
    }




}
