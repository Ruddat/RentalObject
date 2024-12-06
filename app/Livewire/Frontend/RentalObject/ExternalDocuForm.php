<?php

namespace App\Livewire\Frontend\RentalObject;

use App\Models\ObjDoc;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ExternalDocuForm extends Component
{
    use WithFileUploads;

    public $propertyId; // Die fehlende Property
    public $temporaryUuid;
    public $documents = [];
    public $uploadedDocuments = [];

    protected $rules = [
        'documents.*' => 'required|mimes:pdf|max:40960',
    ];

    public function mount($propertyId = null, $temporaryUuid = null)
    {
        $this->propertyId = $propertyId;
        $this->temporaryUuid = $temporaryUuid ?: (string) \Str::uuid();
        $this->loadDocuments();

    }

    public function loadDocuments()
    {
        $this->uploadedDocuments = ObjDoc::query()
            ->when($this->propertyId, function ($query) {
                $query->where('property_id', $this->propertyId);
            })
            ->when(!$this->propertyId, function ($query) {
                $query->where('temporary_uuid', $this->temporaryUuid);
            })
            ->get()
            ->map(function ($doc) {
                return [
                    'id' => $doc->id,
                    'name' => $doc->name,
                    'path' => $doc->path,
                    'size' => $doc->size,
                ];
            })->toArray();
    }

    /**
     * Dokumente hochladen und in der Ordnerstruktur speichern.
     */
    public function uploadDocuments()
    {
        $this->validate();

        foreach ($this->documents as $document) {
            // Erstelle einen Ordner basierend auf der UUID
            $folder = "uploads/documents/{$this->temporaryUuid}";

            // Speichere die Datei im spezifischen Ordner mit dem Originalnamen
            $filename = $document->getClientOriginalName();
            $path = $document->storeAs($folder, $filename, 'public');

            // Speichere die Metadaten in der Datenbank
            ObjDoc::create([
                'temporary_uuid' => $this->temporaryUuid,
                'name' => $filename,
                'path' => $path,
                'size' => round($document->getSize() / 1024, 2), // Größe in KB
            ]);
        }

        $this->documents = [];
        $this->loadDocuments();

        session()->flash('success', 'Dokumente erfolgreich hochgeladen!');
    }

    /**
     * Dokument löschen.
     */
    public function deleteDocument($index)
    {
        $document = ObjDoc::find($this->uploadedDocuments[$index]['id']);

        if ($document && Storage::disk('public')->exists($document->path)) {
            Storage::disk('public')->delete($document->path);
            $document->delete();
        }

        $this->loadDocuments();
        session()->flash('success', 'Dokument erfolgreich gelöscht!');
    }

    public function render()
    {
        return view('livewire.frontend.rental-object.external-docu-form');
    }
}
