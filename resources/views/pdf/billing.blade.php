<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.5; }
        .header, .footer { width: 100%; text-align: center; }
        .content { margin: 20px; }
        .details, .costs { margin-top: 20px; }
        .title { font-size: 24px; font-weight: bold; margin-bottom: 10px; text-align: center; }
        .section-title { font-size: 18px; font-weight: bold; margin-top: 15px; }
        .summary { font-weight: bold; }
        ul { list-style-type: none; padding: 0; }
        li { margin-bottom: 5px; }
    </style>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <div>
            <strong>{{ $billingHeader->creator_name }}</strong><br>
            {{ $billingHeader->street }}, {{ $billingHeader->zip_code }} {{ $billingHeader->city }}
        </div>
        <div style="text-align: right;">
            <strong>{{ $tenant->first_name }} {{ $tenant->last_name }}</strong><br>
            {{ $tenant->street }}, {{ $tenant->zip_code }} {{ $tenant->city }}
        </div>
    </div>

    <!-- Title Section -->
    <div class="title">Nebenkostenabrechnung</div>

    <!-- Billing Details -->
    <div class="content">
        <div><strong>Abrechnungszeitraum:</strong> </div>
        <div><strong>Wohnfläche:</strong> 72.72 m²</div>
        <div><strong>Gesamtwohnfläche des Hauses:</strong> 220 m²</div>

        <!-- Cost Breakdown -->
        <div class="costs">
            <div class="section-title">Kosten und Aufteilung</div>
            <ul>
                @foreach(json_decode($billingRecord->standard_costs) as $cost)
                    <li>{{ $cost->distribution_key }}: {{ number_format($cost->amount, 2) }} €</li>
                @endforeach
            </ul>
        </div>

        <!-- Heating and Hot Water Costs -->
        <div class="costs">
            <div class="section-title">Heiz- und Warmwasserkosten</div>
            <ul>
                @foreach(json_decode($billingRecord->heating_costs) as $cost)
                    @php
                        $calculatedAmount = $cost->heating_type === 'oil'
                            ? $cost->price_per_unit * $cost->total_oil_used
                            : ($cost->final_reading - $cost->initial_reading) * $cost->price_per_unit;
                    @endphp
                    <li>{{ $cost->heating_type === 'oil' ? 'Öl' : 'Gas' }}: {{ number_format($calculatedAmount, 2) }} €</li>
                @endforeach
            </ul>
        </div>

        <!-- Summary Section -->
        <div class="summary">
            <div><strong>Gesamtsumme:</strong> {{ number_format($billingRecord->total_cost, 2) }} €</div>
            <div><strong>Vorauszahlung:</strong> {{ number_format($billingRecord->prepayment, 2) }} €</div>
            <div><strong>Nachzahlung/Guthaben:</strong> {{ number_format($billingRecord->balance_due, 2) }} €</div>
        </div>

        <!-- Payment Instruction -->
        <div class="footer">
            Bitte gleichen Sie den offenen Betrag für die Betriebskosten bis spätestens 31.11.2024 aus. <br>
            Ihre Betriebskostenabrechnung weist eine Nachzahlung aus. Bitte überweisen Sie den Betrag auf das bekannte Mietkonto.
        </div>
    </div>
</body>
</html>
