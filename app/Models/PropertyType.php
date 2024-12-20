<?php

namespace App\Models;

use App\Models\ObjProperties;
use App\Models\PropertyCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertyType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function categories()
    {
        return $this->hasMany(PropertyCategory::class, 'property_type_id');
    }

    public function properties()
    {
        return $this->hasMany(ObjProperties::class, 'property_type', 'id');
    }


}
