
<div class="col-xl-12">
    <div class="card">
        @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

        <div class="card-header">
            <h5>Übersetzungen bearbeiten</h5>
            <p>Using the column strip table need to add <code> .table-striped-columns </code>
                class to table tag </p>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bottom-border  table-striped-columns align-middle mb-0">
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
                                    <button wire:click="confirmDelete({{ $translation->id }})" type="button" class="btn btn-danger icon-btn b-r-4">
                                        <i class="ti ti-trash"></i>
                                    </button>
                                    <button wire:click="editTranslation({{ $translation->id }})" type="button" class="btn btn-success icon-btn b-r-4">
                                        <i class="ti ti-edit"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

    <!-- Pagination Links -->
    <div class="card-footer d-flex justify-content-between align-items-center">
        <div class="small text-muted">
            Showing {{ $translations->firstItem() }} to {{ $translations->lastItem() }} of {{ $translations->total() }} translations
        </div>
        <div>
            {{ $translations->links() }}
        </div>
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
        </div>
    </div>
</div>









