<div class="main-content">
    <div class="main-content-inner">
        <div class="button-show-hide show-mb">
            <span class="body-1">Show Dashboard</span>
        </div>

        <h2 class="mb-4">Nebenkostenzahlungen verwalten</h2>

        <!-- Fehlerbenachrichtigung -->
        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Formular für Zahlungen -->
        <div class="widget-box-2 mess-box p-4 mb-4">
            <h5 class="title mb-3">{{ $editMode ? 'Zahlung bearbeiten' : 'Neue Zahlung hinzufügen' }}</h5>
            <form wire:submit.prevent="savePayment" class="form-layout mt-3">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="tenant_id" class="form-label">Mieter:</label>
                        <select wire:model.change="tenant_id" id="tenant_id" class="form-select" required>
                            <option value="">Wählen...</option>
                            @foreach($tenants as $tenant)
                                <option value="{{ $tenant->id }}">{{ $tenant->first_name }} {{ $tenant->last_name }}</option>
                            @endforeach
                        </select>
                        @error('tenant_id') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="rental_object_id" class="form-label">Mietobjekt:</label>
                        <select wire:model="rental_object_id" id="rental_object_id" class="form-select" required>
                            <option value="">Wählen...</option>
                            @foreach($rentalObjects as $object)
                                <option value="{{ $object->id }}">{{ $object->name }}, {{ $object->street }}, {{ $object->city }}</option>
                            @endforeach
                        </select>
                        @error('rental_object_id') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="year" class="form-label">Jahr:</label>
                        <select wire:model.change="year" id="year" class="form-select" required>
                            <option value="">Jahr auswählen...</option>
                            @foreach($availableYears as $yr)
                                <option value="{{ $yr }}">{{ $yr }}</option>
                            @endforeach
                        </select>
                        @error('year') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="month" class="form-label">Monat:</label>
                        <select wire:model="month" id="month" class="form-select" required>
                            <option value="">Monat auswählen...</option>
                            @foreach($availableMonths as $mo)
                                <option value="{{ $mo }}">{{ DateTime::createFromFormat('!m', $mo)->format('F') }}</option>
                            @endforeach
                        </select>
                        @error('month') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
<hr>
                    <div class="col-md-12 mb-3">
                        <label for="amount" class="form-label">Betrag (€):</label>
                        <input type="number" step="0.01" wire:model="amount" id="amount" class="form-control" required>
                        @error('amount') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="payment_date" class="form-label">Zahlungsdatum:</label>
                    <input type="date" wire:model="payment_date" id="payment_date" class="form-control" required>
                    @error('payment_date') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                    <button type="submit" class="btn btn-primary">
                        {{ $editMode ? 'Zahlung aktualisieren' : 'Zahlung hinzufügen' }}
                    </button>
                    <button type="button" wire:click="resetFields" class="btn btn-secondary">Zurücksetzen</button>
                </div>
            </form>
        </div>




        <!-- Tabelle der Zahlungen -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>@autotranslate("Zahlungsliste", app()->getLocale())</h5>
                    <p>Using the small table need to add <code> .table-sm </code> class to table tag
                    </p>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover table-striped align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Mieter</th>
                            <th>Mietobjekt</th>
                            <th>Jahr</th>
                            <th>Monat</th>
                            <th>Betrag (€)</th>
                            <th>Zahlungsdatum</th> <!-- Neues Feld -->
                            <th>Aktionen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payments as $payment)
                            <tr>
                                <td>{{ $payment->tenant->first_name }} {{ $payment->tenant->last_name }}</td>
                                <td>{{ $payment->rentalObject->name }}, {{ $payment->rentalObject->city }}</td>
                                <td>{{ $payment->year }}</td>
                                <td>{{ DateTime::createFromFormat('!m', $payment->month)->format('F') }}</td>
                                <td>{{ number_format($payment->amount, 2, ',', '.') }} €</td>
                                <td>{{ $payment->payment_date }}</td> <!-- Neues Feld -->
                                <td>
                                    <button wire:click="editPayment({{ $payment->id }})" class="btn btn-sm btn-warning">Bearbeiten</button>
                                    <button wire:click="deletePayment({{ $payment->id }})" class="btn btn-sm btn-danger" onclick="return confirm('Sind Sie sicher?')">Löschen</button>
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
</div>
