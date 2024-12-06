<div>
    <button type="button" class="btn btn-primary" wire:click="$dispatch('openModal', {modalId: 'externalTourModal'})">
        360° Rundgang öffnen
    </button>

    <div class="modal fade" id="externalTourModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Externen Rundgang hinzufügen</h5>
                    <button type="button" class="btn-close" wire:click="$dispatch('closeModal', {modalId: 'externalTourModal'})" aria-label="Schließen"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="externalTourLink" class="form-label">Link</label>
                            <input type="url" id="externalTourLink" class="form-control" wire:model="externalTourLink">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="$dispatch('closeModal', {modalId: 'externalTourModal'})">Schließen</button>
                    <button type="button" class="btn btn-primary" wire:click="saveExternalTour">Speichern</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Modal öffnen
    window.addEventListener('openModal', (event) => {
        const modalId = event.detail.modalId;
        const modalElement = document.getElementById(modalId);

        if (modalElement) {
            modalElement.style.display = 'block'; // Modal sichtbar machen
            modalElement.classList.add('show'); // Bootstrap-Klassen hinzufügen
            modalElement.setAttribute('aria-hidden', 'false');
            document.body.classList.add('modal-open'); // Scrollen verhindern

            // Backdrop hinzufügen
            const backdrop = document.createElement('div');
            backdrop.className = 'modal-backdrop fade show';
            document.body.appendChild(backdrop);
        } else {
            console.error('Modal nicht gefunden:', modalId);
        }
    });

    // Modal schließen
    window.addEventListener('closeModal', (event) => {
        const modalId = event.detail.modalId;
        const modalElement = document.getElementById(modalId);

        if (modalElement) {
            modalElement.style.display = 'none'; // Modal verstecken
            modalElement.classList.remove('show'); // Bootstrap-Klassen entfernen
            modalElement.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('modal-open'); // Scrollen erlauben

            // Entferne Backdrop
            document.querySelectorAll('.modal-backdrop').forEach((backdrop) => backdrop.remove());
        }
    });
});

</script>
