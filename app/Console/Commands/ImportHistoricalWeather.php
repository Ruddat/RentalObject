<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\HistoricalWeather;

class ImportHistoricalWeather extends Command
{
    protected $signature = 'weather:import-historical {file}';
    protected $description = 'Importiert historische Wetterdaten aus einer CSV-Datei';

    public function handle()
    {
        $file = $this->argument('file');

        // Automatisch auf storage/app prüfen, wenn kein absoluter Pfad angegeben ist
        if (!file_exists($file)) {
            $file = storage_path("app/{$file}");
        }

        if (!file_exists($file)) {
            $this->error("Datei nicht gefunden: {$file}");
            return 1;
        }

        $data = array_map('str_getcsv', file($file));
        $headers = array_shift($data); // Entfernt die Header-Zeile

        foreach ($data as $row) {
            $row = array_combine($headers, $row); // Kombiniert Header und Daten

            HistoricalWeather::create([
                'city_name' => $row['city_name'],
                'date' => $row['date'],
                'temperature' => $row['temperature'],
                'min_temperature' => $row['min_temperature'],
                'max_temperature' => $row['max_temperature'],
                'humidity' => $row['humidity'],
                'pressure' => $row['pressure'],
                'weather_desc' => $row['weather_desc'],
                'wind_speed' => $row['wind_speed'],
            ]);
        }

        $this->info("Daten erfolgreich importiert.");
        return 0;
    }
}
