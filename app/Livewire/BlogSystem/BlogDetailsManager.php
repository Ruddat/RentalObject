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

    public function mount($identifier)
    {
        // Retrieve the main post with approval and date range checks
        $this->post = BlogPost::with('category', 'tags')
            ->where('slug', $identifier)
            ->where('approval_status', 'approved')
            ->where(function ($query) {
                $query->where('start_date', '<=', now())
                      ->orWhereNull('start_date');
            })
            ->where(function ($query) {
                $query->where('end_date', '>=', now())
                      ->orWhereNull('end_date');
            })
            ->firstOrFail();

        // Fetch categories with filtered post count
        $this->categories = BlogCategory::withCount(['posts' => function ($query) {
            $query->where('approval_status', 'approved')
                  ->where(function ($query) {
                      $query->where('start_date', '<=', now())
                            ->orWhereNull('start_date');
                  })
                  ->where(function ($query) {
                      $query->where('end_date', '>=', now())
                            ->orWhereNull('end_date');
                  });
        }])->get();

        // Fetch featured posts with the same conditions
        $this->featuredPosts = BlogPost::query()
            ->where('approval_status', 'approved')
            ->where(function ($query) {
                $query->where('start_date', '<=', now())
                      ->orWhereNull('start_date');
            })
            ->where(function ($query) {
                $query->where('end_date', '>=', now())
                      ->orWhereNull('end_date');
            })
            ->latest()
            ->limit(3)
            ->get();
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
