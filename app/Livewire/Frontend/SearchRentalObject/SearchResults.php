<?php

namespace App\Livewire\Frontend\SearchRentalObject;

use Livewire\Component;
use App\Models\Attribute;
use App\Models\ObjDetails;
use App\Models\PropertyType;

class SearchResults extends Component
{
    public $type = 'all';
    public $keyword = '';
    public $minPrice = null;
    public $maxPrice = null;
    public $minSize = null;
    public $maxSize = null;

    public $rooms = [];
    public $bathrooms = [];

    public $results = [];
    public $propertyTypes = [];
    public $amenities = [];
    public $selectedType = null; // Für die Vorauswahl von PropertyType
    public $selectedAmenities = []; // Array für die Vorauswahl von Amenities


    public function mount()
    {
        // Werte aus der Session abrufen
        $sessionData = session('search_query', []);

        $this->type = $sessionData['type'] ?? 'all';
        $this->selectedType = $this->type; // Direkt Zuweisung für die Vorauswahl

        $this->keyword = $sessionData['keyword'] ?? '';
        $this->minPrice = $sessionData['minPrice'] ?? null;
        $this->maxPrice = $sessionData['maxPrice'] ?? null;
        $this->minSize = $sessionData['minSize'] ?? null;
        $this->maxSize = $sessionData['maxSize'] ?? null;
        $this->rooms = $sessionData['rooms'] ?? null;
        $this->bathrooms = $sessionData['bathrooms'] ?? null;

        $this->selectedAmenities = $sessionData['selectedAmenities'] ?? [];

        // Debugging: Auslesen der Session-Werte
        \Log::info('Session data loaded', $sessionData);

        // Daten aus der Datenbank laden
        $this->propertyTypes = PropertyType::all();
        $this->amenities = Attribute::all();

        \Log::info('Property Types', $this->propertyTypes->toArray());
        \Log::info('Property Type', ['type' => $this->type]);
        \Log::info('Property Rooms', ['rooms' => $this->rooms]);
        \Log::info('Amenities', $this->amenities->toArray());

        // Initiale Suche starten
        $this->search();
    }

    public function search()
    {


        $query = ObjDetails::query();

        // Filtern nach Typ
        if ($this->type !== 'all') {
       //     $query->where('type', $this->type);
        }

        // Filtern nach Schlüsselwort
        if (!empty($this->keyword)) {
        //    $query->where('name', 'LIKE', '%' . $this->keyword . '%');
        }

        // Filtern nach Preis
        if (!empty($this->minPrice)) {
        //    $query->where('price', '>=', $this->minPrice);
        }
        if (!empty($this->maxPrice)) {
         //   $query->where('price', '<=', $this->maxPrice);
        }

        // Filtern nach Größe
        if (!empty($this->minSize)) {
         //   $query->where('area', '>=', $this->minSize);
        }
        if (!empty($this->maxSize)) {
          //  $query->where('area', '<=', $this->maxSize);
        }

        // Filtern nach Zimmeranzahl
        if (!empty($this->rooms)) {
          //  $query->where('rooms', $this->rooms);
        }

        // Filtern nach Annehmlichkeiten
        if (!empty($this->selectedAmenities)) {
       //     $query->whereHas('amenities', function ($subQuery) {
        //        $subQuery->whereIn('id', $this->selectedAmenities);
       //     });
        }

        $this->results = $query->get();
    }

    public function render()
    {

        return view('livewire.frontend.search-rental-object.search-results', [
            'propertyTypes' => $this->propertyTypes,
            'amenities' => $this->amenities,
            'results' => $this->results,
        ]);
    }
}
