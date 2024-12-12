<?php

namespace App\Livewire\Frontend\SectionComponets;

use Livewire\Component;
use App\Models\BlogPost;

class BlogSection extends Component
{
    public $latestBlogs;
    public $showSection = false;

    public function mount()
    {
        // Lade die neuesten Blog-Artikel aus der Datenbank
        $this->latestBlogs = BlogPost::where('approval_status', 'approved')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->take(6) // Anzahl der Artikel, die angezeigt werden sollen
            ->get();

        // Überprüfen, ob mindestens 3 Blogs vorhanden sind
        $this->showSection = $this->latestBlogs->count() >= 3;
    }

    public function render()
    {
        return view('livewire.frontend.section-componets.blog-section', [
            'blogs' => $this->latestBlogs,
        ]);
    }
}
