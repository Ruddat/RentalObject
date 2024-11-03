<div class="container mt-5">
    <!-- Page Header -->
    <h2 class="mb-4">Mieter verwalten</h2>

    <!-- Formular zur Eingabe neuer Mieter oder zum Bearbeiten -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Mieter Formular</h5>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="{{ $editMode ? 'updateTenant' : 'addTenant' }}" class="mb-5">
                        <div class="row">
                            <!-- Linke Spalte -->
                            <div class="col-lg-6">
                                <h6>Allgemeine Informationen</h6>
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">Vorname:</label>
                                    <input type="text" wire:model="first_name" id="first_name" class="form-control" required>
                                    @error('first_name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Nachname:</label>
                                    <input type="text" wire:model="last_name" id="last_name" class="form-control" required>
                                    @error('last_name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Telefon:</label>
                                    <input type="text" wire:model="phone" id="phone" class="form-control">
                                    @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-Mail:</label>
                                    <input type="email" wire:model="email" id="email" class="form-control">
                                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <!-- Rechte Spalte -->
                            <div class="col-lg-6">
                                <h6>Mietobjekt und Abrechnung</h6>
                                <div class="mb-3">
                                    <label for="rental_object_id" class="form-label">Mietobjekt:</label>
                                    <select wire:model="rental_object_id" id="rental_object_id" class="form-select">
                                        <option value="">Wählen...</option>
                                        @foreach(App\Models\RentalObject::all() as $object)
                                            <option value="{{ $object->id }}">
                                                {{ $object->name }}, {{ $object->street }}, {{ $object->house_number }}, {{ $object->city }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('rental_object_id') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="billing_type" class="form-label">Abrechnungstyp:</label>
                                    <select wire:model="billing_type" id="billing_type" class="form-select">
                                        <option value="units">Einheiten</option>
                                        <option value="people">Personen</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <!-- Linke Spalte -->
                            <div class="col-lg-6">
                                <h6>Mietdauer und Einheiten</h6>
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Mietbeginn:</label>
                                    <input type="date" wire:model="start_date" id="start_date" class="form-control" required>
                                    @error('start_date') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">Mietende (optional):</label>
                                    <input type="date" wire:model="end_date" id="end_date" class="form-control">
                                    @error('end_date') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="unit_count" class="form-label">Anzahl der Einheiten:</label>
                                    <input type="number" wire:model="unit_count" id="unit_count" class="form-control" {{ $billing_type === 'units' ? '' : 'disabled' }}>
                                </div>
                                <div class="mb-3">
                                    <label for="person_count" class="form-label">Anzahl der Personen:</label>
                                    <input type="number" wire:model="person_count" id="person_count" class="form-control" {{ $billing_type === 'people' ? '' : 'disabled' }}>
                                </div>
                            </div>

                            <!-- Rechte Spalte -->
                            <div class="col-lg-6">
                                <h6>Zählerstände</h6>
                                <div class="mb-3">
                                    <label for="gas_meter" class="form-label">Zählerstand Gas:</label>
                                    <input type="number" step="0.01" wire:model="gas_meter" id="gas_meter" class="form-control">
                                    @error('gas_meter') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="electricity_meter" class="form-label">Zählerstand Strom:</label>
                                    <input type="number" step="0.01" wire:model="electricity_meter" id="electricity_meter" class="form-control">
                                    @error('electricity_meter') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="water_meter" class="form-label">Zählerstand Wasser:</label>
                                    <input type="number" step="0.01" wire:model="water_meter" id="water_meter" class="form-control">
                                    @error('water_meter') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="hot_water_meter" class="form-label">Zählerstand Warmwasser:</label>
                                    <input type="number" step="0.01" wire:model="hot_water_meter" id="hot_water_meter" class="form-control">
                                    @error('hot_water_meter') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary">
                                {{ $editMode ? 'Mieter aktualisieren' : 'Mieter hinzufügen' }}
                            </button>
                            @if ($editMode)
                                <button type="button" wire:click="resetFields" class="btn btn-secondary ms-2">Abbrechen</button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabelle zur Anzeige der Mieterinformationen -->
    <div class="row mt-5">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h5 class="card-title">Mieterübersicht</h5>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Vorname</th>
                                <th>Nachname</th>
                                <th>Telefon</th>
                                <th>E-Mail</th>
                                <th>Adresse des Mietobjekts</th>
                                <th>Mietzeitraum</th>
                                <th>Abrechnungstyp</th>
                                <th>Anzahl (Einheiten/Personen)</th>
                                <th>Aktionen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tenants as $tenant)
                                <tr>
                                    <td>{{ $tenant->first_name }}</td>
                                    <td>{{ $tenant->last_name }}</td>
                                    <td>{{ $tenant->phone }}</td>
                                    <td>{{ $tenant->email }}</td>
                                    <td>
                                        @if($tenant->rentalObject)
                                            {{ $tenant->rentalObject->name }}, {{ $tenant->rentalObject->street }}
                                            {{ $tenant->rentalObject->house_number }}, {{ $tenant->rentalObject->zip_code }}
                                            {{ $tenant->rentalObject->city }}
                                        @else
                                            <em class="text-muted">Nicht zugewiesen</em>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $tenant->start_date ? \Carbon\Carbon::parse($tenant->start_date)->format('d.m.Y') : '-' }} -
                                        {{ $tenant->end_date ? \Carbon\Carbon::parse($tenant->end_date)->format('d.m.Y') : 'Unbefristet' }}
                                    </td>
                                    <td>{{ $tenant->billing_type === 'units' ? 'Einheiten' : 'Personen' }}</td>
                                    <td>{{ $tenant->billing_type === 'units' ? $tenant->unit_count : $tenant->person_count }}</td>
                                    <td>
                                        <button wire:click="editTenant({{ $tenant->id }})" class="btn btn-sm btn-warning">Bearbeiten</button>
                                        <button wire:click="deleteTenant({{ $tenant->id }})" class="btn btn-sm btn-danger" onclick="return confirm('Möchten Sie diesen Mieter wirklich löschen?')">Löschen</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>