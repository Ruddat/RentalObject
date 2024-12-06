<div>
    <h2>Exposé Konfiguration</h2>

    <h3>Wähle Abschnitte:</h3>
    <div>
        <label>
            <input type="checkbox" wire:click="updateSelectedSections('details')"
                {{ in_array('details', $selectedSections) ? 'checked' : '' }}>
            Details
        </label>
        <label>
            <input type="checkbox" wire:click="updateSelectedSections('prices')"
                {{ in_array('prices', $selectedSections) ? 'checked' : '' }}>
            Preise
        </label>
        <label>
            <input type="checkbox" wire:click="updateSelectedSections('photos')"
                {{ in_array('photos', $selectedSections) ? 'checked' : '' }}>
            Fotos
        </label>
        <label>
            <input type="checkbox" wire:click="updateSelectedSections('energy')"
                {{ in_array('energy', $selectedSections) ? 'checked' : '' }}>
            Energieausweis
        </label>
    </div>

    <h3>Wähle Fotos:</h3>
    <div>
        @foreach($property->photos as $photo)
            <div>
                <img src="{{ Storage::url($photo->file_path) }}" alt="Photo" width="100">
                <input type="checkbox" wire:click="togglePhotoSelection({{ $photo->id }})"
                    {{ in_array($photo->id, $selectedPhotos) ? 'checked' : '' }}>
            </div>
        @endforeach
    </div>

    <button wire:click="generatePdf" class="btn btn-primary">PDF Generieren</button>
</div>
