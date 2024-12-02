<?php

namespace Database\Seeders;

use App\Models\PropertyType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropertyTypeSeeder extends Seeder
{
    public function run()
    {
        PropertyType::create([
            'name' => 'Wohnung',
            'no_buy' => false,
            'no_sell' => false,
        ]);

        PropertyType::create([
            'name' => 'Haus',
            'no_buy' => false,
            'no_sell' => false,
        ]);

        PropertyType::create([
            'name' => 'Grundstück',
            'no_buy' => false,
            'no_sell' => false,
        ]);

        PropertyType::create([
            'name' => 'Büro-/Praxisfläche',
            'no_buy' => false,
            'no_sell' => false,
        ]);

        PropertyType::create([
            'name' => 'Garage/Stellplatz',
            'no_buy' => false,
            'no_sell' => false,
        ]);

        PropertyType::create([
            'name' => 'Gastronomie/Hotel',
            'no_buy' => true,
            'no_sell' => true,
        ]);

        PropertyType::create([
            'name' => 'Gewerbe-Grundstück',
            'no_buy' => true,
            'no_sell' => true,
        ]);

        PropertyType::create([
            'name' => 'Hallen/Lager/Produktion',
            'no_buy' => true,
            'no_sell' => true,
        ]);

        PropertyType::create([
            'name' => 'Land-/Forstwirtschaft',
            'no_buy' => true,
            'no_sell' => true,
        ]);

        PropertyType::create([
            'name' => 'Ladenfläche',
            'no_buy' => false,
            'no_sell' => false,
        ]);

        PropertyType::create([
            'name' => 'Renditeobjekt',
            'no_buy' => false,
            'no_sell' => false,
        ]);

        PropertyType::create([
            'name' => 'Wohnen auf Zeit',
            'no_buy' => false,
            'no_sell' => false,
        ]);

        PropertyType::create([
            'name' => 'Wohngemeinschaft',
            'no_buy' => false,
            'no_sell' => false,
        ]);

        PropertyType::create([
            'name' => 'Sonstige',
            'no_buy' => false,
            'no_sell' => false,
        ]);

    }
}
