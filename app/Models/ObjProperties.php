<?php

namespace App\Models;

use App\Models\Attribute;
use App\Models\ObjPhotos;
use App\Models\ObjSections;
use App\Models\PropertyType;
use App\Models\ObjNearbyPlaces;
use App\Models\PropertyCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ObjProperties extends Model
{
    use HasFactory;

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

    public function mainPhoto()
    {
        return $this->hasOne(ObjPhotos::class, 'property_id')
        ->where('sort_order', 1);
    }

    public function getMediumPhotoPath()
    {
        if ($this->mainPhoto) {
            $originalPath = $this->mainPhoto->file_path;

            // Medium-Pfad erstellen
            $mediumPath = str_replace(['original/', '.png', '.jpg'], ['medium/', '_medium.png', '_medium.jpg'], $originalPath);

            return asset('storage/' . $mediumPath);
        }

        // Fallback-Bild
        return asset('build/images/home/kein_bild_default.jpg');
    }

}
