<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ObjDoc extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'temporary_uuid',
        'name',
        'path',
        'size',
    ];
}
