<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SysSetting extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value'];

    public static function get($key, $default = null)
    {
        return optional(self::where('key', $key)->first())->value ?? $default;
    }

    public static function set($key, $value)
    {
        return self::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
