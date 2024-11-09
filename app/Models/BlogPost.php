<?php

namespace App\Models;

use App\Models\BlogTag;
use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'short_title', 'content', 'image', 'image_small', 'image_large', 'author', 'approval_status', 'start_date', 'end_date', 'published_at'];


    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    
    public function tags()
    {
        return $this->belongsToMany(BlogTag::class, 'blog_post_tag');
    }


}
