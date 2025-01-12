
        <!-- Main content start -->
        <div class="row">
            <!-- Formular und Liste -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>{{ $editMode ? 'Eintrag bearbeiten' : 'Neuen Eintrag hinzufügen' }}</h5>
                    </div>
                    <div class="card-body">
                        <!-- Formular für Zahlungen -->
                        <form wire:submit.prevent="saveEntry">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="tenant_id" class="form-label">Mieter:</label>
                                    <select wire:model="tenant_id" id="tenant_id" class="form-select">
                                        <option value="">Bitte auswählen...</option>
                                        @foreach($tenants as $tenant)
                                            <option value="{{ $tenant->id }}">{{ $tenant->first_name }} {{ $tenant->last_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tenant_id') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="rental_object_id" class="form-label">Mietobjekt:</label>
                                    <select wire:model="rental_object_id" id="rental_object_id" class="form-select">
                                        <option value="">Bitte auswählen...</option>
                                        @foreach($rentalObjects as $object)
                                            <option value="{{ $object->id }}">{{ $object->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('rental_object_id') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="type" class="form-label">Typ:</label>
                                    <select wire:model="type" id="type" class="form-select">
                                        <option value="">Bitte wählen...</option>
                                        <option value="refund">Erstattung</option>
                                        <option value="payment">Zahlung</option>
                                    </select>
                                    @error('type') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="amount" class="form-label">Betrag (€):</label>
                                    <input type="number" wire:model="amount" id="amount" class="form-control" step="0.01">
                                    @error('amount') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="payment_date" class="form-label">Datum:</label>
                                    <input type="date" wire:model="payment_date" id="payment_date" class="form-control">
                                    @error('payment_date') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="note" class="form-label">Notiz:</label>
                                    <textarea wire:model="note" id="note" class="form-control" rows="3"></textarea>
                                    @error('note') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ $editMode ? 'Aktualisieren' : 'Speichern' }}
                                </button>
                                <button type="button" wire:click="resetFields" class="btn btn-secondary">Zurücksetzen</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h5>Liste der Einträge</h5>
                    </div>
                    <div class="card-body">
                        <!-- Tabelle der Einträge -->
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Mieter</th>
                                        <th>Mietobjekt</th>
                                        <th>Typ</th>
                                        <th>Betrag (€)</th>
                                        <th>Datum</th>
                                        <th>Notiz</th>
                                        <th>Aktionen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($entries as $entry)
                                        <tr>
                                            <td>{{ $entry->tenant->first_name }}</td>
                                            <td>{{ $entry->rentalObject->name }}</td>
                                            <td>
                                                <span class="badge {{ $entry->type === 'refund' ? 'bg-danger' : 'bg-success' }}">
                                                    {{ ucfirst($entry->type) }}
                                                </span>
                                            </td>
                                            <td>{{ number_format($entry->amount, 2, ',', '.') }}</td>
                                            <td>{{ $entry->payment_date }}</td>
                                            <td>{{ $entry->note }}</td>
                                            <td>
                                                <button wire:click="editEntry({{ $entry->id }})" class="btn btn-warning btn-sm">
                                                    Bearbeiten
                                                </button>
                                                <button wire:click="deleteEntry({{ $entry->id }})"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Eintrag löschen?')">
                                                    Löschen
                                                </button>
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
        <!-- Main content end -->
