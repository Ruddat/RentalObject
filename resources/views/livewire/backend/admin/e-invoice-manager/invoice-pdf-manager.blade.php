<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Kunde</th>
                <th>Datum</th>
                <th>Fällig</th>
                <th>Gesamtbetrag</th>
                <th>PDF</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->invoice_number }}</td>
                    <td>{{ $invoice->customer->name }}</td>
                    <td>{{ $invoice->invoice_date }}</td>
                    <td>{{ $invoice->due_date }}</td>
                    <td>{{ $invoice->total_amount }} €</td>
                    <td>
                        @if ($invoice->pdf_path)
                            <a href="{{ asset('storage/invoices/' . basename($invoice->pdf_path)) }}" target="_blank">PDF ansehen</a>
                        @else
                            Nicht verfügbar
                        @endif
                    </td>
                    <td>
                        <button wire:click="generatePdf({{ $invoice->id }}, false)" class="btn btn-primary btn-sm">PDF erstellen</button>
                        <button wire:click="generatePdf({{ $invoice->id }}, true)" class="btn btn-warning btn-sm">ZUGFeRD-PDF erstellen</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
