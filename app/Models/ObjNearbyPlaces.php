<?php

namespace App\Models;

use App\Models\NearByPlaces;
use App\Models\ObjProperties;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ObjNearbyPlaces extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'place_id',
        'distance',
    ];

    // Beziehungen
    public function property()
    {
        return $this->belongsTo(ObjProperties::class);
    }

    public function place()
    {
        return $this->belongsTo(NearByPlaces::class);
    }
}
