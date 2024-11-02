<?php

namespace App\Models;

use App\Models\UtilityCost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RecordedUtilityCost extends Model
{
    use HasFactory;

    protected $fillable = ['rental_object_id', 'utility_cost_id', 'amount', 'custom_name', 'year'];

    // Beziehung zum UtilityCost-Modell
    public function utilityCost()
    {
        return $this->belongsTo(UtilityCost::class);
    }
}
