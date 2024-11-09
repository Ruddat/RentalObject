<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Nebenkostenabrechnung</title>
    <style>
        /* Basic reset and page styling */
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            margin: 20px auto;
            padding: 15px;
            border: 1px solid #ccc;
            background-color: #fff;
            box-sizing: border-box;
        }

        /* Header styling */
        .header {
            color: #ffb100;
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .subheader {
            color: #555;
            font-size: 0.9em;
            margin-bottom: 10px;
        }

        .client-info, .property-info {
            display: inline-block;
            width: 48%;
            vertical-align: top;
            font-size: 0.8em;
            color: #333;
        }

        .client-info p, .property-info p {
            margin: 4px 0;
        }

        /* Summary section */
        .summary {
            margin-top: 15px;
            font-size: 0.85em;
        }

        .highlight-box {
            background-color: #ffeb99;
            padding: 8px;
            margin-top: 10px;
            text-align: right;
            font-weight: bold;
            color: #333;
            font-size: 1em;
        }

        /* Detailed cost breakdown table */
        .cost-breakdown {
            margin-top: 15px;
            font-size: 0.85em;
        }

        .cost-breakdown h2 {
            color: #ffb100;
            border-bottom: 2px solid #ffb100;
            padding-bottom: 5px;
            font-size: 1.1em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 0.85em;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 6px;
            text-align: left;
        }

        th {
            background-color: #ffb100;
            color: #fff;
            font-weight: bold;
        }

        /* Subtotal section */
        .subtotal {
            text-align: right;
            font-weight: bold;
            color: #333;
        }

        /* Footer */
        .footer {
            margin-top: 20px;
            font-size: 0.8em;
            color: #555;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="container">

        <!-- Header -->
        <div class="header">Nebenkostenabrechnung</div>
        <div class="subheader">
            Erstellt im Auftrag von {{ $billingHeader->creator_name }}<br>
            <span style="text-decoration: underline; font-size: 0.9em;">
                {{ $billingHeader->creator_name }}, {{ $billingHeader->street }} {{ $billingHeader->house_number }} , {{ $billingHeader->zip_code }} {{ $billingHeader->city }}
            </span>
        </div>

    </br></br>



        <!-- Client and Property Info -->
        <div class="client-info">
            <p><strong>{{ $tenant->first_name }} {{ $tenant->last_name }}</strong><br>
            {{ $tenant->street }}<br>
            {{ $tenant->zip_code }} {{ $tenant->city }}</p>
        </div>
        <div class="property-info">
            <p><strong>{{ $rentalObject->name }}</strong><br>
            {{ $rentalObject->street }}<br>
            {{ $rentalObject->zip_code }} {{ $rentalObject->city }}</p>
            <p>Abrechnungszeitraum: {{ $billingRecord->billing_period }}</p>
            <p>Abrechnung erstellt am {{ now()->format('d.m.Y') }}</p>
        </div>

<!-- Summary -->
<div class="summary">
    <p>Sehr geehrte/r {{ $tenant->last_name }},</p>
    <p>für Ihre Wohnung am {{ $tenant->street }}, {{ $tenant->zip_code }} {{ $tenant->city }} haben wir Ihren Kostenanteil errechnet:</p>

    <div class="highlight-box">
        <!-- Display whether the balance is a Nachzahlung or Guthaben -->
        @if($billingRecord->balance_due >= 0)
            <p><strong>Ihre Nachzahlung beträgt:</strong></p>
        @else
            <strong>Ihr Guthaben beträgt:</strong>
            und bla bla bla bla bla bla bla bla bla bla bla bla
            <br/>
        @endif

        <!-- Combined total of standard and heating costs -->
        {{ number_format($billingRecord->total_cost, 2, ',', '.') }} Euro<br>
        - {{ number_format($billingRecord->prepayment, 2, ',', '.') }} Euro<br>

        <!-- Final balance with appropriate formatting -->
        = {{ number_format(abs($billingRecord->balance_due), 2, ',', '.') }} Euro
    </div>
</div>

        <!-- Detailed Cost Breakdown for Standard Costs -->
        <div class="cost-breakdown">
            <h2>Detaillierte Kostenaufstellung - Standardkosten</h2>
            <table>
                <thead>
                    <tr>
                        <th>Kostenart</th>
                        <th>Verteilerschlüssel</th>
                        <th>Betrag (€)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(json_decode($billingRecord->standard_costs, true) as $cost)
                        <tr>
                            <td>{{ $cost['name'] }}</td>
                            <td>{{ $cost['distribution_key'] }}</td>
                            <td>{{ number_format($cost['amount'], 2, ',', '.') }}</td>
                        </tr>
                    @endforeach
                    <tr class="subtotal">
                        <td colspan="2">Summe</td>
                        <td>{{ number_format(array_sum(array_column(json_decode($billingRecord->standard_costs, true), 'amount')), 2, ',', '.') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>



<!-- Detailed Cost Breakdown for Heating Costs -->
<div class="cost-breakdown">
    <h2>Detaillierte Kostenaufstellung - Heizkosten</h2>
    <table>
        <thead>
            <tr>
                <th>Jahr</th>
                <th>Heiztyp</th>
                <th>Menge (in Litern / m³)</th>
                <th>Preis pro Einheit (€)</th>
                <th>Gesamtkosten (€)</th>
            </tr>
        </thead>
        <tbody>
            @foreach(json_decode($billingRecord->heating_costs, true) as $heatingCost)
                <tr>
                    <td>{{ $heatingCost['year'] }}</td>
                    <td>{{ ucfirst($heatingCost['heating_type']) }}</td>
                    <td>{{ $heatingCost['total_used'] }}</td>
                    <td>{{ number_format($heatingCost['price_per_unit'], 2, ',', '.') }}</td>
                    <td>{{ number_format($heatingCost['total_cost'], 2, ',', '.') }}</td>
                </tr>
            @endforeach
            <tr class="subtotal">
                <td colspan="4">Summe Heizkosten</td>
                <td>
                    {{ number_format(array_sum(array_column(json_decode($billingRecord->heating_costs, true), 'total_cost')), 2, ',', '.') }}
                </td>
            </tr>
        </tbody>
    </table>
</div>


        <!-- Final Cost Summary -->
        <div class="summary">
            <p>Gesamtkosten für Heizung und Wassererwärmung: <strong>{{ number_format($billingRecord->total_cost, 2, ',', '.') }}</strong> €</p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Vielen Dank für Ihr Vertrauen!</p>
        </div>
    </div>
</body>
</html>
