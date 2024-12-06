
<div class="modal fade" id="virtualTourModal" tabindex="-1" aria-labelledby="virtualTourModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">360°-Rundgang hinzufügen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Schließen"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="tourLink" class="form-label">Link zum 360°-Rundgang</label>
                        <input type="url" class="form-control" id="tourLink" wire:model="tourLink">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Beschreibung</label>
                        <textarea class="form-control" id="description" wire:model="description"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Schließen</button>
                <button type="button" class="btn btn-primary" wire:click="saveVirtualTour">Übernehmen</button>
            </div>
        </div>
    </div>
</div>
