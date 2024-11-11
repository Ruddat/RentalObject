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
        // Filter the BlogPosts by category ID, approval status, and date range
        $posts = BlogPost::query()
            ->where('approval_status', 'approved')
            ->where(function ($query) {
                $query->where('start_date', '<=', now())
                      ->orWhereNull('start_date'); // Posts that have started or have no start date
            })
            ->where(function ($query) {
                $query->where('end_date', '>=', now())
                      ->orWhereNull('end_date'); // Posts that have not ended or have no end date
            })
            ->when($this->categoryId, fn($query) => $query->where('category_id', $this->categoryId))
            ->latest()
            ->paginate(9);

        return view('livewire.blog-system.blog-grid-manager', [
            'posts' => $posts,
        ]);
    }
}
