<?php

namespace App\Livewire\BlogSystem;

use Livewire\Component;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\BlogTag;

class BlogDetailsManager extends Component
{
    public $postId;
    public $post;
    public $categories;
    public $featuredPosts;

    public function mount($postId)
    {
        $this->postId = $postId;
        $this->post = BlogPost::with('category', 'tags')->findOrFail($this->postId);
        $this->categories = BlogCategory::withCount('posts')->get();
        $this->featuredPosts = BlogPost::latest()->limit(3)->get();
    }

    public function render()
    {
        return view('livewire.blog-system.blog-details-manager', [
            'post' => $this->post,
            'categories' => $this->categories,
            'featuredPosts' => $this->featuredPosts,
        ]);
    }
}
