<div>
    <form wire:submit.prevent="save">
        <div class="form-group">
            <label>Titel</label>
            <input type="text" wire:model="property.title" class="form-control">
            @error('property.title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group mt-3">
            <label>Adresse</label>
            <input type="text" wire:model="property.street" class="form-control">
            @error('property.street') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-success mt-3">Speichern</button>
    </form>
</div>
