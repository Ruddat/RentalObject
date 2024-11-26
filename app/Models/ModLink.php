<?php

namespace App\Models;

use App\Models\ModPage;
use App\Models\ModCategory;
use Illuminate\Database\Eloquent\Model;

class ModLink extends Model
{
    protected $fillable = ['label', 'url', 'page_id', 'category_id', 'active', 'order'];

    /**
     * Beziehung zur Seite (ModPage).
     */
    public function category()
    {
        return $this->belongsTo(ModCategory::class, 'category_id');
    }

    public function page()
    {
        return $this->belongsTo(ModPage::class, 'page_id');
    }

    
}
