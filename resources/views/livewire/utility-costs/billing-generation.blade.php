<div class="main-content">
    <div class="main-content-inner">
        <div class="button-show-hide show-mb">
            <span class="body-1">Show Dashboard</span>
        </div>
        <h2 class="mb-4">Neue Abrechnung erstellen</h2>

        <!-- Widget Box für das Erstellungsformular -->
        <div class="widget-box-2 mess-box p-4 mb-4">
            <h5 class="title">Abrechnungsdetails</h5>

            <form class="form-layout mt-3">
                <div class="row g-3">
                    <!-- Auswahl des Abrechnungskopfs -->
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <label for="billing_period" class="form-label">Abrechnungszeitraum:</label>
                        <input type="text" wire:model="billingPeriod" id="billing_period" class="form-control" placeholder="z.B. Januar 2023 - Dezember 2023">
                    </div>
                </div>

                <!-- PDF generieren und speichern -->
<!-- PDF generieren und speichern -->
<div class="d-flex justify-content-end mt-4">
    <button wire:click.prevent="generateBilling" class="btn btn-primary">Abrechnung als PDF erstellen</button>
</div>
            </form>
        </div>

<!-- Gespeicherte Abrechnungen -->
<div class="widget-box-2 mess-box">
    <h5 class="title">Gespeicherte Abrechnungen</h5>
    <div class="table-responsive mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Ersteller</th>
                    <th>Mieter</th>
                    <th>Zeitraum</th>
                    <th>PDF Seite 1</th>
                    <th>PDF Seite 2</th>
                    <th>Erstellungsdatum</th>
                    <th>Aktionen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($savedBillings as $billing)
                    <tr>
                        <td>{{ $billing->billingHeader->creator_name }}</td>
                        <td>{{ $billing->tenant->first_name }} {{ $billing->tenant->last_name }}</td>
                        <td>{{ $billing->billing_period }}</td>
                        <td><a href="{{ $billing->pdf_path }}" target="_blank">Seite 1 anzeigen</a></td>
                        <td><a href="{{ $billing->pdf_path_second }}" target="_blank">Seite 2 anzeigen</a></td>
                        <td>{{ $billing->created_at->format('d.m.Y') }}</td>
                        <td>
                            <button wire:click="editBilling({{ $billing->id }})" class="btn btn-sm btn-info">Bearbeiten</button>
                            <button wire:click="deleteBilling({{ $billing->id }})" class="btn btn-sm btn-danger" onclick="return confirm('Sind Sie sicher?')">Löschen</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

        <!-- Footer -->
        <div class="footer-dashboard footer-dashboard-2 mt-4">
            <p>Copyright © 2024 Home Lengo</p>
        </div>
    </div>
</div>
