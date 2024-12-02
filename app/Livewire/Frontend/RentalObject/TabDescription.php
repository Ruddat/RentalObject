<?php

namespace App\Livewire\Frontend\RentalObject;

use OpenAI\Client;
use Livewire\Component;

class TabDescription extends Component
{
    public $sections = []; // Enthält Abschnitte mit Überschrift und Beschreibung
    public $maxSections = 10; // Maximale Anzahl an Abschnitten
    public $helpTexts = []; // Hilfetexte für Überschriften und Beschreibungen

    public function mount($sections = [])
    {
        // Standardabschnitte initialisieren
        $this->sections = !empty($sections) ? $sections : [
            ['headline' => 'Objektbeschreibung', 'description' => ''],
            ['headline' => 'Lagebeschreibung', 'description' => ''],
            ['headline' => 'Raumaufteilung', 'description' => ''],
            ['headline' => 'Besichtigungstermine', 'description' => ''],
        ];

        // Hilfetexte definieren
        $this->helpTexts = [
            'headline' => [
                'Objektbeschreibung' => 'Z.B. "Objektbeschreibung"',
                'Lagebeschreibung' => 'Z.B. "Die Immobilie befindet sich in einer ruhigen Wohngegend..."',
                'Raumaufteilung' => 'Z.B. "Großzügiger Wohnbereich, offene Küche, 3 Schlafzimmer..."',
                'Besichtigungstermine' => 'Z.B. "Besichtigung möglich nach Vereinbarung, bitte kontaktieren Sie uns."',
            ],
            'description' => [
                'Objektbeschreibung' => 'Bei diesem Objekt handelt es sich um ein topgepflegtes Einfamilienhaus...',
                'Lagebeschreibung' => 'Die Immobilie liegt in einer zentralen und dennoch ruhigen Lage...',
                'Raumaufteilung' => 'Die Raumaufteilung ist großzügig und lichtdurchflutet...',
                'Besichtigungstermine' => 'Besichtigungstermine sind flexibel möglich nach Rücksprache...',
            ],
        ];
    }

    public function addSection()
    {
        if (count($this->sections) < $this->maxSections) {
            $this->sections[] = ['headline' => '', 'description' => ''];
        }
        $this->dispatch('updateSections', $this->sections); // Abschnitte senden

    }

    public function removeSection()
    {
        if (count($this->sections) > 1) {
            array_pop($this->sections);
        }
        $this->dispatch('updateSections', $this->sections); // Abschnitte senden

    }

    public function updatedSections()
    {
        $this->dispatch('sectionsUpdated', $this->sections); // Aktualisierte Abschnitte senden

        \Log::info('Updated Sections in TabDescription:', $this->sections);
        $this->dispatch('updateSections', $this->sections); // Abschnitte senden

    }


    public function generateDescription($index)
    {
        $keywords = $this->sections[$index]['keywords'] ?? '';

        // Überprüfen, ob Stichwörter eingegeben wurden
        if (empty($keywords)) {
            session()->flash('error', 'Bitte geben Sie Stichwörter ein, um eine Beschreibung zu generieren.');
            return;
        }

        // Beispiel für KI-basierte Generierung (z. B. mit OpenAI)
        try {
            $response = \Http::withHeaders([
                'Authorization' => 'Bearer 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',
            ])->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-3.5-turbo', // Aktualisiertes Modell
                'messages' => [
                    ['role' => 'system', 'content' => 'Du bist ein KI-Assistent, der Immobilienbeschreibungen erstellt.'],
                    ['role' => 'user', 'content' => "Erstelle eine Immobilienbeschreibung basierend auf diesen Stichwörtern: $keywords"],
                ],
                'max_tokens' => 200,
                'temperature' => 0.7,
            ]);

            // Debugging: Logge die API-Antwort
            \Log::info('OpenAI API Response:', $response->json());

            $this->sections[$index]['description'] = $response->json()['choices'][0]['message']['content'] ?? 'Keine Beschreibung generiert.';
        } catch (\Exception $e) {
            \Log::error('API Error:', ['message' => $e->getMessage()]);
            session()->flash('error', 'Fehler bei der Generierung der Beschreibung: ' . $e->getMessage());
        }
    }




    public function render()
    {
        return view('livewire.frontend.rental-object.tab-description', [
            'helpTexts' => $this->helpTexts,
        ]);
    }
}
