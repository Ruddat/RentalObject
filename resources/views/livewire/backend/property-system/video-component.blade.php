<div class="card mb-4">
    <div class="card-header">
        <h5>Video</h5>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="submitVideo">
            <!-- Auswahl für die Videoart -->
            <div class="mb-3">
                <label class="form-label">Video Type</label>
                <select wire:model="videoType" class="form-select">
                    <option value="embed_url">Embed URL</option>
                    <option value="file_upload">Upload Video File</option>
                </select>
            </div>

            <!-- Eingabefeld für die Video-URL, wenn 'Embed URL' ausgewählt ist -->
            @if ($videoType === 'embed_url')
                <div class="mb-3">
                    <label class="form-label">Video URL (e.g., YouTube, Vimeo)</label>
                    <input type="url" wire:model.defer="videoUrl" class="form-control" placeholder="Enter video URL">
                    @error('videoUrl') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            <!-- Datei-Upload-Feld für Videodateien, wenn 'File Upload' ausgewählt ist -->
            @if ($videoType === 'file_upload')
                <div class="mb-3">
                    <label class="form-label">Upload Video File</label>
                    <input type="file" wire:model="videoFile" class="form-control">
                    @error('videoFile') <span class="text-danger">{{ $message }}</span> @enderror

                    <!-- Ladeanzeige für das Video -->
                    <div wire:loading wire:target="videoFile" class="mt-2">Uploading...</div>

                    <!-- Vorschau des hochgeladenen Videos, falls unterstützt -->
                    @if ($videoFile)
                        <video controls class="mt-2" style="max-width: 100%;">
                            <source src="{{ $videoFile->temporaryUrl() }}" type="{{ $videoFile->getMimeType() }}">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                </div>
            @endif

            <div class="text-end">
                <button type="submit" class="btn btn-primary">Save Video</button>
            </div>
        </form>
    </div>
</div>
