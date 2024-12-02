<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObjEnergyCertificate extends Model
{
    protected $fillable = [
        'property_id',
        'name',
        'certificate_type',
        'building_type',
        'certificate_art',
        'issue_date',
        'valid_until',
        'primary_energy_carrier',
        'construction_year',
        'energy_consumption',
        'efficiency_class',
        'water_included',
    ];
}
