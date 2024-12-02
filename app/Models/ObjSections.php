<?php

namespace App\Models;

use App\Models\ObjProperties;
use Illuminate\Database\Eloquent\Model;

class ObjSections extends Model
{
    protected $fillable = ['property_id', 'headline', 'description'];

    public function property()
    {
        return $this->belongsTo(ObjProperties::class, 'property_id');
    }
}
