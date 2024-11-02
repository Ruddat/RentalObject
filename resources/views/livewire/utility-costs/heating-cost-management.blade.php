<div class="container mt-5">
    <h2 class="mb-4">Heizkostenverwaltung</h2>

    <form wire:submit.prevent="saveHeatingCost">
        <div class="mb-3">
            <label for="year" class="form-label">Jahr:</label>
            <select wire:model="year" id="year" class="form-select" required>
                <option value="">Jahr auswählen...</option>
                @for ($i = date('Y') + 1; $i >= 2000; $i--)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            @error('year') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="rental_object_id" class="form-label">Mietobjekt:</label>
            <select wire:model="rental_object_id" id="rental_object_id" class="form-select" required>
                <option value="">Wählen...</option>
                @foreach($rentalObjects as $object)
                    <option value="{{ $object->id }}">{{ $object->name }}</option>
                @endforeach
            </select>
            @error('rental_object_id') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="heating_type" class="form-label">Heiztyp:</label>
            <select wire:model.change="heating_type" id="heating_type" class="form-select" required>
                <option value="gas">Gas</option>
                <option value="oil">Öl</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="price_per_unit" class="form-label">Preis pro Einheit (z.B. €/m³ oder €/Liter):</label>
            <input type="number" step="0.01" wire:model="price_per_unit" id="price_per_unit" class="form-control" required>
            @error('price_per_unit') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        @if ($heating_type === 'gas')
            <div class="mb-3">
                <label for="initial_reading" class="form-label">Anfangsstand (Gaszähler):</label>
                <input type="number" wire:model="initial_reading" id="initial_reading" class="form-control">
                @error('initial_reading') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="final_reading" class="form-label">Endstand (Gaszähler):</label>
                <input type="number" wire:model="final_reading" id="final_reading" class="form-control">
                @error('final_reading') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        @endif

        @if ($heating_type === 'oil')
            <div class="mb-3">
                <label for="total_oil_used" class="form-label">Verbrauch Öl (in Litern):</label>
                <input type="number" step="0.01" wire:model="total_oil_used" id="total_oil_used" class="form-control">
                @error('total_oil_used') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="warm_water_percentage" class="form-label">Warmwasseranteil (%):</label>
                <input type="number" step="0.01" wire:model="warm_water_percentage" id="warm_water_percentage" class="form-control">
                @error('warm_water_percentage') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        @endif

        <button type="submit" class="btn btn-primary">
            {{ $editingCostId ? 'Heizkosten aktualisieren' : 'Heizkosten speichern' }}
        </button>
    </form>

    <!-- Tabelle zur Anzeige der gespeicherten Heizkosten -->
    <h3 class="mt-4">Erfasste Heizkosten</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Jahr</th>
                <th>Mietobjekt</th>
                <th>Heiztyp</th>
                <th>Preis pro Einheit</th>
                <th>Verbrauch</th>
                <th>Gesamtkosten (€)</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($heatingCosts as $cost)
                <tr>
                    <td>{{ $cost->year }}</td>
                    <td>{{ $cost->rentalObject->name }}</td>
                    <td>{{ $cost->heating_type === 'gas' ? 'Gas' : 'Öl' }}</td>
                    <td>{{ number_format($cost->price_per_unit, 2) }} €</td>
                    <td>
                        @if($cost->heating_type === 'gas')
                            {{ $cost->final_reading - $cost->initial_reading }} m³
                        @else
                            {{ $cost->total_oil_used }} Liter
                        @endif
                    </td>
                    <td>{{ number_format($cost->calculateTotalCost(), 2) }} €</td>
                    <td>
                        <button wire:click="editHeatingCost({{ $cost->id }})" class="btn btn-sm btn-primary">Bearbeiten</button>
                        <button wire:click="deleteHeatingCost({{ $cost->id }})" class="btn btn-sm btn-danger">Löschen</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


        <!-- Bestätigungsdialog für den Löschvorgang -->
        @if($deletingCostId)
        <div class="modal" tabindex="-1" role="dialog" style="display: block;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Löschen bestätigen</h5>
                        <button wire:click="cancelDelete" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Sind Sie sicher, dass Sie diese Heizkosten löschen möchten?</p>
                    </div>
                    <div class="modal-footer">
                        <button wire:click="confirmDelete" type="button" class="btn btn-danger">Löschen</button>
                        <button wire:click="cancelDelete" type="button" class="btn btn-secondary">Abbrechen</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif

</div>
