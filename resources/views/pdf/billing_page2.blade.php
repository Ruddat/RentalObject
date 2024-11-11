<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Nebenkostenabrechnung - Heizkosten</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .header {
            text-align: center;
            padding: 10px 0;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #FFC107;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
            font-size: 12px;
        }
        .table th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            padding: 10px 0;
            font-size: 12px;
            color: #888;
        }
        .highlight {
            font-weight: bold;
            color: #FFC107;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Header Section -->
    <div class="header">
        <h1>Nebenkostenabrechnung - Heizkosten</h1>
        <p>Abrechnungszeitraum vom {{ $billingPeriod ?? 'Jahr' }}</p>
    </div>

    <!-- Tenant Information -->
    <div>
        <p><strong>Mieter:</strong> {{ $tenant->first_name ?? 'Unbekannt' }} {{ $tenant->last_name ?? '' }}</p>
        <p><strong>Adresse:</strong> {{ $tenant->street ?? '' }}, {{ $tenant->zip_code ?? '' }} {{ $tenant->city ?? '' }}</p>
    </div>

    <h2>Heizkostenaufstellung</h2>

    <!-- Heating Cost Breakdown Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Beschreibung</th>
                <th>Wert</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Anfangsstand</td>
                <td>{{ number_format($heatingData['initialReading'] ?? 0, 2, ',', '.') }} (Einheiten)</td>
            </tr>
            <tr>
                <td>Endstand</td>
                <td>{{ number_format($heatingData['finalReading'] ?? 0, 2, ',', '.') }} (Einheiten)</td>
            </tr>
            <tr>
                <td>Gesamtverbrauch</td>
                <td>{{ number_format($heatingData['totalFuelConsumption'] ?? 0, 2, ',', '.') }} (Einheiten)</td>
            </tr>
            <tr>
                <td>Preis pro Einheit</td>
                <td>{{ number_format(($heatingData['totalFuelCost'] ?? 0) / max($heatingData['totalFuelConsumption'] ?? 1, 1), 2, ',', '.') }} €</td>
            </tr>
            <tr>
                <td><span class="highlight">Gesamtkosten für Heizenergie</span></td>
                <td>{{ number_format($heatingData['totalFuelCost'] ?? 0, 2, ',', '.') }} €</td>
            </tr>
            <tr>
                <td>Kosten für Warmwasser ({{ number_format(($heatingCosts->warm_water_percentage ?? 0) * 100, 0) }}%)</td>
                <td>{{ number_format($heatingData['warmWaterCost'] ?? 0, 2, ',', '.') }} €</td>
            </tr>
            <tr>
                <td>Kosten nur für Heizung</td>
                <td>{{ number_format($heatingData['heatingOnlyCost'] ?? 0, 2, ',', '.') }} €</td>
            </tr>
        </tbody>
    </table>

    <!-- Summary of Heating Cost Distribution -->
    <h2>Kostenverteilung</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Beschreibung</th>
                <th>Gesamt</th>
                <th>Ihr Anteil</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gesamtkosten für Heizung</td>
                <td>{{ number_format($heatingData['totalFuelCost'] ?? 0, 2, ',', '.') }} €</td>
                <td>{{ number_format($calculation['heating_costs_share'] ?? 0, 2, ',', '.') }} €</td>
            </tr>
            <tr>
                <td>Warmwasser</td>
                <td>{{ number_format($heatingData['warmWaterCost'] ?? 0, 2, ',', '.') }} €</td>
                <td>{{ number_format($calculation['warm_water_share'] ?? 0, 2, ',', '.') }} €</td>
            </tr>
        </tbody>
    </table>

    <div class="footer">
        <p>Vielen Dank für Ihr Vertrauen!</p>
    </div>
</div>

</body>
</html>
