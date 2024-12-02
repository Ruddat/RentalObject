<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeGroup;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AttributeGroupsAndAttributesSeeder extends Seeder
{
    public function run()
    {
        $groups = [
            [
                'name' => 'Aufzug',
                'attributes' => ['Lastenaufzug', 'Personenaufzug']
            ],
            [
                'name' => 'Küche',
                'attributes' => ['Einbauküche', 'offene Küche', 'Pantry', 'Speisekammer']
            ],
            [
                'name' => 'Böden',
                'attributes' => ['Dielenboden', 'Laminat', 'Fliesenboden', 'Parkettboden']
            ],
            [
                'name' => 'Klima/Belüftung',
                'attributes' => ['voll klimatisiert', 'teilweise klimatisiert', 'kontrollierte Be- und Entlüftungsanlage']
            ],
            [   'name' => 'Stellplatz',
                'attributes' => ['Tiefgarage', 'Carport', 'Garage', 'Stellplatz']

            ],
            [
                'name' => 'möbliert',
                'attributes' => ['möbliert', 'teilmöbliert', 'unmöbliert']
            ],
            [
                'name' => 'Wellness',
                'attributes' => ['Sauna', 'Swimmingpool', 'Dampfbad', 'Fitnessraum']
            ],
            [
                'name' => 'TV/Internet/Telefon',
                'attributes' => ['Kabelanschluss', 'Satellitenanschluss', 'DSL-Anschluss', 'Glasfaseranschluss']
            ],
            [
                'name' => 'Balkon/Terrasse',
                'attributes' => ['Balkon', 'Terrasse', 'Loggia', 'Dachterrasse']
            ],
            [
                'name' => 'Serviceleistungen',
                'attributes' => ['Altenpflege', 'Hausmeister', 'Reinigungsservice', 'Wachdienst', 'Gartenpflege']
            ]

        ];

        foreach ($groups as $groupData) {
            $group = AttributeGroup::create(['name' => $groupData['name']]);

            foreach ($groupData['attributes'] as $attributeName) {
                Attribute::create([
                    'name' => $attributeName,
                    'group_id' => $group->id
                ]);
            }
        }
    }
}
