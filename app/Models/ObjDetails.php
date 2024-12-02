<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObjDetails extends Model
{
    protected $fillable = [
        'property_id',
        'area',
        'land_area',
        'rooms',
        'reference_number',
        'divisible_min',
        'divisible_max',
        'furniture',
        'position',
        'available_from',
        'available_to',
        'max_persons',
        'wg_size',
        'build_year',
        'move_in',
        'seats',
        'floor',
        'window_area',
        'min_lease',
        'preferences_gender',
        'preferences_age_from',
        'preferences_age_to',
    ];
}
