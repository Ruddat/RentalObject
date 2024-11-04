<div class="main-content">
    <div class="main-content-inner">
        <div class="button-show-hide show-mb">
            <span class="body-1">Show Dashboard</span>
        </div>
        <!-- Toggle Button für Formular -->
        <div class="mb-3">
            <button wire:click="toggleForm" class="btn btn-primary">
                {{ $showForm ? 'Formular ausblenden' : 'Neues Objekt hinzufügen' }}
            </button>
        </div>

        <!-- Widget Box für die Form -->
        @if ($showForm)
            <div class="widget-box-2 mess-box mb-4 p-4">
                <h5 class="title mb-3">{{ $editMode ? 'Mietobjekt bearbeiten' : 'Neues Mietobjekt hinzufügen' }}</h5>
                <form wire:submit.prevent="{{ $editMode ? 'updateRentalObject' : 'addRentalObject' }}" class="form-layout">
                    <div class="row g-3">
                        <!-- Erste Zeile -->
                        <div class="col-md-6">
                            <label for="name" class="form-label">Objektname:</label>
                            <input type="text" wire:model="name" id="name" class="form-control">
                            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="street" class="form-label">Straße:</label>
                            <input type="text" wire:model="street" id="street" class="form-control" required>
                            @error('street') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <!-- Zweite Zeile -->
                        <div class="col-md-3">
                            <label for="house_number" class="form-label">Hausnummer:</label>
                            <input type="text" wire:model="house_number" id="house_number" class="form-control" required>
                            @error('house_number') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="floor" class="form-label">Etage:</label>
                            <input type="text" wire:model="floor" id="floor" class="form-control">
                            @error('floor') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="zip_code" class="form-label">PLZ:</label>
                            <input type="text" wire:model="zip_code" id="zip_code" class="form-control" required>
                            @error('zip_code') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="city" class="form-label">Stadt:</label>
                            <input type="text" wire:model="city" id="city" class="form-control" required>
                            @error('city') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <!-- Dritte Zeile -->
                        <div class="col-md-4">
                            <label for="country" class="form-label">Land:</label>
                            <input type="text" wire:model="country" id="country" class="form-control" required>
                            @error('country') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="object_type" class="form-label">Objekttyp:</label>
                            <select wire:model="object_type" id="object_type" class="form-select" required>
                                <option value="">Wählen...</option>
                                <option value="Gewerbe">Gewerbe</option>
                                <option value="Privat">Privat</option>
                                <option value="Garage">Garage</option>
                            </select>
                            @error('object_type') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="max_units" class="form-label">Max. Einheiten/Mieter:</label>
                            <input type="number" wire:model="max_units" id="max_units" class="form-control">
                            @error('max_units') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <!-- Beschreibung -->
                        <div class="col-12">
                            <label for="description" class="form-label">Beschreibung:</label>
                            <textarea wire:model="description" id="description" class="form-control"></textarea>
                            @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-4 d-flex justify-content-end gap-2">
                        <button type="submit" class="btn btn-primary">
                            {{ $editMode ? 'Mietobjekt aktualisieren' : 'Mietobjekt hinzufügen' }}
                        </button>
                        @if ($editMode)
                            <button type="button" wire:click="resetFields" class="btn btn-secondary">Abbrechen</button>
                        @endif
                    </div>
                </form>
            </div>
        @endif

        <!-- Tabelle der Mietobjekte -->
        <div class="widget-box-2 mess-box">
            <h5 class="title">Mietobjekte Liste</h5>
            <div class="table-responsive">
                <table class="table table-striped mt-3">
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
        </div>

        <!-- Footer -->
        <div class="footer-dashboard footer-dashboard-2 mt-4">
            <p>Copyright © 2024 Home Lengo</p>
        </div>
    </div>
</div>
