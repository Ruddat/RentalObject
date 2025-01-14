<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quittung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
            background-color: #fff;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            font-size: 24px;
            color: #5066a8;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table th, table td {
            border: 1px solid #5066a8;
            padding: 8px;
            text-align: left;
            font-size: 12px;
        }
        table th {
            background-color: #ccd3ea;
            font-weight: bold;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 12px;
            color: #555;
        }
        .link-section {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }
        .link-section a {
            color: #5066a8;
            text-decoration: none;
            font-weight: bold;
        }
        .print-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 14px;
            color: #fff;
            background-color: #5066a8;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }
        .print-button:hover {
            background-color: #40558a;
        }
    </style>
    <script>
        function printReceipt() {
            window.print();
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Quittung</h1>

        <!-- Details -->
        <table>
            <tr>
                <th>Nummer</th>
                <td>{{ $receipt->number }}</td>
            </tr>
            <tr>
                <th>Datum</th>
                <td>{{ $receipt->date }}</td>
            </tr>
            <tr>
                <th>Von</th>
                <td>{{ $receipt->sender }}</td>
            </tr>
            <tr>
                <th>Für</th>
                <td>{{ $receipt->receiver }}</td>
            </tr>
        </table>

        <!-- Beträge -->
        <table>
            <tr>
                <th>EUR</th>
                <td>{{ number_format($receipt->amount, 2, ',', '.') }} €</td>
            </tr>
            <tr>
                <th>inkl. {{ $receipt->tax_percent }}% USt.</th>
                <td>{{ number_format($receipt->tax_amount, 2, ',', '.') }} €</td>
            </tr>
            <tr>
                <th>Gesamt (Brutto)</th>
                <td>{{ number_format($receipt->amount + $receipt->tax_amount, 2, ',', '.') }} €</td>
            </tr>
            <tr>
                <th>EUR in Worten</th>
                <td>{{ $receipt->amount_in_words ?? 'Nicht verfügbar' }}</td>
            </tr>
        </table>

        <!-- Zusätzliche Details -->
        <table>
            <tr>
                <th>Buchungsvermerk</th>
                <td>{{ $receipt->description }}</td>
            </tr>
            <tr>
                <th>Hash</th>
                <td>{{ $receipt->hash ?? 'Hash nicht verfügbar' }}</td>
            </tr>
        </table>

        <!-- Hinweis -->
        <div class="link-section">
            <p>Hinweis: Diese Quittung wurde elektronisch erstellt und benötigt keine Unterschrift.</p>
        </div>

        <!-- Link zur Seite -->
        <div class="link-section">
            <p>Besuchen Sie <a href="https://homelengo.de/" target="_blank">homelengo.de</a> für Immobilien, Nebenkosten, E-Rechnungen und Quittungen.</p>
        </div>

        <!-- Druckbutton -->
        <button class="print-button" onclick="printReceipt()">🖨️ Quittung drucken</button>

        <!-- Footer -->
        <div class="footer">
            <p>Vielen Dank, dass Sie unseren Service nutzen!</p>
            <p>Kontaktieren Sie uns bei Fragen unter <a href="mailto:support@homelengo.de">support@homelengo.de</a>.</p>
        </div>
    </div>
</body>
</html>
