<?php

namespace App\Models;

use App\Models\Attribute;
use App\Models\ObjSections;
use App\Models\PropertyType;
use App\Models\ObjNearbyPlaces;
use App\Models\PropertyCategory;
use Illuminate\Database\Eloquent\Model;

class ObjProperties extends Model
{

    protected $guarded = [];

    // Beziehungen
    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class, 'property_type');
    }

    public function category()
    {
        return $this->belongsTo(PropertyCategory::class, 'category');
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'attribute_property', 'property_id', 'attribute_id');
    }

    public function sections()
    {
        return $this->hasMany(ObjSections::class, 'property_id');
    }

    public function nearbyPlaces()
    {
        return $this->hasMany(ObjNearbyPlaces::class, 'property_id')
        ->withPivot('distance')
        ->withTimestamps();
    }
}
