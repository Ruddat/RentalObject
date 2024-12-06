<?php

namespace App\Livewire\Frontend\RentalObject;

use Livewire\Component;
use Livewire\WithFileUploads;

class DocumentUploadComponent extends Component
{
    use WithFileUploads;

    public $documents = []; // Temporäre hochgeladene Dateien
    public $uploadedDocuments = []; // Array der hochgeladenen Dokumente

    protected $rules = [
        'documents.*' => 'required|mimes:pdf|max:40960', // Max 40 MB pro Datei
    ];

    /**
     * Dokumente hochladen.
     */
    public function uploadDocuments()
    {
        $this->validate();

        foreach ($this->documents as $document) {
            $path = $document->store('documents', 'public'); // Dateien speichern

            $this->uploadedDocuments[] = [
                'name' => $document->getClientOriginalName(),
                'path' => $path,
                'size' => round($document->getSize() / 1024, 2), // Größe in KB
            ];
        }

        $this->documents = []; // Reset der temporären Uploads
        session()->flash('success', 'Dokumente erfolgreich hochgeladen!');
    }

    /**
     * Dokument löschen.
     *
     * @param int $index
     */
    public function deleteDocument($index)
    {
        $document = $this->uploadedDocuments[$index];

        if (isset($document['path']) && \Storage::disk('public')->exists($document['path'])) {
            \Storage::disk('public')->delete($document['path']); // Datei löschen
        }

        unset($this->uploadedDocuments[$index]); // Aus der Liste entfernen
        $this->uploadedDocuments = array_values($this->uploadedDocuments); // Array-Index neu sortieren

        session()->flash('success', 'Dokument erfolgreich gelöscht!');
    }

    public function render()
    {
        return view('livewire.frontend.rental-object.document-upload-component');
    }
}
