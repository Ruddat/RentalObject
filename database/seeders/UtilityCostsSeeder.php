<?php

namespace Database\Seeders;

use App\Models\UtilityCost;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UtilityCostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = Auth::id() ?? 2; // Standardbenutzer setzen, falls keine Authentifizierung vorhanden

        $utilityCosts = [
            [
                'user_id' => $userId,
                'name' => 'Grundsteuer',
                'short_name' => 'GST',
                'category' => 'Betriebskosten',
                'description' => 'Kosten der wiederkehrenden öffentlichen Lasten eines Grundstücks, die je nach Gemeinde variieren können.',
                'amount' => 0,
                'distribution_key' => 'units' // Nach Wohneinheit
            ],
            [
                'user_id' => $userId,
                'name' => 'Kosten der Wasserversorgung',
                'short_name' => 'WASS',
                'category' => 'Betriebskosten',
                'description' => 'Umfasst Wasserverbrauch, Grundgebühren, Miet- und Eichkosten von Wasserzählern sowie Wartungskosten.',
                'amount' => 0,
                'distribution_key' => 'consumption' // Nach Verbrauch
            ],
            [
                'user_id' => $userId,
                'name' => 'Entwässerungskosten',
                'short_name' => 'ENTW',
                'category' => 'Betriebskosten',
                'description' => 'Kanal- und Sielgebühren sowie Betriebskosten der Entwässerungspumpe.',
                'amount' => 0,
                'distribution_key' => 'units' // Nach Wohneinheit
            ],
            [
                'user_id' => $userId,
                'name' => 'Heizkosten',
                'short_name' => 'HEIZ',
                'category' => 'Betriebskosten',
                'description' => 'Brennstoffverbrauch und Wartungskosten der Heizungsanlage. Muss nach individuellem Verbrauch abgerechnet werden.',
                'amount' => 0,
                'distribution_key' => 'consumption' // Nach Verbrauch
            ],
            [
                'user_id' => $userId,
                'name' => 'Warmwasserkosten',
                'short_name' => 'WW',
                'category' => 'Betriebskosten',
                'description' => 'Kosten der zentralen Warmwasserversorgung, Reinigung und Wartung der Geräte.',
                'amount' => 0,
                'distribution_key' => 'consumption' // Nach Verbrauch
            ],
            [
                'user_id' => $userId,
                'name' => 'Kosten des Aufzugs',
                'short_name' => 'AUFZ',
                'category' => 'Betriebskosten',
                'description' => 'Umfasst Strom, Pflege und Wartungskosten, auch für Erdgeschoss-Bewohner umlegbar.',
                'amount' => 0,
                'distribution_key' => 'units' // Nach Wohneinheit
            ],
            [
                'user_id' => $userId,
                'name' => 'Straßenreinigung und Müllbeseitigung',
                'short_name' => 'STRM',
                'category' => 'Betriebskosten',
                'description' => 'Müllabfuhrgebühren, Straßenreinigung und Winterdienstkosten.',
                'amount' => 0,
                'distribution_key' => 'units' // Nach Wohneinheit
            ],
            [
                'user_id' => $userId,
                'name' => 'Gebäudereinigung und Ungezieferbekämpfung',
                'short_name' => 'GBR',
                'category' => 'Betriebskosten',
                'description' => 'Säuberung der Gemeinschaftsflächen und Schädlingsbekämpfung unter bestimmten Bedingungen.',
                'amount' => 0,
                'distribution_key' => 'people' // Nach Personen
            ],
            [
                'user_id' => $userId,
                'name' => 'Gartenpflege',
                'short_name' => 'GART',
                'category' => 'Betriebskosten',
                'description' => 'Pflege von Gartenflächen, Spielplätzen und Zufahrten.',
                'amount' => 0,
                'distribution_key' => 'units' // Nach Wohneinheit
            ],
            [
                'user_id' => $userId,
                'name' => 'Beleuchtungskosten',
                'short_name' => 'BLTG',
                'category' => 'Betriebskosten',
                'description' => 'Stromkosten für Außenbeleuchtung und gemeinschaftlich genutzte Räume.',
                'amount' => 0,
                'distribution_key' => 'area' // Nach Quadratmetern
            ],
            [
                'user_id' => $userId,
                'name' => 'Schornsteinreinigung',
                'short_name' => 'SCHR',
                'category' => 'Betriebskosten',
                'description' => 'Kosten für die Schornsteinreinigung und gesetzliche Immissionsmessung.',
                'amount' => 0,
                'distribution_key' => 'units' // Nach Wohneinheit
            ],
            [
                'user_id' => $userId,
                'name' => 'Sach- und Haftpflichtversicherung',
                'short_name' => 'SACH',
                'category' => 'Betriebskosten',
                'description' => 'Wohngebäude-, Glas- und Gebäudehaftpflichtversicherung.',
                'amount' => 0,
                'distribution_key' => 'units' // Nach Wohneinheit
            ],
            [
                'user_id' => $userId,
                'name' => 'Hausmeisterkosten',
                'short_name' => 'HMST',
                'category' => 'Betriebskosten',
                'description' => 'Vergütung und Sozialleistungen für den Hausmeister. Instandhaltungsaufwendungen sind nicht umlagefähig.',
                'amount' => 0,
                'distribution_key' => 'people' // Nach Personen
            ],
            [
                'user_id' => $userId,
                'name' => 'Gemeinschafts-Antennenanlage und Breitbandnetz',
                'short_name' => 'ANT',
                'category' => 'Betriebskosten',
                'description' => 'Strom- und Wartungskosten sowie Grundgebühren für die Antennen- und Breitbandanlagen.',
                'amount' => 0,
                'distribution_key' => 'units' // Nach Wohneinheit
            ],
            [
                'user_id' => $userId,
                'name' => 'Gemeinschaftswaschküche',
                'short_name' => 'WASH',
                'category' => 'Betriebskosten',
                'description' => 'Strom- und Wartungskosten der Waschküche.',
                'amount' => 0,
                'distribution_key' => 'people' // Nach Personen
            ],
            [
                'user_id' => $userId,
                'name' => 'Sonstige Betriebskosten',
                'short_name' => 'SONS',
                'category' => 'Betriebskosten',
                'description' => 'Alle sonstigen umlagefähigen Betriebskosten gemäß Paragraph 1, z.B. Reinigung der Dachrinnen.',
                'amount' => 0,
                'distribution_key' => 'units' // Nach Wohneinheit
            ],
        ];

        foreach ($utilityCosts as $cost) {
            UtilityCost::create($cost);
        }
    }
}
