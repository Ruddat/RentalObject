<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechnung</title>
    <style>
body {
    position: relative;
    width: 19cm;
    height: 29.7cm;
    margin: 1cm auto;
    padding: 0;
    color: #555555;
    background: #FFFFFF;
    font-family: SourceSansPro, Arial, sans-serif;
    font-size: 12px;
}

header {
    padding: 5px 0;
    margin-bottom: 10px;
    border-bottom: 1px solid #AAAAAA;
}

#logo img {
    height: 70px;

}

#company {
    float: right;
    text-align: right;
}

#details {
    margin-bottom: 15px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 15px;
}

table th,
table td {
    padding: 6px;
    background: #EEEEEE;
    text-align: center;
    border-bottom: 1px solid #FFFFFF;
    font-size: 11px;
}

table .no {
    width: 5%;
    font-size: 1.2em;
    background: #57B223;
    color: #FFFFFF;
}

table .desc {
    width: 50%;
    text-align: left;
}

table .unit, table .qty, table .total {
    width: 15%;
}

table tfoot tr td {
    font-weight: bold;
    color: #333333;
}

table tfoot tr:last-child td {
    color: #57B223;
    font-size: 1.2em;
}

#thanks{
  font-size: 2em;
  margin-bottom: 50px;
}

#notices{
  padding-left: 6px;
  border-left: 6px solid #0087C3;
}

#notices .notice {
  font-size: 1.2em;
}

footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            border-top: 1px solid #AAAAAA;
            padding: 10px;
            font-size: 10px;
        }

    </style>
</head>

<body>
    <header class="clearfix">
<div id="logo">
    @if($creator->logo_path)
        <img src="{{ storage_path('app/public/' . $creator->logo_path) }}" alt="Logo" style="width: 100px;">
    @else
        <p>Kein Logo vorhanden.</p>
    @endif
</div>
        <div id="company">
            <h2 class="name">{{ $creator->company_name }}</h2>
            <div>{{ $creator->address }}</div>
            <div>{{ $creator->city }}</div>
            <div>{{ $creator->email }}</div>
        </div>
    </header>
    <main>
        <div id="details">
            <div id="client">
                <div class="to">RECHNUNG AN:</div>
                <h2 class="name">{{ $recipient->name }}</h2>
                <div class="address">{{ $recipient->address }}, {{ $recipient->zip_code }} {{ $recipient->city }}</div>
                <div class="email">{{ $recipient->email }}</div>
            </div>
            <div id="invoice">
                <h1>Rechnung {{ $invoice->invoice_number }}</h1>
                <div class="date">Rechnungsdatum: {{ $invoice->invoice_date }}</div>
                <div class="date">Fälligkeitsdatum: {{ $invoice->due_date }}</div>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th class="no">#</th>
                    <th class="desc">BESCHREIBUNG</th>
                    <th class="unit">EINZELPREIS</th>
                    <th class="qty">MENGE</th>
                    <th class="total">GESAMTPREIS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td class="no">{{ $item->item_number }}</td>
                        <td class="desc">{{ $item->description }}</td>
                        <td class="unit">{{ number_format($item->unit_price, 2, ',', '.') }} €</td>
                        <td class="qty">{{ $item->quantity }}</td>
                        <td class="total">{{ number_format($item->total_price, 2, ',', '.') }} €</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">GESAMTNETTO</td>
                    <td>{{ number_format($totalNet, 2, ',', '.') }} €</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">STEUER ({{ $taxRate }}%)</td>
                    <td>{{ number_format($totalTax, 2, ',', '.') }} €</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">GESAMTBETRAG</td>
                    <td>{{ number_format($invoice->total_amount, 2, ',', '.') }} €</td>
                </tr>
            </tfoot>
        </table>
        <div id="thanks">Vielen Dank!</div>

        @if ($creator->notes)
            <div id="notices-creator">
                <div>HINWEIS:</div>
                <div class="notice">{{ $creator->notes }}</div>
            </div>
        @endif

        @if ($creator->accept_paypal)
            <div id="paypal">
                <div>PayPal:</div>
                <div class="notice">{{ $creator->paypal_account }}</div>
            </div>
            @endif

        <div id="notices">
            <div>HINWEIS:</div>
            <div class="notice">Diese Rechnung wurde elektronisch erstellt und ist ohne Unterschrift gültig.</div>
        </div>
    </main>
    <footer>
        {{ $creator->company_name }} - erstellt am {{ date('d.m.Y') }}.
    </footer>
</body>

</html>
