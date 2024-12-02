<?php

namespace Database\Seeders;

use App\Models\PropertyType;
use Illuminate\Database\Seeder;
use App\Models\PropertyCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropertyCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Wohnung' => [
                'Apartment',
                'Attikawohnung',
                'Etagenwohnung',
                'Loft',
                'Maisonette',
                'Penthouse',
                'Rohdachboden',
                'Terrassenwohnung',
            ],
            'Haus' => [
                'Bauernhaus',
                'Bungalow',
                'Burg / Schloss',
                'Doppelhaus',
                'Doppelhaushälfte',
                'Einfamilienhaus',
                'Finca',
                'Gewerbeflächen',
                'Herrenhaus',
                'Landhaus',
                'Mehrfamilienhaus',
                'Reihenendhaus',
                'Reihenmittelhaus',
                'Reihenhaus',
                'Rustico',
                'Stadthaus',
                'Villa',
                'Zweifamilienhaus',
            ],
            'Büro-/Praxisfläche' => [
                'Atelier',
                'Ausstellungsfläche',
                'Bürofläche',
                'Bürohaus',
                'Bürozentrum',
                'Coworking',
                'Praxisfläche',
                'Praxishaus',
                'Shared Office',
            ],
            'Garage/Stellplatz' => [
                'Carport',
                'Duplex',
                'Garage',
                'Parkhaus',
                'Stellplatz',
                'Tiefgarage',
            ],
            'Gastronomie/Hotel' => [
                'Bar',
                'Café',
                'Diskothek',
                'Gaststätte',
                'Gastronomie und Wohnung',
                'Hotel',
                'Hotelanwesen',
                'Hotel garni',
                'Hotel-Pension',
                'Pension',
                'Restaurant',
            ],
            'Gewerbe-Grundstück' => [
                'Gewerbegrundstück',
                'Industriegrundstück',
                'Mischgrundstück',
                'Sonderfläche',
            ],
            'Grundstück' => [
                'Baugrundstück',
                'Bauland',
                'Gewerbegrundstück',
                'Grundstück',
                'Grundstücksteilung',
                'Landwirtschaftliches Grundstück',
                'Projektgrundstück',
                'Rohbauland',
                'Sonderfläche',
                'Teilerschlossenes Grundstück',
                'Teilungserklärtes Grundstück',
                'Vollerschlossenes Grundstück',
                'Unerschlossenes Grundstück',
                'Waldgrundstück',
                'Wohngrundstück',
            ],
            'Hallen/Lager/Produktion' => [
                'Halle',
                'Hochregallager',
                'Industriehalle',
                'Kühlhaus',
                'Lager',
                'Lager mit Freifläche',
                'Lagerhalle',
                'Produktionshalle',
                'Werkstatt',
            ],
            'Land-/Forstwirtschaft' => [
                'Agrarland',
                'Bauernhof',
                'Fischwasser',
                'Forstwirtschaft',
                'Gartenland',
                'Gewerbegrundstück',
                'Grünland',
                'Landwirtschaft',
                'Reiterhof',
                'Sonstiges',
                'Teich',
                'Viehwirtschaft',
                'Wald',
                'Weideland',
            ],
            'Ladenfläche' => [
                'Einkaufszentrum',
                'Galerie',
                'Geschäft',
                'Kiosk',
                'Laden',
                'Ladenlokal',
                'Markt',
                'Markthalle',
                'Verkaufsfläche',
            ],
            'Renditeobjekt' => [
                'Bürohaus',
                'Einkaufszentrum',
                'Geschäftshaus',
                'Gewerbeanwesen',
                'Gewerbepark',
                'Gewerbezentrum',
                'Mehrfamilienhaus',
                'Pflegeheim',
                'Renditeobjekt',
                'Wohn- und Geschäftshaus',
            ],
            'Wohnen auf Zeit' => [
                'Apartment',
                'Boardinghouse',
                'Ferienwohnung',
                'Maisonette',
                'Penthouse',
                'Serviced Apartment',
                'Studio',
                'Wohnen auf Zeit',
            ],
            'Wohngemeinschaft' => [
                'Alten-WG',
                'Behinderten-WG',
                'Frauen-WG',
                'Männer-WG',
                'Mehrgenerationen-WG',
                'Senioren-WG',
                'Studenten-WG',
                'Wohngemeinschaft',
            ],
            'Sonstiges' => [
                'Bürofläche',
                'Bürohaus',
                'Bürozentrum',
                'Gewerbeflächen',
                'Gewerbegrundstück',
                'Gewerbeobjekt',
                'Gewerbezentrum',
                'Ladenfläche',
                'Praxisfläche',
                'Praxishaus',
                'Sonstiges',
            ],

        ];

        foreach ($categories as $type => $typeCategories) {
            $propertyType = PropertyType::where('name', $type)->first();

            if (!$propertyType) {
             //   \Log::error("PropertyType not found: $type");
                continue; // Überspringe fehlende Typen
            }

            foreach ($typeCategories as $category) {
                PropertyCategory::create([
                    'property_type_id' => $propertyType->id,
                    'name' => $category,
                ]);
            }
        }
    }
}
