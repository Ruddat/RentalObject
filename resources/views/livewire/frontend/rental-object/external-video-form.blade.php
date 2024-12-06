<div class="card mt-4">
    <div class="card-header">
        <h5>YouTube-Video</h5>
    </div>
    <div class="card-body">
        @if($isEditing)
            <!-- Formular für neues oder bestehendes Video -->
            <form wire:submit.prevent="saveVideo" class="mt-3">
                <div class="mb-3">
                    <label for="youtubeVideoLink" class="form-label">YouTube-Link</label>
                    <input type="url" id="youtubeVideoLink" class="form-control" wire:model="youtubeVideoLink" placeholder="https://www.youtube.com/watch?v=example">
                    @error('youtubeVideoLink')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="youtubeDescription" class="form-label">Beschreibung</label>
                    <textarea id="youtubeDescription" class="form-control" wire:model="youtubeDescription" placeholder="Beschreibung des Videos"></textarea>
                </div>
                <div class="d-flex flex-wrap justify-content-end gap-2">
                    <button type="submit" class="btn btn-primary">Übernehmen</button>
                    <button type="button" class="btn btn-secondary" wire:click="cancelEditing">Schließen</button>
                </div>
                <div class="mt-3">
                    <p class="text-muted small">
                        <strong>Hinweise:</strong> Sie können nur ein Video integrieren. Veröffentlichen Sie das Video zuvor auf YouTube.
                        Schließen Sie die Integration ab, indem Sie auf "Übernehmen" klicken.
                    </p>
                </div>
            </form>
        @elseif($youtubeVideoLink)
            <!-- Anzeige des gespeicherten Videos -->
            <div class="row align-items-center">
                <div class="col-12 col-sm-auto text-center text-sm-start mb-3 mb-sm-0">
                    <iframe
                        width="200"
                        height="113"
                        src="https://www.youtube.com/embed/{{ $youtubeVideoId }}"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="col">
                    <p>
                        <strong>Aktuelles Video:</strong>
                        <a href="{{ $youtubeVideoLink }}" target="_blank" class="text-primary">{{ $youtubeVideoLink }}</a>
                    </p>
                    <p><strong>Beschreibung:</strong> {{ $youtubeDescription }}</p>
                </div>
                <div class="col-12 col-sm-auto d-flex justify-content-center justify-content-sm-end gap-2 mt-3 mt-sm-0">
                    <button wire:click="editVideo" class="btn btn-warning btn-sm">Bearbeiten</button>
                    <button wire:click="deleteVideo" class="btn btn-danger btn-sm">Löschen</button>
                </div>
            </div>
        @else
            <!-- Video hinzufügen -->
            <button wire:click="editVideo" class="btn btn-primary">
                YouTube-Video hinzufügen
            </button>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger mt-3">{{ session('error') }}</div>
        @endif
    </div>
</div>
