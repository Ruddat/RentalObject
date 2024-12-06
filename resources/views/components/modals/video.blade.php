<!-- YouTube-Video -->
<div class="mb-4">
    <h5>YouTube-Video</h5>
    <p>Video hinzufügen</p>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal">
        Video hinzufügen
    </button>
</div>

<!-- Modal für das YouTube-Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">YouTube-Video hinzufügen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Schließen"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="saveVideo">
                    <div class="mb-3">
                        <label for="videoLink" class="form-label">YouTube-Link</label>
                        <input type="text" class="form-control" id="videoLink" wire:model.defer="videoLink">
                        @error('videoLink') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="videoDescription" class="form-label">Beschreibung</label>
                        <textarea class="form-control" id="videoDescription" wire:model.defer="videoDescription"></textarea>
                        @error('videoDescription') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Übernehmen</button>
                </form>
            </div>
            <div class="modal-footer">
                <p class="small text-muted">
                    Bitte beachten Sie unsere Richtlinien für Anlagen. Sie können nur ein Video integrieren. Veröffentlichen Sie dieses zuvor auf YouTube.
                </p>
            </div>
        </div>
    </div>
</div>
