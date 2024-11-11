<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Mieterzahlungen</title>
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
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Zahlungsübersicht</h1>
        <p>Abrechnungszeitraum: {{ $billingPeriod ?? 'Jahr' }}</p>
    </div>

    <h2>Mieter: {{ $tenant->first_name ?? 'Unbekannt' }} {{ $tenant->last_name ?? '' }}</h2>
    <p>Adresse: {{ $tenant->street ?? '' }}, {{ $tenant->zip_code ?? '' }} {{ $tenant->city ?? '' }}</p>

    <h2>Zahlungen im Abrechnungszeitraum</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Datum</th>
                <th>Betrag (€)</th>
                <th>Beschreibung</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tenantPayments as $payment)
                <tr>
                    <td>{{ Carbon\Carbon::parse($payment->payment_date)->format('d.m.Y') }}</td>
                    <td>{{ number_format($payment->amount, 2, ',', '.') }}</td>
                    <td>{{ $payment->description ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Vielen Dank für Ihr Vertrauen!</p>
    </div>
</div>

</body>
</html>
