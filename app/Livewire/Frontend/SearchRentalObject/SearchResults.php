<?php

namespace App\Livewire\Frontend\SearchRentalObject;

use Livewire\Component;
use App\Models\ObjDetails;

class SearchResults extends Component
{
    public $type = 'all';
    public $keyword = '';
    public $minPrice = null;
    public $maxPrice = null;
    public $minSize = null;
    public $maxSize = null;
    public $rooms = null;
    public $selectedAmenities = [];
    public $results = [];

    public function mount()
    {
        $this->type = request('type', 'all');
        $this->keyword = request('keyword', '');
        $this->minPrice = request('minPrice', null);
        $this->maxPrice = request('maxPrice', null);
        $this->minSize = request('minSize', null);
        $this->maxSize = request('maxSize', null);
        $this->rooms = request('rooms', null);
        $this->selectedAmenities = request('selectedAmenities', []);

       // dd($this->type, $this->keyword, $this->minPrice, $this->maxPrice, $this->minSize, $this->maxSize, $this->rooms, $this->selectedAmenities);


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
            'results' => $this->results,
        ]);
    }
}
