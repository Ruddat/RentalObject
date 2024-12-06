<div class="card mt-4">
    <div class="card-header">
        <h5>Dokumente hochladen</h5>
    </div>
    <div class="card-body">
        <p>Hier können Sie alle Dokumente hochladen, die für Interessenten relevant sind, z.B. den Grundriss, den Energieausweis oder die Immobilienbewertung.</p>

        <!-- Hochgeladene Dokumente zählen -->
        <p><strong>Hochgeladene Dokumente:</strong> {{ count($uploadedDocuments) }}/21</p>

        <!-- Dokumente hochladen -->
        <form wire:submit.prevent="uploadDocuments" class="mb-3">
            <div class="mb-3">
                <input type="file" wire:model="documents" multiple class="form-control"
                    @if(count($uploadedDocuments) >= 21) disabled @endif>
                @error('documents.*') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary"
                @if(count($uploadedDocuments) >= 21) disabled @endif>Hochladen</button>
        </form>

        @if($uploadedDocuments)
            <h6>Hochgeladene Dokumente:</h6>
            <ul class="list-group">
                @foreach($uploadedDocuments as $index => $document)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span><strong>{{ $index + 1 }}.</strong> {{ $document['name'] }} ({{ $document['size'] }} KB)</span>
                        <button wire:click="deleteDocument({{ $index }})" class="btn btn-danger btn-sm">Löschen</button>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-muted">Es wurden noch keine Dokumente hochgeladen.</p>
        @endif

        <p class="mt-3 text-muted small">
            <strong>Hinweise:</strong> Es können bis zu 21 PDF-Dokumente hochgeladen werden. Eine Datei kann max. 40 MB groß sein.
        </p>

        @if (session()->has('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger mt-3">{{ session('error') }}</div>
        @endif
    </div>
</div>
