<?php

namespace Database\Seeders;

use App\Models\UtilityCost;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UtilityCostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $utilityCosts = [
            [
                'name' => 'Grundsteuer',
                'description' => 'Kosten der wiederkehrenden öffentlichen Lasten eines Grundstücks, die je nach Gemeinde variieren können.',
                'amount' => 0,
            ],
            [
                'name' => 'Kosten der Wasserversorgung',
                'description' => 'Umfasst Wasserverbrauch, Grundgebühren, Miet- und Eichkosten von Wasserzählern sowie Wartungskosten.',
                'amount' => 0,
            ],
            [
                'name' => 'Entwässerungskosten',
                'description' => 'Kanal- und Sielgebühren sowie Betriebskosten der Entwässerungspumpe.',
                'amount' => 0,
            ],
            [
                'name' => 'Heizkosten',
                'description' => 'Brennstoffverbrauch und Wartungskosten der Heizungsanlage. Muss nach individuellem Verbrauch abgerechnet werden.',
                'amount' => 0,
            ],
            [
                'name' => 'Warmwasserkosten',
                'description' => 'Kosten der zentralen Warmwasserversorgung, Reinigung und Wartung der Geräte.',
                'amount' => 0,
            ],
            [
                'name' => 'Kosten des Aufzugs',
                'description' => 'Umfasst Strom, Pflege und Wartungskosten, auch für Erdgeschoss-Bewohner umlegbar.',
                'amount' => 0,
            ],
            [
                'name' => 'Straßenreinigung und Müllbeseitigung',
                'description' => 'Müllabfuhrgebühren, Straßenreinigung und Winterdienstkosten.',
                'amount' => 0,
            ],
            [
                'name' => 'Gebäudereinigung und Ungezieferbekämpfung',
                'description' => 'Säuberung der Gemeinschaftsflächen und Schädlingsbekämpfung unter bestimmten Bedingungen.',
                'amount' => 0,
            ],
            [
                'name' => 'Gartenpflege',
                'description' => 'Pflege von Gartenflächen, Spielplätzen und Zufahrten.',
                'amount' => 0,
            ],
            [
                'name' => 'Beleuchtungskosten',
                'description' => 'Stromkosten für Außenbeleuchtung und gemeinschaftlich genutzte Räume.',
                'amount' => 0,
            ],
            [
                'name' => 'Schornsteinreinigung',
                'description' => 'Kosten für die Schornsteinreinigung und gesetzliche Immissionsmessung.',
                'amount' => 0,
            ],
            [
                'name' => 'Sach- und Haftpflichtversicherung',
                'description' => 'Wohngebäude-, Glas- und Gebäudehaftpflichtversicherung.',
                'amount' => 0,
            ],
            [
                'name' => 'Hausmeisterkosten',
                'description' => 'Vergütung und Sozialleistungen für den Hausmeister. Instandhaltungsaufwendungen sind nicht umlagefähig.',
                'amount' => 0,
            ],
            [
                'name' => 'Gemeinschafts-Antennenanlage und Breitbandnetz',
                'description' => 'Strom- und Wartungskosten sowie Grundgebühren für die Antennen- und Breitbandanlagen.',
                'amount' => 0,
            ],
            [
                'name' => 'Gemeinschaftswaschküche',
                'description' => 'Strom- und Wartungskosten der Waschküche.',
                'amount' => 0,
            ],
            [
                'name' => 'Sonstige Betriebskosten',
                'description' => 'Alle sonstigen umlagefähigen Betriebskosten gemäß Paragraph 1, z.B. Reinigung der Dachrinnen.',
                'amount' => 0,
            ],
        ];

        foreach ($utilityCosts as $cost) {
            UtilityCost::create($cost);
        }
    }
}
