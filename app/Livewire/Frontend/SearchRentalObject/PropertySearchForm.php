<?php

namespace App\Livewire\Frontend\SearchRentalObject;

use Livewire\Component;
use App\Models\ObjPrices;
use App\Models\ObjDetails;
use App\Services\GeocodeService;

class PropertySearchForm extends Component
{
    public $type = 'all';
    public $keyword = '';
    public $rooms = null;
    public $selectedAmenities = [];
    public $location = '';
    public $latitude = '';
    public $longitude = '';

    // Preisbereich
    public $minPrice;
    public $maxPrice;
    public $currentMinPrice;
    public $currentMaxPrice;

    // Größenbereich
    public $minSize;
    public $maxSize;
    public $currentMinSize;
    public $currentMaxSize;

    protected $listeners = [
        'updateMinPrice' => 'setMinPrice',
        'updateMaxPrice' => 'setMaxPrice',
        'updateMinSize' => 'setMinSize',
        'updateMaxSize' => 'setMaxSize',
        'updatePrice' => 'setPriceRange',
        'updateSize' => 'setSizeRange',
    ];



    public $priceOptions = [
        'start' => [0, 10000], // Initialer Bereich
        'range' => [
            'min' => 0,
            'max' => 10000,
        ],
        'connect' => true,
        'tooltips' => [true, true], // Zeigt Tooltips an
        'behaviour' => 'tap-drag',
    ];

    public $sizeOptions = [
        'start' => [0, 1000],
        'range' => [
            'min' => 0,
            'max' => 1000,
        ],
        'connect' => true,
        'tooltips' => [true, true],
        'behaviour' => 'tap-drag',
    ];
    public $options = [
        'start' => [
            20,
            50
        ],
        'range' => [
            'min' =>  [1],
            'max' => [100]
        ],
        'connect' => true,
        'behaviour' => 'tap-drag',
        'tooltips' => true,
        'pips' => [
            'mode' => 'steps',
            'stepped' => true,
            'density' => 4
        ],
    ];

    public array $sliderValues;

    public function mount()
    {
        $this->minPrice = ObjPrices::min('purchase_price') ?? 0;
        $this->maxPrice = ObjPrices::max('purchase_price') ?? 10000;
        $this->sliderValues['price'] = [$this->minPrice, $this->maxPrice];
        $this->priceOptions['range'] = ['min' => $this->minPrice, 'max' => $this->maxPrice];
        $this->priceOptions['start'] = [$this->minPrice, $this->maxPrice];

        $this->minSize = ObjDetails::min('area') ?? 0;
        $this->maxSize = ObjDetails::max('area') ?? 1000;
        $this->sliderValues['size'] = [$this->minSize, $this->maxSize];
        $this->sizeOptions['range'] = ['min' => $this->minSize, 'max' => $this->maxSize];
        $this->sizeOptions['start'] = [$this->minSize, $this->maxSize];
    }



    public function setPriceRange($range)
    {
        $this->sliderValues['price'] = $range;
        $this->currentMinPrice = $range[0];
        $this->currentMaxPrice = $range[1];
        \Log::info('Price range updated', $range);
    }

    public function setSizeRange($range)
    {
        $this->sliderValues['size'] = $range;
        $this->currentMinSize = $range[0];
        $this->currentMaxSize = $range[1];
        \Log::info('Size range updated', $range);
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
            'selectedAmenities' => is_array($this->selectedAmenities) ? $this->selectedAmenities : [],
        ];

        \Log::info('Search query', $query);

        return redirect()->route('search.results', $query);
    }

    public function getCurrentLocation()
    {
        try {
            $geocodeService = new GeocodeService();
            $locationData = $geocodeService->getCurrentPosition();

            if (!empty($locationData)) {
                $this->latitude = $locationData['latitude'];
                $this->longitude = $locationData['longitude'];
                $this->location = $locationData['address'] ?? 'Unknown Location';

                $this->dispatchBrowserEvent('location-updated', [
                    'latitude' => $this->latitude,
                    'longitude' => $this->longitude,
                ]);
            } else {
                session()->flash('error', 'Standort konnte nicht ermittelt werden.');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Fehler beim Abrufen des Standorts: ' . $e->getMessage());
        }
    }

    public function updatedSelectedAmenities($value)
    {
        if (!is_array($value)) {
            \Log::warning('Invalid selectedAmenities value', ['value' => $value]);
            $this->selectedAmenities = []; // Zurücksetzen auf leeres Array
        }
    }

    public function setMinPrice($value)
    {
        \Log::info('setMinPrice called', ['value' => $value, 'type' => gettype($value)]);
        $this->currentMinPrice = is_numeric($value) ? floatval($value) : $this->minPrice;
    }

    public function setMaxPrice($value)
    {
        \Log::info('setMaxPrice called', ['value' => $value]);
        $this->currentMaxPrice = is_numeric($value) ? floatval($value) : $this->maxPrice;
    }

    public function setMinSize($value)
    {
        \Log::info('setMinSize called', ['value' => $value]);
        $this->currentMinSize = is_numeric($value) ? floatval($value) : $this->minSize;
    }

    public function setMaxSize($value)
    {
        \Log::info('setMaxSize called', ['value' => $value]);
        $this->currentMaxSize = is_numeric($value) ? floatval($value) : $this->maxSize;
    }


    public function render()
    {
        return view('livewire.frontend.search-rental-object.property-search-form', [
            'propertyTypes' => \App\Models\PropertyType::all(),
            'amenities' => \App\Models\Attribute::all(),
        ]);
    }
}
