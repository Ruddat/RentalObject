<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class AddPropertyForm extends Component
{
    use WithFileUploads;

    public $photos = []; // Array zum Speichern der hochgeladenen Bilder
    public $title;
    public $description;
    public $address;
    public $zip_code;
    public $country;
    public $price;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'address' => 'required|string|max:255',
        'zip_code' => 'required|string|max:10',
        'country' => 'required|string|max:255',
        'price' => 'required|numeric',
        'photos.*' => 'image|max:1024' // Maximale Bildgröße 1MB
    ];

    public function saveProperty()
    {
        $this->validate();

        // Speichern der hochgeladenen Bilder
        foreach ($this->photos as $photo) {
            $photo->store('photos', 'public'); // Speichert die Bilder im Verzeichnis `storage/app/public/photos`
        }

        // Logik zum Speichern der Formularinformationen in der Datenbank

        session()->flash('message', 'Property added successfully!');
    }

    public function render()
    {
        return view('livewire.add-property-form');
    }
}
