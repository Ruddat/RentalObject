<?php

namespace App\Models;

use App\Models\RentalObject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'phone', 'email', 'rental_object_id', 'billing_type',
        'unit_count', 'person_count', 'square_meters', 'start_date', 'end_date',
        'gas_meter', 'electricity_meter', 'water_meter', 'hot_water_meter',
        'street', 'house_number', 'zip_code', 'city'
    ];


        /**
     * Relationship to RentalObject
     */
    public function rentalObject()
    {
        return $this->belongsTo(RentalObject::class, 'rental_object_id');
    }
}
