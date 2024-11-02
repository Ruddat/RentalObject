<!-- resources/views/livewire/billing-generation.blade.php -->
<div class="container mt-5">
    <h2>Neue Abrechnung erstellen</h2>

    <!-- Auswahl des Abrechnungskopfs -->
    <div class="mb-3">
        <label for="billing_header" class="form-label">Abrechnungskopf auswählen:</label>
        <select wire:model="selectedHeaderId" id="billing_header" class="form-select">
            <option value="">Wählen...</option>
            @foreach($billingHeaders as $header)
                <option value="{{ $header->id }}">
                    {{ $header->creator_name }} - {{ $header->city }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Auswahl des Mietobjekts -->
    <div class="mb-3">
        <label for="rental_object" class="form-label">Mietobjekt auswählen:</label>
        <select wire:model="selectedRentalObjectId" id="rental_object" class="form-select">
            <option value="">Wählen...</option>
            @foreach($rentalObjects as $object)
                <option value="{{ $object->id }}">
                    {{ $object->name }} - {{ $object->city }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Auswahl des Mieters -->
    <div class="mb-3">
        <label for="tenant" class="form-label">Mieter auswählen:</label>
        <select wire:model="selectedTenantId" id="tenant" class="form-select">
            <option value="">Wählen...</option>
            @foreach($tenants as $tenant)
                <option value="{{ $tenant->id }}">
                    {{ $tenant->first_name }} {{ $tenant->last_name }} - {{ $tenant->city }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Abrechnungszeitraum -->
    <div class="mb-3">
        <label for="billing_period" class="form-label">Abrechnungszeitraum:</label>
        <input type="text" wire:model="billingPeriod" id="billing_period" class="form-control" placeholder="z.B. Januar 2023 - Dezember 2023">
    </div>

    <!-- PDF generieren und speichern -->
    <button wire:click="generateBilling" class="btn btn-primary">Abrechnung als PDF erstellen</button>


    <!-- PDF-Vorschau oder gespeicherte Abrechnungen -->
    <h3 class="mt-5">Gespeicherte Abrechnungen</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Ersteller</th>
                <th>Mieter</th>
                <th>Zeitraum</th>
                <th>PDF</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($savedBillings as $billing)
                <tr>
                    <td>{{ $billing->billingHeader->creator_name }}</td>
                    <td>{{ $billing->tenant->first_name }} {{ $billing->tenant->last_name }}</td>
                    <td>{{ $billing->billing_period }}</td>
                    <td><a href="{{ $billing->pdf_path }}" target="_blank">PDF anzeigen</a></td>
                    <td>
                        <button wire:click="editBilling({{ $billing->id }})" class="btn btn-sm btn-info">Bearbeiten</button>
                        <button wire:click="deleteBilling({{ $billing->id }})" class="btn btn-sm btn-danger">Löschen</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
