<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogTag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function posts()
{
    return $this->belongsToMany(BlogPost::class, 'blog_post_tag');
}

}
