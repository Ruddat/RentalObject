<?php

namespace App\Livewire\Frontend\RentalObject;

use Livewire\Component;

class ExternalVideoForm extends Component
{
    public $youtubeVideoLink; // Video-Link
    public $youtubeDescription; // Beschreibung des Videos
    public $isEditing = false; // Formular anzeigen oder nicht
    public $youtubeVideoId; // Extrahierte Video-ID

    protected $rules = [
        'youtubeVideoLink' => 'required|url',
        'youtubeDescription' => 'nullable|string|max:255',
    ];

    /**
     * Video speichern.
     */
    public function saveVideo()
    {
        $this->validate();

        // Überprüfe, ob der Link gültig ist
        if (!$this->isValidYoutubeUrl($this->youtubeVideoLink)) {
            session()->flash('error', 'Der Link muss eine gültige YouTube-Adresse sein.');
            return;
        }

        // Extrahiere die Video-ID
        $this->youtubeVideoId = $this->extractYoutubeVideoId($this->youtubeVideoLink);

        session()->flash('success', 'YouTube-Video erfolgreich gespeichert!');
        $this->isEditing = false; // Bearbeitungsmodus schließen

        // Event an die Hauptkomponente senden
        $this->dispatch('handleVideoLinkUpdate', [
            'videoLink' => $this->youtubeVideoLink,
            'videoDescription' => $this->youtubeDescription,
        ]);

    }

/**
 * Video bearbeiten oder hinzufügen.
 */
public function editVideo()
{
    // Falls ein Video existiert, aktiviere den Bearbeitungsmodus
    if ($this->youtubeVideoLink) {
        // Extrahiere die Video-ID, falls noch nicht vorhanden
        if (!$this->youtubeVideoId) {
            $this->youtubeVideoId = $this->extractYoutubeVideoId($this->youtubeVideoLink);
        }
    } else {
        // Initialisiere leere Felder für ein neues Video
        $this->youtubeVideoLink = '';
        $this->youtubeDescription = '';
    }

    // Aktiviere den Bearbeitungsmodus
    $this->isEditing = true;
}


    /**
     * Video aktualisieren.
     */
    public function updateVideo()
    {
        $this->validate();

        // Überprüfe, ob der Link gültig ist
        if (!$this->isValidYoutubeUrl($this->youtubeVideoLink)) {
            session()->flash('error', 'Der Link muss eine gültige YouTube-Adresse sein.');
            return;
        }

        // Extrahiere die Video-ID
        $this->youtubeVideoId = $this->extractYoutubeVideoId($this->youtubeVideoLink);

        session()->flash('success', 'YouTube-Video erfolgreich aktualisiert!');
        $this->isEditing = false; // Bearbeitungsmodus schließen
    }

    /**
     * Video löschen.
     */
    public function deleteVideo()
    {
        $this->youtubeVideoLink = null;
        $this->youtubeDescription = null;
        $this->youtubeVideoId = null;
        $this->isEditing = false;
        session()->flash('success', 'YouTube-Video erfolgreich gelöscht!');
    }

    /**
     * Überprüft, ob die URL eine gültige YouTube-URL ist.
     *
     * @param string $url
     * @return bool
     */
    private function isValidYoutubeUrl($url)
    {
        return strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false;
    }

    /**
     * Extrahiert die Video-ID aus einem YouTube-Link.
     *
     * @param string $url
     * @return string|null
     */
    private function extractYoutubeVideoId($url)
    {
        $videoId = null;

        // Extrahiere die Video-ID aus dem Link
        if (strpos($url, 'youtube.com') !== false) {
            parse_str(parse_url($url, PHP_URL_QUERY), $params);
            $videoId = $params['v'] ?? null;
        } elseif (strpos($url, 'youtu.be') !== false) {
            $videoId = basename(parse_url($url, PHP_URL_PATH));
        }

        return $videoId;
    }

    /**
     * Bearbeitung abbrechen.
     */
    public function cancelEditing()
    {
        $this->isEditing = false;
    }

    public function render()
    {
        return view('livewire.frontend.rental-object.external-video-form');
    }
}
