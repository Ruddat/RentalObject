<?php

namespace App\Models;

use App\Models\ModPage;
use Illuminate\Database\Eloquent\Model;

class ModBlock extends Model
{
    protected $fillable = ['page_id', 'title', 'content', 'type', 'order', 'active'];

    /**
     * Beziehung zur Seite (ModPage).
     */
    public function page()
    {
        return $this->belongsTo(ModPage::class, 'page_id');
    }
}
