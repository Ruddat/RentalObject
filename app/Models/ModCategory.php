<?php

namespace App\Models;

use App\Models\ModLink;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Beziehung zu Links (ModLink).
     */
    public function links()
    {
        return $this->hasMany(ModLink::class, 'category_id');
    }

}
