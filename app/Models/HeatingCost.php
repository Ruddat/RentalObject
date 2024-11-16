<?php

namespace App\Models;

use App\Models\RentalObject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HeatingCost extends Model
{
    use HasFactory;

    // Dummy ID für Heizkosten
    public const HEATING_COST_ID = 9999;

    protected $fillable = [
        'user_id', 'rental_object_id', 'heating_type', 'price_per_unit', 'initial_reading',
        'final_reading', 'total_oil_used', 'warm_water_percentage', 'year'
    ];

    public function rentalObject() {
        return $this->belongsTo(RentalObject::class);
    }

    public function calculateTotalCost() {
        if ($this->heating_type === 'gas') {
            return ($this->final_reading - $this->initial_reading) * $this->price_per_unit;
        } else if ($this->heating_type === 'oil') {
            return $this->total_oil_used * $this->price_per_unit;
        }
        return 0;
    }
}
