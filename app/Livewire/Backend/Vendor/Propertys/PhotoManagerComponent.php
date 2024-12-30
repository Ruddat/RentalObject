<?php

namespace App\Livewire\Backend\Vendor\Propertys;

use Livewire\Component;
use App\Models\ObjPhotos;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class PhotoManagerComponent extends Component
{
    use WithFileUploads;

    public $propertyId;
    public $photos = [];
    public $newPhotos = [];

    protected $rules = [
        'newPhotos.*' => 'image|max:2048', // Max 2MB pro Bild
    ];

    public function mount($propertyId)
    {
        $this->propertyId = $propertyId;
        $this->loadPhotos();
    }

    public function loadPhotos()
    {
        $this->photos = ObjPhotos::where('property_id', $this->propertyId)
            ->orderBy('sort_order')
            ->get();
    }

    public function uploadPhotos()
    {
        $this->validate();

        foreach ($this->newPhotos as $photo) {
            $filePath = $photo->store("uploads/{$this->propertyId}/original", 'public');

            ObjPhotos::create([
                'property_id' => $this->propertyId,
                'size_name' => 'original',
                'file_path' => $filePath,
                'sort_order' => ObjPhotos::where('property_id', $this->propertyId)->max('sort_order') + 1,
            ]);
        }

        $this->newPhotos = [];
        $this->loadPhotos();
        session()->flash('success', 'Fotos erfolgreich hochgeladen.');
    }

    public function deletePhoto($photoId)
    {
        $photo = ObjPhotos::findOrFail($photoId);
        Storage::disk('public')->delete($photo->file_path);
        $photo->delete();

        $this->loadPhotos();
        session()->flash('success', 'Foto erfolgreich gelöscht.');
    }

    public function moveUp($photoId)
    {
        $photo = ObjPhotos::findOrFail($photoId);
        $previousPhoto = ObjPhotos::where('property_id', $this->propertyId)
            ->where('sort_order', '<', $photo->sort_order)
            ->orderBy('sort_order', 'desc')
            ->first();

        if ($previousPhoto) {
            $this->swapSortOrder($photo, $previousPhoto);
        }
    }

    public function moveDown($photoId)
    {
        $photo = ObjPhotos::findOrFail($photoId);
        $nextPhoto = ObjPhotos::where('property_id', $this->propertyId)
            ->where('sort_order', '>', $photo->sort_order)
            ->orderBy('sort_order', 'asc')
            ->first();

        if ($nextPhoto) {
            $this->swapSortOrder($photo, $nextPhoto);
        }
    }

    private function swapSortOrder($photoA, $photoB)
    {
        $tempOrder = $photoA->sort_order;
        $photoA->update(['sort_order' => $photoB->sort_order]);
        $photoB->update(['sort_order' => $tempOrder]);

        $this->loadPhotos();
    }

    public function render()
    {
        return view('livewire.backend.vendor.propertys.photo-manager-component');
    }
}
