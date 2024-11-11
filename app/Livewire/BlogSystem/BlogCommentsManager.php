<?php

namespace App\Livewire\BlogSystem;

use Livewire\Component;
use App\Models\BlogComment;
use Illuminate\Support\Facades\Auth;

class BlogCommentsManager extends Component
{
    public $postId;
    public $comments;
    public $newComment = '';
    public $errorMessage;

    public function mount($postId)
    {
        $this->postId = $postId;
        $this->loadComments();
    }

    public function loadComments()
    {
        $this->comments = BlogComment::where('blog_post_id', $this->postId)
            ->latest()
            ->get();
    }

    public function submitComment()
    {
        // Überprüfen, ob der Benutzer eingeloggt ist
        if (!Auth::check()) {
            $this->errorMessage = 'Bitte logge dich ein, um einen Kommentar zu hinterlassen.';
            return;
        }

        // Kommentar validieren
        $this->validate([
            'newComment' => 'required|string|max:500',
        ]);

        // Kommentar erstellen und speichern
        Comment::create([
            'blog_post_id' => $this->postId,
            'user_id' => Auth::id(),
            'content' => $this->newComment,
        ]);

        // Kommentar-Eingabefeld leeren und Kommentare neu laden
        $this->newComment = '';
        $this->errorMessage = null; // Fehlermeldung zurücksetzen
        $this->loadComments();
    }

    public function render()
    {
        return view('livewire.blog-system.blog-comments-manager');
    }
}
