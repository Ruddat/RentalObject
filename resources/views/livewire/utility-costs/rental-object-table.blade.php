<div class="container mt-5">
    <h2 class="mb-4">Mietobjekte verwalten</h2>




    <!-- Toggle Form Button -->
    <button wire:click="toggleForm" class="btn btn-primary mb-3">
        {{ $showForm ? 'Formular ausblenden' : 'Neues Objekt hinzufügen' }}
    </button>




<!-- Formular zur Eingabe neuer Mietobjekte oder zum Bearbeiten -->
    @if ($showForm)
        <form wire:submit.prevent="{{ $editMode ? 'updateRentalObject' : 'addRentalObject' }}" class="mb-4">

        <div class="mb-3">
            <label for="name" class="form-label">Objektname:</label>
            <input type="text" wire:model="name" id="name" class="form-control">
            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="street" class="form-label">Straße:</label>
            <input type="text" wire:model="street" id="street" class="form-control" required>
            @error('street') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="house_number" class="form-label">Hausnummer:</label>
            <input type="text" wire:model="house_number" id="house_number" class="form-control" required>
            @error('house_number') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="floor" class="form-label">Etage:</label>
            <input type="text" wire:model="floor" id="floor" class="form-control">
            @error('floor') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="zip_code" class="form-label">Postleitzahl:</label>
            <input type="text" wire:model="zip_code" id="zip_code" class="form-control" required>
            @error('zip_code') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">Stadt:</label>
            <input type="text" wire:model="city" id="city" class="form-control" required>
            @error('city') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="country" class="form-label">Land:</label>
            <input type="text" wire:model="country" id="country" class="form-control" required>
            @error('country') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="object_type" class="form-label">Objekttyp:</label>
            <select wire:model="object_type" id="object_type" class="form-select" required>
                <option value="">Wählen...</option>
                <option value="Gewerbe">Gewerbe</option>
                <option value="Privat">Privat</option>
                <option value="Garage">Garage</option>
            </select>
            @error('object_type') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="max_units" class="form-label">Max. Einheiten/Mieter:</label>
            <input type="number" wire:model="max_units" id="max_units" class="form-control">
            @error('max_units') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Beschreibung:</label>
            <textarea wire:model="description" id="description" class="form-control"></textarea>
            @error('description') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            {{ $editMode ? 'Mietobjekt aktualisieren' : 'Mietobjekt hinzufügen' }}
        </button>
        @if ($editMode)
            <button type="button" wire:click="resetFields" class="btn btn-secondary">Abbrechen</button>
        @endif
    </form>
@endif

    <!-- Tabelle zur Anzeige der Mietobjekte mit Bearbeiten- und Löschen-Optionen -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Objektname</th>
                <th>Straße</th>
                <th>Hausnummer</th>
                <th>Etage</th>
                <th>PLZ</th>
                <th>Stadt</th>
                <th>Land</th>
                <th>Objekttyp</th>
                <th>Max. Einheiten</th>
                <th>Beschreibung</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rentalObjects as $object)
                <tr>
                    <td>{{ $object->name }}</td>
                    <td>{{ $object->street }}</td>
                    <td>{{ $object->house_number }}</td>
                    <td>{{ $object->floor }}</td>
                    <td>{{ $object->zip_code }}</td>
                    <td>{{ $object->city }}</td>
                    <td>{{ $object->country }}</td>
                    <td>{{ $object->object_type }}</td>
                    <td>{{ $object->max_units }}</td>
                    <td>{{ $object->description }}</td>
                    <td>
                        <button wire:click="editRentalObject({{ $object->id }})" class="btn btn-sm btn-warning">Bearbeiten</button>
                        <button wire:click="deleteRentalObject({{ $object->id }})" class="btn btn-sm btn-danger" onclick="return confirm('Möchten Sie dieses Mietobjekt wirklich löschen?')">Löschen</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
