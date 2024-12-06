<?php

namespace App\Livewire\Frontend\RentalObject;

use Livewire\Component;
use App\Models\ObjPhotos;
use App\Models\AttributeGroup;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class PreviewComponent extends Component
{
    public $collectedData = [];
    public $attributeGroups;
    public $photos = []; // Array für Fotos
    public $photoSizes = [
        'thumbnail' => [141, 79],
        'medium' => [408, 269],
        'large' => [1290, 680],
    ];

    public $uuid; // Speichere die UUID hier


    protected $listeners = ['updatePreviewData'];

    public function mount($collectedData)
    {
        $this->collectedData = $collectedData;

        // Initialisiere die UUID aus collectedData
    //    $this->uuid = $this->collectedData['temporaryUuid'] ?? null;

      //  Log::info('PreviewComponent mounted', ['uuid' => $this->uuid]);

        // Fotos laden
        $this->refreshCollectedDataForPreview();
    }

    public function updatePreviewData($data)
    {
        $this->collectedData = $data;

        if (!isset($data['temporaryUuid'])) {
            Log::error('Temporary UUID fehlt in den empfangenen Daten.', ['data' => $data]);
        } else {
            Log::info('Temporary UUID empfangen', ['temporaryUuid' => $data['temporaryUuid']]);
            $this->collectedData['temporaryUuid'] = $data['temporaryUuid'];
            $this->refreshCollectedDataForPreview();
        }
    }

    public function loadAttributes(array $attributeIds)
    {
        Log::info('Loading attributes', ['attributeIds' => $attributeIds]);

        return AttributeGroup::with(['attributes' => function ($query) use ($attributeIds) {
            $query->whereIn('id', $attributeIds);
        }])
            ->has('attributes') // Nur Gruppen mit zugehörigen Attributen laden
            ->get();
    }

    public function loadPhotos($propertyId = null, $temporaryUuid = null)
    {
        Log::info('Loading photos', ['propertyId' => $propertyId, 'temporaryUuid' => $temporaryUuid]);

        // Fotos laden, entweder basierend auf `property_id` oder `temporary_uuid`
        return ObjPhotos::query()
            ->when($propertyId, function ($query, $propertyId) {
                $query->where('property_id', $propertyId);
            })
            ->when($temporaryUuid, function ($query, $temporaryUuid) {
                $query->where('temporary_uuid', $temporaryUuid);
            })
            ->orderBy('sort_order', 'asc')
            ->get();
    }

    public function openPreviewModal()
    {
        Log::info('Opening preview modal');

        $this->loadPhotos();

        // Daten für die Vorschau laden
        $this->refreshCollectedDataForPreview();

        // Event auslösen, um das Modal zu öffnen
        $this->dispatch('show-preview-modal');
    }

    public function refreshCollectedDataForPreview()
    {
        if (!$this->uuid) {
            Log::warning('No UUID provided.');
            $this->photos = [
                'sliderImages' => [],
                'thumbnailImages' => [],
            ];
            return;
        }


    // Feste UUID für Testzwecke

    //$temporaryUuid = '19d4fd67-ea15-4b06-a69c-9acbdebd8e9c';

    // Lade Fotos basierend auf der UUID
        // Initialisiere Arrays für Slider-Bilder und Thumbnails
        $sliderImages = [];
        $thumbnailImages = [];

        // Hole alle Bilder aus der Datenbank mit der UUID
        $photos = ObjPhotos::query()
            ->where('temporary_uuid', $temporaryUuid)
            ->orderBy('sort_order', 'asc')
            ->get();

        if ($photos->isEmpty()) {
            Log::warning('No photos found for UUID', ['temporaryUuid' => $temporaryUuid]);
        }

        foreach ($photos as $photo) {
            $originalPath = $photo->file_path;

            // Generiere die URLs für Large und Thumbnail
            $largeUrl = $this->generatePhotoUrl($originalPath, 'large');
            $thumbnailUrl = $this->generatePhotoUrl($originalPath, 'thumbnail');

            // Speichere die URLs
            $sliderImages[] = $largeUrl;
            $thumbnailImages[] = $thumbnailUrl;
        }

        // Speichere die Ergebnisse
        $this->photos = [
            'sliderImages' => $sliderImages,
            'thumbnailImages' => $thumbnailImages,
        ];

        Log::info('Generated Slider and Thumbnail Images', [
            'sliderImages' => $sliderImages,
            'thumbnailImages' => $thumbnailImages,
        ]);
    }


function generatePhotoUrl($originalPath, $size)
{
    // Konfigurationsgrößen validieren
    $sizes = config('image_sizes.sizes');
    if (!array_key_exists($size, $sizes)) {
        throw new InvalidArgumentException("Size {$size} is not defined in the configuration.");
    }

    // Entferne den 'original'-Teil des Pfads, wenn vorhanden
    $directory = dirname($originalPath); // Verzeichnis der Datei
    $filename = basename($originalPath, '.' . pathinfo($originalPath, PATHINFO_EXTENSION)); // Dateiname ohne Erweiterung
    $extension = pathinfo($originalPath, PATHINFO_EXTENSION); // Dateierweiterung

    // Ersetze '/original/' durch '/{size}/'
    $directory = str_replace('/original', "/{$size}", $directory);

    // Generiere den neuen Pfad
    $newPath = "{$directory}/{$filename}_{$size}.{$extension}";

    // Rückgabe der URL
    \Log::info('Generated Photo URL Corrected', [
        'originalPath' => $originalPath,
        'size' => $size,
        'newPath' => $newPath,
        'url' => Storage::url($newPath),
    ]);

    return Storage::url($newPath);
}






    public function render()
    {
        $attributeIds = $this->collectedData['stepTwo']['attributes'] ?? [];

        if (is_array($attributeIds) && !empty($attributeIds)) {
            $this->attributeGroups = $this->loadAttributes($attributeIds);
        } else {
            $this->attributeGroups = collect(); // Leere Sammlung
        }

        Log::info('Rendering PreviewComponent', [
            'attributeGroups' => $this->attributeGroups,
            'photos' => $this->photos,
        ]);

        return view('livewire.frontend.rental-object.preview-component', [
            'attributeGroups' => $this->attributeGroups,
            'photos' => $this->photos,
        ]);
    }
}
