<div class="container mt-5">
    <h2 class="mb-4">Nebenkostenzahlungen verwalten</h2>



    @if (session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form wire:submit.prevent="savePayment" class="mb-4">
        <div class="mb-3">
            <label for="tenant_id" class="form-label">Mieter:</label>
            <select wire:model.change="tenant_id" id="tenant_id" class="form-select" required>
                <option value="">Wählen...</option>
                @foreach($tenants as $tenant)
                    <option value="{{ $tenant->id }}">{{ $tenant->first_name }} {{ $tenant->last_name }}</option>
                @endforeach
            </select>
            @error('tenant_id') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="rental_object_id" class="form-label">Mietobjekt:</label>
            <select wire:model.change="rental_object_id" id="rental_object_id" class="form-select" required>
                <option value="">Wählen...</option>
                @foreach($rentalObjects as $object)
                    <option value="{{ $object->id }}">{{ $object->name }}, {{ $object->street }}, {{ $object->city }}</option>
                @endforeach
            </select>
            @error('rental_object_id') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Jahr:</label>
            <select wire:model="year" id="year" class="form-select" required>
                <option value="">Jahr auswählen...</option>
                @foreach($availableYears as $yr)
                    <option value="{{ $yr }}">{{ $yr }}</option>
                @endforeach
            </select>
            @error('year') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="month" class="form-label">Monat:</label>
            <select wire:model="month" id="month" class="form-select" required>
                <option value="">Monat auswählen...</option>
                @foreach($availableMonths as $mo)
                    <option value="{{ $mo }}">{{ DateTime::createFromFormat('!m', $mo)->format('F') }}</option>
                @endforeach
            </select>
            @error('month') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Betrag (€):</label>
            <input type="number" step="0.01" wire:model="amount" id="amount" class="form-control" required>
            @error('amount') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">{{ $editMode ? 'Zahlung aktualisieren' : 'Zahlung hinzufügen' }}</button>
        @if ($editMode)
            <button type="button" wire:click="resetFields" class="btn btn-secondary">Abbrechen</button>
        @endif
    </form>

    <button wire:click="sortByTenant" class="btn btn-secondary mb-3">
        Nach Mieter sortieren
    </button>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Mieter</th>
                <th>Mietobjekt</th>
                <th>Jahr</th>
                <th>Monat</th>
                <th>Betrag (€)</th>
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
                    <td>
                        <button wire:click="editPayment({{ $payment->id }})" class="btn btn-sm btn-warning">Bearbeiten</button>
                        <button wire:click="deletePayment({{ $payment->id }})" class="btn btn-sm btn-danger" onclick="return confirm('Sind Sie sicher?')">Löschen</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
