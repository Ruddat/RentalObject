<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SysPages extends Model
{

    use HasFactory;

    protected $fillable = ['slug', 'title', 'content', 'is_active'];
}
