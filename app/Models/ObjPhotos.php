<?php

namespace App\Models;

use App\Models\ObjProperties;
use Illuminate\Database\Eloquent\Model;

class ObjPhotos extends Model
{
    protected $fillable = [
        'property_id',
        'temporary_uuid',
        'size_name',
        'file_path',
        'sort_order',
    ];

    public function property()
    {
        return $this->belongsTo(ObjProperties::class, 'property_id');
    }
}
