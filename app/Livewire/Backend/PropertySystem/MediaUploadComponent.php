<?php

namespace App\Livewire\Backend\PropertySystem;

use Storage;
use Livewire\Component;
use App\Models\ObjPhotos;
use Livewire\WithFileUploads;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\DB;

class MediaUploadComponent extends Component
{
    use WithFileUploads;

    public $photos = []; // Temporäre Uploads
    public $persistedPhotos = []; // Bereits gespeicherte Fotos
    public $maxPhotos = 40;
    public $maxFileSize = 51200; // 50 MB
    public $propertyId;
    public $temporaryUuid;

    protected $rules = [
        'photos.*' => 'image|max:51200', // Max 50MB pro Foto
    ];

    public function mount($temporaryUuid)
    {
        $this->temporaryUuid = $temporaryUuid;

        //dd($this->temporaryUuid);
        session(['temporary_uuid' => $this->temporaryUuid]);

        // Log den Session-Wert
        \Log::info('Session temporary_uuid:', ['temporary_uuid' => session('temporary_uuid')]);


        $this->syncPersistedPhotos();
    }

    public function updatedPhotos()
    {
        $this->validate();

        $totalPhotos = count($this->persistedPhotos) + count($this->photos);
        if ($totalPhotos > $this->maxPhotos) {
            session()->flash('error', 'You can upload a maximum of ' . $this->maxPhotos . ' photos.');
            $this->photos = [];
            return;
        }

        $this->photos = array_values($this->photos); // Indizes reorganisieren
    }

    public function uploadPhotos()
    {
        $this->validate();

        $sizes = config('image_sizes.sizes');
        foreach ($this->photos as $photo) {
            $uniqueName = uniqid() . '.' . $photo->extension();
            $baseDir = 'uploads/' . $this->temporaryUuid;
            $originalPath = $baseDir . '/original/' . $uniqueName;

            // Speichere das Originalbild temporär
            $tempPath = $photo->storeAs('uploads/' . $baseDir . '/original', $uniqueName);

            // Verschiebe die Datei in den öffentlichen Bereich
            $publicPath = 'public/' . $baseDir . '/original/' . $uniqueName;
            Storage::move($tempPath, $publicPath);

            // Erstelle Varianten in allen Größen
            foreach ($sizes as $sizeName => [$width, $height]) {
                $suffix = '_' . $sizeName;
                $resizedImage = Image::read($photo->getRealPath())
                    ->resize($width, $height, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });

                $filename = uniqid() . $suffix . '.' . $photo->extension();
                $path = $baseDir . '/' . $sizeName . '/' . $filename;

                Storage::put('public/' . $path, (string) $resizedImage->encode());
            }

            // Speichere in der Datenbank
            ObjPhotos::create([
                'temporary_uuid' => $this->temporaryUuid,
                'property_id' => $this->propertyId,
                'user_id' => auth()->id(),
                'size_name' => 'original',
                'file_path' => $baseDir . '/original/' . $uniqueName,
                'sort_order' => ObjPhotos::where('temporary_uuid', $this->temporaryUuid)->max('sort_order') + 1,
            ]);
        }

        $this->photos = []; // Temporäre Uploads zurücksetzen
        $this->syncPersistedPhotos();
        session()->flash('message', 'Fotos wurden erfolgreich hochgeladen!');
    }


    public function removePhoto($photoId, $type)
    {
        $sizes = config('image_sizes.sizes', []);

        if ($type === 'persisted') {
            // Suche das Foto anhand der ID
            $photo = collect($this->persistedPhotos)->firstWhere('id', $photoId);

            if ($photo) {
                DB::transaction(function () use ($photo, $sizes) {
                    // Lösche alle Varianten
                    foreach ($sizes as $sizeName => $_) {
                        $filePath = str_replace('original', $sizeName, $photo['file_path']);
                        if (Storage::disk('public')->exists($filePath)) {
                            Storage::disk('public')->delete($filePath);
                        }
                    }

                    // Originalbild löschen
                    Storage::disk('public')->delete($photo['file_path']);

                    // Foto aus der Datenbank löschen
                    ObjPhotos::where('id', $photo['id'])->delete();
                });

                // Array aktualisieren
                $this->syncPersistedPhotos();
            } else {
                \Log::error("Photo not found in persistedPhotos for ID: $photoId");
            }
        } elseif ($type === 'temporary') {
            // Entferne das temporäre Foto
            unset($this->photos[$photoId]);
            $this->photos = array_values($this->photos);
        }

        session()->flash('message', 'Photo removed successfully!');
    }



    public function updateOrder($order)
    {
        DB::transaction(function () use ($order) {
            foreach ($order as $position => $item) {
                if (isset($item['type']) && $item['type'] === 'persisted') {
                    if (isset($this->persistedPhotos[$item['index']])) {
                        ObjPhotos::where('id', $this->persistedPhotos[$item['index']]['id'])
                            ->update(['sort_order' => $position]);
                    }
                } elseif (isset($item['type']) && $item['type'] === 'temporary') {
                    if (isset($this->photos[$item['index']])) {
                        $this->photos[$item['index']]->sort_order = $position;
                    }
                }
            }
        });

        $this->syncPersistedPhotos();
    }

    public function clearPersistedPhotos()
    {
        $this->persistedPhotos = [];
    }


    private function syncPersistedPhotos()
    {
        // Lade nur Fotos, die zur aktuellen UUID oder Property-ID gehören
        $query = ObjPhotos::query()
            ->where('temporary_uuid', $this->temporaryUuid);

        if (!empty($this->propertyId)) {
            $query->orWhere('property_id', $this->propertyId);
        }

        $this->persistedPhotos = $query
            ->orderBy('sort_order', 'asc')
            ->get()
            ->toArray();

        \Log::info('Synced persisted photos', ['persistedPhotos' => $this->persistedPhotos]);
    }

    public function render()
    {
        return view('livewire.backend.property-system.media-upload-component');
    }
}
