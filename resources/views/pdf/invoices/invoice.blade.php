<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechnung</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        .total { font-weight: bold; }
    </style>
</head>
<body>
    <h1>Rechnung #{{ $invoice->invoice_number }}</h1>
    <p>Datum: {{ $invoice->invoice_date }}</p>
    <p>Fälligkeitsdatum: {{ $invoice->due_date }}</p>
    <p>Kunde: {{ $invoice->customer->name }}</p>

    <h3>Artikel</h3>
    <table>
        <thead>
            <tr>
                <th>Artikelnummer</th>
                <th>Beschreibung</th>
                <th>Menge</th>
                <th>Einzelpreis</th>
                <th>Steuersatz</th>
                <th>Gesamtpreis</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoice->items as $item)
                <tr>
                    <td>{{ $item->item_number }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ number_format($item->unit_price, 2) }}</td>
                    <td>{{ $item->tax_rate }}%</td>
                    <td>{{ number_format($item->total_price, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3 class="total">Gesamtbetrag: {{ number_format($invoice->total_amount, 2) }} €</h3>
</body>
</html>
