<div class="main-content">
    <div class="main-content-inner">
        <div class="button-show-hide show-mb">
            <span class="body-1">Show Dashboard</span>
        </div>
        <!-- Utility Cost Form Section -->
        <div class="widget-box-2">
            <h5 class="title">Nebenkosten erfassen</h5>
            @error('error') <div class="text-danger">{{ $message }}</div> @enderror
            <form wire:submit.prevent="{{ $editMode ? 'updateRecordedCost' : 'addRecordedCost' }}" class="form-box">
                <div class="mb-3">
                    <label for="rental_object_id" class="form-label">Mietobjekt:</label>
                    <select wire:model="rental_object_id" id="rental_object_id" class="form-select" required>
                        <option value="">Wählen...</option>
                        @foreach($rentalObjects as $object)
                            <option value="{{ $object->id }}">{{ $object->street }}, {{ $object->house_number }}, {{ $object->city }}</option>
                        @endforeach
                    </select>
                    @error('rental_object_id') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label">Jahr:</label>
                    <select wire:model.change="year" id="year" class="form-select" required>
                        @for ($i = date('Y'); $i >= date('Y') - 20; $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    @error('year') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="utility_cost_id" class="form-label">Nebenkostenposition:</label>
                    <select wire:model="utility_cost_id" id="utility_cost_id" class="form-select">
                        <option value="">Wählen...</option>
                        @foreach($utilityCosts as $cost)
                            <option value="{{ $cost->id }}">{{ $cost->name }}</option>
                        @endforeach
                    </select>
                    @error('utility_cost_id') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="custom_name" class="form-label">Benutzerdefinierter Name (optional):</label>
                    <input type="text" wire:model="custom_name" id="custom_name" class="form-control" placeholder="Zusätzliche Position">
                    @error('custom_name') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="amount" class="form-label">Betrag (€):</label>
                    <input type="number" step="0.01" wire:model="amount" id="amount" class="form-control" required>
                    @error('amount') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="distribution_key" class="form-label">Verteilerschlüssel:</label>
                    <select wire:model="distribution_key" id="distribution_key" class="form-select">
                        <option value="units">Nach Einheiten</option>
                        <option value="people">Nach Personen</option>
                        <option value="area">Wohnfläche</option>
                        <option value="consumption">Nach Verbrauch</option>
                    </select>
                    @error('distribution_key') <div class="text-danger">{{ $message }}</div> @enderror
                </div>




                <!-- Action Buttons -->
                <div class="d-flex gap-2 justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary">
                        {{ $editMode ? 'Position aktualisieren' : 'Position hinzufügen' }}
                    </button>
                    @if ($editMode)
                        <button type="button" wire:click="resetFields" class="btn btn-secondary">Abbrechen</button>
                    @endif
                </div>
            </form>
        </div>

        <!-- Recorded Utility Costs Table Section -->
        <div class="widget-box-2 mt-4">
            <h5 class="title">Erfasste Nebenkosten für {{ $year }}</h5>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name der Position</th>
                            <th>Beschreibung</th>
                            <th>Verteilerschlüssel</th>
                            <th>Betrag (€)</th>
                            <th>Aktionen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recordedCosts as $cost)
                            <tr>
                                <td>{{ $cost->utilityCost ? $cost->utilityCost->name : $cost->custom_name }}</td>
                                <td>{{ $cost->utilityCost ? $cost->utilityCost->description : '-' }}</td>
                                <td>{{ $cost->distribution_key }}</td>
                                <td>{{ number_format($cost->amount, 2, ',', '.') }}</td>
                                <td>
                                    <button wire:click="editRecordedCost({{ $cost->id }})" class="btn btn-sm btn-warning">Bearbeiten</button>
                                    <button wire:click="deleteRecordedCost({{ $cost->id }})" class="btn btn-sm btn-danger" onclick="return confirm('Möchten Sie diese Position wirklich löschen?')">Löschen</button>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="4" class="text-end"><strong>Gesamtkosten:</strong></td>
                            <td><strong>{{ number_format($totalCosts, 2, ',', '.') }} €</strong></td>
                        </tr>
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
