<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SysPages extends Model
{
    protected $fillable = ['slug', 'title', 'content', 'is_active'];
}
