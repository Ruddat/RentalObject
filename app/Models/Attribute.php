<?php

namespace App\Models;

use App\Models\ObjProperties;
use App\Models\AttributeGroup;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'group_id'];

    public function group()
    {
        return $this->belongsTo(AttributeGroup::class, 'group_id');
    }

    public function properties()
    {
        return $this->belongsToMany(ObjProperties::class, 'attribute_property', 'attribute_id', 'property_id');
    }

}
