<?php

namespace App\Livewire\Backend\PropertySystem;

use Livewire\Component;
use Livewire\WithFileUploads;

class VideoComponent extends Component
{
    use WithFileUploads;

    public $videoType = 'embed_url'; // Standardmäßig auf 'embed_url' setzen
    public $videoUrl;
    public $videoFile;

    protected $rules = [
        'videoType' => 'required|string|in:embed_url,file_upload',
        'videoUrl' => 'nullable|url',
        'videoFile' => 'nullable|file|mimes:mp4,avi,mov|max:51200', // Maximal 50 MB
    ];

    public function submitVideo()
    {
        $this->validate();

        $videoFilePath = $this->videoFile ? $this->videoFile->store('videos', 'public') : null;

        // Sende die Videodaten an die Hauptkomponente
        $this->dispatch('videoUpdated', [
            'videoType' => $this->videoType,
            'videoUrl' => $this->videoUrl,
            'videoFilePath' => $videoFilePath,
        ]);

        // Felder zurücksetzen
        $this->reset(['videoUrl', 'videoFile']);
    }

    public function render()
    {
        return view('livewire.backend.property-system.video-component');
    }
}
