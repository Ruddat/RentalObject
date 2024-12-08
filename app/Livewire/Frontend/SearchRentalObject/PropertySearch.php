<?php

namespace App\Livewire\Frontend\SearchRentalObject;

use Livewire\Component;
use App\Models\Attribute;
use App\Models\PropertyType;
use App\Models\ObjProperties;

class PropertySearch extends Component
{
    public $type = 'all';
    public $location = '';
    public $keyword = '';
    public $minPrice;
    public $maxPrice;
    public $minSize;
    public $maxSize;
    public $rooms = null;
    public $bathrooms = null;
    public $bedrooms = null;
    public $selectedAmenities = [];

    public function render()
    {
        $query = ObjProperties::query();

        // Filters
        if ($this->type !== 'all') {
            $query->where('property_type', $this->type);
        }
        if ($this->location) {
            $query->where('city', 'like', '%' . $this->location . '%');
        }
        if ($this->keyword) {
            $query->where('title', 'like', '%' . $this->keyword . '%');
        }
        if ($this->minPrice || $this->maxPrice) {
            $query->whereHas('objPrices', function ($q) {
                if ($this->minPrice) $q->where('cold_rent', '>=', $this->minPrice);
                if ($this->maxPrice) $q->where('cold_rent', '<=', $this->maxPrice);
            });
        }
        if ($this->minSize || $this->maxSize) {
            $query->whereHas('objDetails', function ($q) {
                if ($this->minSize) $q->where('area', '>=', $this->minSize);
                if ($this->maxSize) $q->where('area', '<=', $this->maxSize);
            });
        }
        if ($this->rooms) {
            $query->whereHas('objDetails', fn($q) => $q->where('rooms', $this->rooms));
        }
        if ($this->selectedAmenities) {
            $query->whereHas('attributes', fn($q) => $q->whereIn('attributes.id', $this->selectedAmenities));
        }

        $properties = $query->get();

        // Load data for filters
        $propertyTypes = PropertyType::all();
        $amenities = Attribute::all();

        return view('livewire.frontend.search-rental-object.property-search', [
            'properties' => $properties,
            'propertyTypes' => $propertyTypes,
            'amenities' => $amenities,
        ]);
    }
}
