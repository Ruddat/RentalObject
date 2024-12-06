<div class="card mt-4">
    <div class="card-header">
        <h5>360°-Rundgang</h5>
    </div>
    <div class="card-body">
        @if($isEditing)
            <!-- Formular für neuen oder bestehenden Rundgang -->
            <form wire:submit.prevent="saveTour" class="mt-3">
                <div class="mb-3">
                    <label for="externalTourLink" class="form-label">Link zum externen 360°-Rundgang</label>
                    <input type="url" id="externalTourLink" class="form-control" wire:model="externalTourLink" placeholder="https://example.com/tour">
                    @error('externalTourLink')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex flex-wrap justify-content-end gap-2">
                    <button type="submit" class="btn btn-primary">Übernehmen</button>
                    <button type="button" class="btn btn-secondary" wire:click="cancelEditing">Schließen</button>
                </div>
                <div class="mt-3">
                    <p class="text-muted small">
                        <strong>Hinweise:</strong> Sie können einen Rundgang von <em>Ogulo, Matterport, Immoviewer, Giraffe 360, Immo-Tours, Magic Plan</em> und weiteren Anbietern hinzufügen, indem Sie den Link hier eingeben.
                        Schließen Sie die Integration ab, indem Sie auf "Übernehmen" klicken.
                    </p>
                </div>
            </form>
        @elseif($externalTourLink)
            <!-- Rundgang vorhanden -->
            <div class="row align-items-center">
                <div class="col-12 col-sm-auto text-center text-sm-start mb-3 mb-sm-0">
                    <img src="{{ asset('build/images/rundgang/360-tour-placeholder.jpg') }}" alt="360° Rundgang Vorschau" class="img-thumbnail" style="width: 100px; height: auto;">
                </div>
                <div class="col">
                    <p>
                        <strong>Aktueller Rundgang:</strong>
                        <a href="{{ $externalTourLink }}" target="_blank" class="text-primary">{{ $externalTourLink }}</a>
                    </p>
                </div>
                <div class="col-12 col-sm-auto d-flex justify-content-center justify-content-sm-end gap-2 mt-3 mt-sm-0">
                    <button wire:click="editTour" class="btn btn-warning btn-sm">Bearbeiten</button>
                    <button wire:click="deleteTour" class="btn btn-danger btn-sm">Löschen</button>
                </div>
            </div>
        @else
            <!-- Rundgang hinzufügen -->
            <button wire:click="editTour" class="btn btn-primary">
                360° Rundgang hinzufügen
            </button>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif
    </div>
</div>
