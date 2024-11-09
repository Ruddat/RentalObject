<?php

namespace App\Models;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $guarded = [];

    public function posts()
    {
        return $this->hasMany(BlogPost::class, 'category_id');
    }

}
