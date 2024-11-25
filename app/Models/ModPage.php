<?php

namespace App\Models;

use App\Models\ModLink;
use App\Models\ModBlock;
use App\Models\ModCategory;
use Illuminate\Database\Eloquent\Model;

class ModPage extends Model
{
    protected $fillable = ['title', 'slug', 'active'];

    /**
     * Beziehung zu Links (ModLink).
     */
    public function link()
    {
        return $this->hasOne(ModLink::class, 'page_id');
    }

    /**
     * Beziehung zu den Blöcken, sortiert nach `order`.
     */
    public function blocks()
    {
        return $this->hasMany(ModBlock::class, 'page_id')->orderBy('order', 'asc');
    }

    public function category()
    {
        return $this->belongsTo(ModCategory::class, 'category_id');
    }
}

