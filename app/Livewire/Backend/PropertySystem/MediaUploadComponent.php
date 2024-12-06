<?php

namespace App\Livewire\Backend\PropertySystem;

use Storage;
use Livewire\Component;
use App\Models\ObjPhotos;
use App\Helpers\FileHelper;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Laravel\Facades\Image;

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

            // Speichere das Originalbild
            $photo->storeAs($baseDir . '/original', $uniqueName, 'public');

            // Erstelle Varianten (alle behalten denselben Basisnamen wie das Originalbild)
            foreach ($sizes as $sizeName => [$width, $height]) {
                $suffix = '_' . $sizeName;
                $variantPath = $baseDir . "/{$sizeName}/" . pathinfo($uniqueName, PATHINFO_FILENAME) . $suffix . '.' . $photo->extension();

                // Resized Image erstellen
                $resizedImage = Image::read($photo->getRealPath())
                    ->resize($width, $height, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });

                // Speichere die Variante
                Storage::disk('public')->put($variantPath, (string) $resizedImage->encode());
            }

            // Speichere das Originalbild in der Datenbank
            ObjPhotos::create([
                'temporary_uuid' => $this->temporaryUuid,
                'property_id' => $this->propertyId,
                'user_id' => auth()->id(),
                'size_name' => 'original',
                'file_path' => $originalPath,
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
            $photo = collect($this->persistedPhotos)->firstWhere('id', $photoId);

            if ($photo) {
                DB::transaction(function () use ($photo, $sizes) {
                    foreach ($sizes as $sizeName => $_) {
                        $filePath = str_replace('original', $sizeName, $photo['file_path']);
                        if (FileHelper::fileExists($filePath)) {
                            Storage::disk('public')->delete($filePath);
                        }
                    }

                    // Originalbild löschen
                    if (FileHelper::fileExists($photo['file_path'])) {
                        Storage::disk('public')->delete($photo['file_path']);
                    }

                    ObjPhotos::where('id', $photo['id'])->delete();
                });

                $this->syncPersistedPhotos();
            } else {
                \Log::error("Photo not found in persistedPhotos for ID: $photoId");
            }
        } elseif ($type === 'temporary') {
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
        $query = ObjPhotos::query()
            ->where('temporary_uuid', $this->temporaryUuid);

        if (!empty($this->propertyId)) {
            $query->orWhere('property_id', $this->propertyId);
        }

        $this->persistedPhotos = $query
            ->orderBy('sort_order', 'asc')
            ->get()
            ->map(function ($photo) {
                // Füge die URL mit dem Helper hinzu
                $photo->url = FileHelper::getPublicUrl($photo->file_path);
                return $photo;
            })
            ->toArray();

        \Log::info('Synced persisted photos', ['persistedPhotos' => $this->persistedPhotos]);
    }

    public function render()
    {
        return view('livewire.backend.property-system.media-upload-component');
    }
}
