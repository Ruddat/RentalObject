<div class="main-content">
    <div class="main-content-inner">
        <h2 class="mb-4">Neue Abrechnung erstellen</h2>
        <!-- Erstellungsformular -->
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
        <!-- Filter- und Suchoptionen -->
        <div class="row mb-3">
            <div class="col-md-3">
                <input type="text" wire:model.change="searchTerm" class="form-control" placeholder="Mieter suchen...">
            </div>
            <div class="col-md-3">
                <input type="date" wire:model.change="fromDate" class="form-control" placeholder="Von Datum">
            </div>
            <div class="col-md-3">
                <input type="date" wire:model.change="toDate" class="form-control" placeholder="Bis Datum">
            </div>
            <div class="col-md-3 d-flex align-items-center">
                <button wire:click="resetFilters" class="btn btn-secondary">Reset</button>
            </div>
        </div>

            <div class="table-responsive mt-3">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th wire:click="sortBy('billing_header_creator_name')">Ersteller</th>
                            <th wire:click="sortBy('tenant_first_name')">Mieter</th>
                            <th>Zeitraum</th>
                            <th>PDF Seite 1</th>
                            <th>PDF Seite 2</th>
                            <th>Nebenkostenzahlungen</th>
                            <th wire:click="sortBy('billing_records.created_at')">Erstellungsdatum</th>
                            <th>Aktionen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($savedBillings as $billing)

                        <tr>
                            <td>{{ $billing->billing_header_creator_name ?? 'N/A' }}</td>
                            <td>{{ $billing->tenant_first_name ?? 'N/A' }} {{ $billing->tenant_last_name ?? 'N/A' }}</td>
                            <td>{{ $billing->billing_period ?? 'N/A' }}</td>
                            <td><a href="{{ $billing->pdf_path }}" target="_blank">Seite 1 anzeigen</a></td>
                            <td><a href="{{ $billing->pdf_path_second }}" target="_blank">Seite 2 anzeigen</a></td>
                            <td><a href="{{ $billing->pdf_path_third }}" target="_blank">Seite 3 anzeigen</a></td>
                            <td>{{ \Carbon\Carbon::parse($billing->created_at)->format('d.m.Y H:i') }}</td>
                            <td>
                                <button wire:click="editBilling({{ $billing->id }})" class="btn btn-sm btn-info">Bearbeiten</button>
                                <button wire:click="deleteBilling({{ $billing->id }})" class="btn btn-sm btn-danger" onclick="return confirm('Sind Sie sicher?')">Löschen</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $savedBillings->links() }}
            </div>
        </div>

        <!-- Footer -->
        <div class="footer-dashboard footer-dashboard-2 mt-4">
            <p>Copyright © 2024 Home Lengo</p>
        </div>
    </div>
</div>
