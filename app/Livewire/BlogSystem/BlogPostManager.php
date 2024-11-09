<?php

namespace App\Livewire\BlogSystem;

use App\Models\BlogTag;
use Livewire\Component;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Livewire\WithPagination;

class BlogPostManager extends Component
{
    use WithPagination;

    public $newsletterEmail;
    public $search = '';
    public $categoryFilter = null;
    public $tagFilter = null;
    public $featuredPosts;

    protected $updatesQueryString = ['search', 'categoryFilter', 'tagFilter'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
        $this->categoryFilter = request()->query('categoryFilter', $this->categoryFilter);
        $this->tagFilter = request()->query('tagFilter', $this->tagFilter);

        $this->featuredPosts = BlogPost::latest()->limit(3)->get();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->reset(['search', 'categoryFilter', 'tagFilter']);
        $this->resetPage();
    }

    public function subscribeNewsletter()
    {
        $this->newsletterEmail = '';
        session()->flash('message', 'Successfully subscribed to the newsletter.');
    }

    public function render()
    {
        $categories = BlogCategory::withCount('posts')->get();
        $tags = BlogTag::withCount('posts')->get();

        $posts = BlogPost::query()
            ->when($this->search, fn($query) => $query->where('title', 'like', "%{$this->search}%"))
            ->when($this->categoryFilter, fn($query) => $query->where('category_id', $this->categoryFilter))
            ->when($this->tagFilter, fn($query) => $query->whereHas('tags', fn($q) => $q->where('blog_tags.id', $this->tagFilter)))
            ->latest()
            ->paginate(5);

        return view('livewire.blog-system.blog-post-manager', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'featuredPosts' => $this->featuredPosts,
        ]);
    }
}
