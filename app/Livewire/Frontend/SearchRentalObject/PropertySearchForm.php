<?php

namespace App\Livewire\Frontend\SearchRentalObject;

use Livewire\Component;
use App\Models\Attribute;
use App\Models\ObjPrices;
use App\Models\ObjDetails;
use App\Models\PropertyType;

class PropertySearchForm extends Component
{
    public $type = 'all';
    public $selectedTypeName = 'all'; // Name des aktuell ausgewählten Typs
    public $currentMinPrice;
    public $currentMaxPrice;
    public $minPrice;
    public $maxPrice;

    public $currentMinSize;
    public $currentMaxSize;
    public $minSize;
    public $maxSize;

    public $activeTab = 'forSale';

    // Neu
    public $propertyTypes;
    public $selectedAmenities = [];
    public $location = '';
    public $latitude = '';
    public $longitude = '';
    public $keyword = '';
    public $rooms = null;
    public $bathrooms = null;
    public $bedrooms = null;
    public $amenities = '';
    public $typeDropdownVisible = false;


    protected $listeners = [
        'updateSliderValues' => 'handleSliderUpdate',
    ];

    public function mount()
    {

        // Lade die Eigenschaftstypen
        $this->propertyTypes = PropertyType::all();


        // Initialisiere den ausgewählten Typnamen

        if ($this->type === 'all') {
            $this->selectedTypeName = __('All');
        } else {
            $selectedType = $this->propertyTypes->firstWhere('id', $this->type);
            $this->selectedTypeName = $selectedType ? $selectedType->name : __('All');
        }

        // Lade die Ausstattungsmerkmale
        $this->amenities = Attribute::all();


        $this->initializeRanges();
    }

    private function initializeRanges()
    {
        if ($this->activeTab === 'forRent') {
            $this->minPrice = ObjPrices::min('cold_rent') ?? 0;
            $this->maxPrice = ObjPrices::max('cold_rent') ?? 10000;
        } else {
            $this->minPrice = ObjPrices::min('purchase_price') ?? 0;
            $this->maxPrice = ObjPrices::max('purchase_price') ?? 10000;
        }

        $this->minSize = ObjDetails::min('area') ?? 0;
        $this->maxSize = ObjDetails::max('area') ?? 1000;

        $this->currentMinPrice = $this->minPrice;
        $this->currentMaxPrice = $this->maxPrice;

        $this->currentMinSize = $this->minSize;
        $this->currentMaxSize = $this->maxSize;
    }

    public function handleSliderUpdate($sliderType, $minValue, $maxValue)
    {
        if ($sliderType === 'price') {
            $this->currentMinPrice = $minValue;
            $this->currentMaxPrice = $maxValue;
        } elseif ($sliderType === 'size') {
            $this->currentMinSize = $minValue;
            $this->currentMaxSize = $maxValue;
        }

        \Log::info("Slider updated: $sliderType, Min: $minValue, Max: $maxValue");
    }

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
        $this->initializeRanges();
    }

    public function updatedSelectedAmenities($value)
    {
        if (!is_array($value)) {
            \Log::warning('Invalid selectedAmenities value', ['value' => $value]);
           // $this->selectedAmenities = []; // Zurücksetzen auf leeres Array
        }
    }

    public function updatedType($value)
    {
        if ($value === 'all') {
            $this->selectedTypeName = __('All');
        } else {
            $selectedType = $this->propertyTypes->firstWhere('id', $value);
            $this->selectedTypeName = $selectedType ? $selectedType->name : __('All');
        }
    }

    public function search()
    {
        $query = [
            'type' => $this->type,
            'location' => $this->location,
            'keyword' => $this->keyword,
            'minPrice' => is_numeric($this->currentMinPrice) ? $this->currentMinPrice : $this->minPrice,
            'maxPrice' => is_numeric($this->currentMaxPrice) ? $this->currentMaxPrice : $this->maxPrice,
            'minSize' => is_numeric($this->currentMinSize) ? $this->currentMinSize : $this->minSize,
            'maxSize' => is_numeric($this->currentMaxSize) ? $this->currentMaxSize : $this->maxSize,
            'rooms' => $this->rooms,
            'bathrooms' => $this->bathrooms,
            'bedrooms' => $this->bedrooms,
            'selectedAmenities' => is_array($this->selectedAmenities) ? $this->selectedAmenities : [],
        ];

        // Speichere die Suchparameter in der Session
        session(['search_query' => $query]);

  //  dd( $this->activeTab, $this->type, $this->currentMinSize,
  //   $this->currentMaxSize, $this->location, $this->latitude, $this->keyword, $this->currentMinPrice, $this->currentMaxPrice,
  //   $this->rooms, $this->bathrooms, $this->bedrooms, $this->selectedAmenities);

        \Log::info('Search query', $query);

    // Weiterleitung ohne Query-Parameter
    return redirect()->route('search.results');
    }



    public function render()
    {
        return view('livewire.frontend.search-rental-object.property-search-form', [
            'minPrice' => $this->minPrice,
            'maxPrice' => $this->maxPrice,
            'minSize' => $this->minSize,
            'maxSize' => $this->maxSize,
            'amenities' => $this->amenities,
        ]);
    }
}
