<div class="main-content">
    <div class="main-content-inner">

        <!-- Toggle Button for Mobile View -->
        <div class="button-show-hide show-mb">
            <span class="body-1">Show Dashboard</span>
        </div>

        <!-- Tenant Form Section -->
        <div class="widget-box-2">
            <h5 class="title">Mieter Formular</h5>
            <form wire:submit.prevent="{{ $editMode ? 'updateTenant' : 'addTenant' }}" class="form-box">
                <div class="row">
                    <!-- Left Column: General Information -->
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
                            <label for="street" class="form-label">Straße:</label>
                            <input type="text" wire:model="street" id="street" class="form-control">
                            @error('street') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="house_number" class="form-label">Hausnummer:</label>
                            <input type="text" wire:model="house_number" id="house_number" class="form-control">
                            @error('house_number') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="zip_code" class="form-label">Postleitzahl:</label>
                            <input type="text" wire:model="zip_code" id="zip_code" class="form-control">
                            @error('zip_code') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="city" class="form-label">Stadt:</label>
                            <input type="text" wire:model="city" id="city" class="form-control">
                            @error('city') <div class="text-danger">{{ $message }}</div> @enderror
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

                    <!-- Right Column: Rental Object and Billing -->
            <!-- Mietobjekt und Abrechnung -->
            <div class="col-lg-6">
                <h6>Mietobjekt und Abrechnung</h6>
                <div class="mb-3">
                    <label for="rental_object_id" class="form-label">Mietobjekt:</label>
                    <select wire:model="rental_object_id" id="rental_object_id" class="form-select" required>
                        <option value="">Wählen...</option>
                        @foreach($rentalObjects as $object)
                            <option value="{{ $object->id }}">
                                {{ $object->name }}, {{ $object->street }}, {{ $object->house_number }}, {{ $object->city }}
                            </option>
                        @endforeach
                    </select>
                    @error('rental_object_id') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <!-- Abrechnungstyp Auswahl und Pauschaloption -->
                <div class="mb-3">
                    <label for="billing_type" class="form-label">Abrechnungstyp:</label>
                    <select wire:model.change="billing_type" id="billing_type" class="form-select">
                        <option value="units">Einheiten</option>
                        <option value="people">Personen</option>
                        <option value="flat_rate">Nebenkostenpauschale</option>
                    </select>
                </div>

                <!-- Einheit oder Personenanzahl basierend auf Abrechnungstyp und Pauschale -->
                <div class="mb-3">
                    <label for="unit_count" class="form-label">Anzahl der Einheiten:</label>
                    <input type="number" wire:model="unit_count" id="unit_count" class="form-control"
                           {{ $billing_type === 'units' ? '' : 'disabled' }}>
                </div>

                <div class="mb-3">
                    <label for="person_count" class="form-label">Anzahl der Personen:</label>
                    <input type="number" wire:model="person_count" id="person_count" class="form-control"
                           {{ $billing_type === 'people' ? '' : 'disabled' }}>
                </div>
            </div>
        </div>

        <hr>

                <div class="row">
                    <!-- Left Column: Rental Duration and Units -->
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
                            <label for="square_meters" class="form-label">Quadratmeter:</label>
                            <input type="number" step="0.01" wire:model="square_meters" id="square_meters" class="form-control">
                            @error('square_meters') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <!-- Right Column: Meter Readings -->
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

                <!-- Action Buttons -->
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

        <!-- Tenant List Section -->
        <div class="widget-box-2 mt-4">
            <h5 class="title">Mieterübersicht</h5>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Vorname</th>
                            <th>Nachname</th>
                            <th>Telefon</th>
                            <th>E-Mail</th>
                            <th>Adresse des Mietobjekts</th>
                            <th>Quadratmeter</th>
                            <th>Gas (m³)</th>
                            <th>Strom (kWh)</th>
                            <th>Wasser (m³)</th>
                            <th>Warmwasser (m³)</th>
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
                                <td>{{ $tenant->square_meters ?? 'N/A' }} m²</td>
                                <td>{{ $tenant->gas_meter ?? 'N/A' }} m³</td>
                                <td>{{ $tenant->electricity_meter ?? 'N/A' }} kWh</td>
                                <td>{{ $tenant->water_meter ?? 'N/A' }} m³</td>
                                <td>{{ $tenant->hot_water_meter ?? 'N/A' }} m³</td>
                                <td>
                                    {{ $tenant->start_date ? \Carbon\Carbon::parse($tenant->start_date)->format('d.m.Y') : '-' }} -
                                    {{ $tenant->end_date ? \Carbon\Carbon::parse($tenant->end_date)->format('d.m.Y') : 'Unbefristet' }}
                                </td>
                                <td>
                                    @if($tenant->billing_type === 'units')
                                        Einheiten
                                    @elseif($tenant->billing_type === 'people')
                                        Personen
                                    @elseif($tenant->flat_rate)
                                        Pauschale
                                    @endif
                                </td>
                                <td>
                                    @if(!$tenant->flat_rate)
                                        {{ $tenant->billing_type === 'units' ? $tenant->unit_count : $tenant->person_count }}
                                    @else
                                        <em class="text-muted">-</em>
                                    @endif
                                </td>
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


    <!-- Footer Section -->
    <div class="footer-dashboard footer-dashboard-2">
        <p>Copyright © 2024 Home Lengo</p>
    </div>
</div>
