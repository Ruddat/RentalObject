<div class="main-content">
    <div class="main-content-inner">
        <!-- Title Section -->
        <div class="widget-box-2">
            <h5 class="title">Abrechnung für das Jahr und Mietobjekt auswählen</h5>
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <!-- Objektauswahl -->
            <div class="mb-3">
                <label for="rental_object_id" class="form-label">Mietobjekt:</label>
                <select wire:model="rental_object_id" id="rental_object_id" class="form-select" required>
                    <option value="">Bitte auswählen...</option>
                    @foreach($rentalObjects as $object)
                        <option value="{{ $object->id }}">
                            {{ $object->name }}, {{ $object->street }}, {{ $object->city }}
                        </option>
                    @endforeach
                </select>
                @error('rental_object_id') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <!-- Jahr-Auswahl -->
            <div class="mb-3">
                <label for="year" class="form-label">Jahr auswählen:</label>
                <select wire:model="year" id="year" class="form-select" required>
                    @for ($i = date('Y'); $i >= date('Y') - 20; $i--)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('year') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <button wire:click="calculateAndSaveAnnualBilling" class="btn btn-primary mb-4">Abrechnung berechnen</button>
        </div>

        <!-- Abrechnungsergebnisse -->
        <div class="widget-box-2 table-responsive mt-4">
            <h5 class="title">Abrechnungsergebnisse für das Jahr: {{ $year }}</h5>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Mieter</th>
                        <th>Mietdauer</th>
                        <th>Abrechnungstyp</th>
                        <th>Details</th>
                        <th>Gesamtkosten (€)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($calculatedCosts as $entry)
                        <tr>
                            <td>{{ $entry['tenant']->first_name }} {{ $entry['tenant']->last_name }}</td>
                            <td>
                                {{ \Carbon\Carbon::parse($entry['tenant']->start_date)->format('d.m.Y') }}
                                - {{ $entry['tenant']->end_date ? \Carbon\Carbon::parse($entry['tenant']->end_date)->format('d.m.Y') : 'Heute' }}
                            </td>
                            <td>{{ $entry['tenant']->billing_type === 'units' ? 'Einheiten' : 'Personen' }}</td>
                            <td>
                                @if(!empty($entry['utility_details']))
                                    @foreach($entry['utility_details'] as $utility)
                                        <div>
                                            <span class="fw-bold">{{ $utility['short_name'] }}:</span>
                                            {{ number_format($utility['amount'], 2, ',', '.') }} €
                                        </div>
                                    @endforeach
                                @else
                                    <div class="text-muted">Keine Details verfügbar</div>
                                @endif
                            </td>
                            <td>{{ number_format($entry['total_cost'], 2, ',', '.') }} €</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Heiz- und Warmwasserkosten -->
        <div class="widget-box-2 table-responsive mt-4">
            <h5 class="title">Zusätzliche Kosten: Heiz- und Warmwasserkosten</h5>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Mieter</th>
                        <th>Mietdauer</th>
                        <th>Heizkosten (€)</th>
                        <th>Warmwasserkosten (€)</th>
                        <th>Gesamtkosten (€)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($calculatedCosts as $entry)
                        <tr>
                            <td>{{ $entry['tenant']->first_name }} {{ $entry['tenant']->last_name }}</td>
                            <td>
                                {{ \Carbon\Carbon::parse($entry['tenant']->start_date)->format('d.m.Y') }}
                                - {{ $entry['tenant']->end_date ? \Carbon\Carbon::parse($entry['tenant']->end_date)->format('d.m.Y') : 'Heute' }}
                            </td>
                            <td>{{ number_format($entry['heating_cost'] - $entry['warm_water_cost'], 2, ',', '.') }} €</td> <!-- Berechnete Heizkosten -->
                            <td>{{ number_format($entry['warm_water_cost'], 2, ',', '.') }} €</td>
                            <td>{{ number_format($entry['heating_cost'], 2, ',', '.') }} €</td> <!-- Gesamtkosten entsprechen den Heizkosten -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer-dashboard footer-dashboard-2 mt-4">
        <p>Copyright © 2024 Home Lengo</p>
    </div>
</div>
