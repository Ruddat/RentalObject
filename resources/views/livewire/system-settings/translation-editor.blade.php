<div class="main-content">
    <div class="main-content-inner">
        <h2 class="mb-4">Übersetzungen bearbeiten</h2>

        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif



    <!-- Search Bar -->
    <input type="text" wire:model.live="search" placeholder="Suche nach Schlüssel oder Text..." class="form-control mb-3">

    <!-- Translations Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Schlüssel</th>
                <th>Sprache</th>
                <th>Text</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($translations as $translation)
                <tr>
                    <td>{{ $translation->key }}</td>
                    <td>{{ $translation->locale }}</td>
                    <td>{{ $translation->text }}</td>
                    <td>
                        <button wire:click="editTranslation({{ $translation->id }})" class="btn btn-primary btn-sm">Bearbeiten</button>
                        <button wire:click="confirmDelete({{ $translation->id }})" class="btn btn-danger btn-sm">Löschen</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="mt-2">
        {{ $translations->links() }}
    </div>

    <!-- Edit Form -->
    @if($editMode)
        <div class="mt-4">
            <h3>Übersetzung bearbeiten</h3>
            <form wire:submit.prevent="updateTranslation">
                <div class="form-group">
                    <label>Schlüssel</label>
                    <input type="text" wire:model="key" class="form-control" required>
                    @error('key') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label>Sprache</label>
                    <input type="text" wire:model="locale" class="form-control" required>
                    @error('locale') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label>Text</label>
                    <textarea wire:model="text" class="form-control" required></textarea>
                    @error('text') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="btn btn-success mt-2">Speichern</button>
                <button type="button" wire:click="resetForm" class="btn btn-secondary mt-2">Abbrechen</button>
            </form>
        </div>
    @endif

    <!-- Delete Confirmation Modal -->
    @if($confirmingDelete)
        <div class="modal d-block" tabindex="-1" style="background-color: rgba(0,0,0,0.5);">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Bestätigung</h5>
                        <button type="button" wire:click="$set('confirmingDelete', false)" class="btn-close" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Möchten Sie diese Übersetzung wirklich löschen?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="$set('confirmingDelete', false)" class="btn btn-secondary">Abbrechen</button>
                        <button type="button" wire:click="deleteTranslation" class="btn btn-danger">Löschen</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Flash Message -->
    @if (session()->has('message'))
        <div class="alert alert-success mt-3">
            {{ session('message') }}
        </div>
    @endif
</div>
<div class="overlay-dashboard"></div>

</div>
