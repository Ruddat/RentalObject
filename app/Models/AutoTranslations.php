<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutoTranslations extends Model
{
    //
    protected $table = 'auto_translations';
    protected $fillable = ['key', 'locale', 'text'];
}
