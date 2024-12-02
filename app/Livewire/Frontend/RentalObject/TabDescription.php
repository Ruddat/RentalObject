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






    public function render()
    {
        return view('livewire.frontend.rental-object.tab-description', [
            'helpTexts' => $this->helpTexts,
        ]);
    }
}
