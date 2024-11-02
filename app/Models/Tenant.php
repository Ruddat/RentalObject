<?php

namespace App\Models;

use App\Models\RentalObject;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $guarded = [];


        /**
     * Relationship to RentalObject
     */
    public function rentalObject()
    {
        return $this->belongsTo(RentalObject::class, 'rental_object_id');
    }
}
