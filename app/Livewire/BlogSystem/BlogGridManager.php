<?php

namespace App\Livewire\BlogSystem;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\BlogPost;

class BlogGridManager extends Component
{
    use WithPagination;

    public $categoryId;

    public function mount($categoryId = null)
    {
        $this->categoryId = $categoryId;
    }

    public function render()
    {
        // Filtert die BlogPosts nach der Kategorie-ID
        $posts = BlogPost::when($this->categoryId, function ($query) {
                $query->where('category_id', $this->categoryId);
            })
            ->latest()
            ->paginate(9);

        return view('livewire.blog-system.blog-grid-manager', [
            'posts' => $posts,
        ]);
    }
}
