<?php

namespace App\Models;

use App\Models\PropertyType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertyCategory extends Model
{
    use HasFactory;

    protected $fillable = ['property_type_id', 'name'];

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }
}
