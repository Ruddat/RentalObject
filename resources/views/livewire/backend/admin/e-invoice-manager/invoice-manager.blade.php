<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <button wire:click="$set('showForm', true)" class="btn btn-primary">Neue Rechnung erstellen</button>

    @if ($showForm)
        <form wire:submit.prevent="createInvoice" class="mt-4">
            <div class="form-group">
                <label>Kunde</label>
                <select wire:model="invoice.customer_id" class="form-control">
                    <option value="">-- Kunde wählen --</option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
                @error('invoice.customer_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Rechnungsdatum</label>
                <input type="date" wire:model="invoice.invoice_date" class="form-control">
                @error('invoice.invoice_date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Fälligkeitsdatum</label>
                <input type="date" wire:model="invoice.due_date" class="form-control">
                @error('invoice.due_date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Status</label>
                <select wire:model="invoice.status" class="form-control">
                    <option value="">-- Status wählen --</option>
                    <option value="draft">Entwurf</option>
                    <option value="sent">Gesendet</option>
                    <option value="paid">Bezahlt</option>
                    <option value="cancelled">Storniert</option>
                </select>
                @error('invoice.status') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Notizen</label>
                <textarea wire:model="invoice.notes" class="form-control"></textarea>
                @error('invoice.notes') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <h4>Artikelpositionen</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Artikelnummer</th>
                        <th>Beschreibung</th>
                        <th>Menge</th>
                        <th>Einzelpreis</th>
                        <th>Steuersatz (%)</th>
                        <th>Aktionen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $index => $item)
                        <tr>
                            <td><input type="text" wire:model="items.{{ $index }}.item_number" class="form-control"></td>
                            <td>
                                <input type="text" wire:model="items.{{ $index }}.description" class="form-control">
                                @error("items.{$index}.description") <span class="text-danger">{{ $message }}</span> @enderror
                            </td>
                            <td>
                                <input type="number" wire:model="items.{{ $index }}.quantity" class="form-control">
                                @error("items.{$index}.quantity") <span class="text-danger">{{ $message }}</span> @enderror
                            </td>
                            <td>
                                <input type="number" step="0.01" wire:model="items.{{ $index }}.unit_price" class="form-control">
                                @error("items.{$index}.unit_price") <span class="text-danger">{{ $message }}</span> @enderror
                            </td>
                            <td>
                                <input type="number" step="0.01" wire:model="items.{{ $index }}.tax_rate" class="form-control">
                                @error("items.{$index}.tax_rate") <span class="text-danger">{{ $message }}</span> @enderror
                            </td>
                            <td>
                                <button type="button" wire:click="removeItem({{ $index }})" class="btn btn-danger btn-sm">Löschen</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" wire:click="addItem" class="btn btn-primary">Position hinzufügen</button>

            <div class="form-group mt-4">
                <button type="submit" class="btn btn-success">Rechnung speichern</button>
                <button type="button" wire:click="$set('showForm', false)" class="btn btn-secondary">Abbrechen</button>
            </div>
        </form>
    @endif

    <table class="table mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Kunde</th>
                <th>Datum</th>
                <th>Fällig</th>
                <th>Betrag</th>
                <th>Status</th>
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
                    <td>{{ $invoice->total_amount }}</td>
                    <td>{{ $invoice->status }}</td>
                    <td>
                        <button wire:click="editInvoice({{ $invoice->id }})" class="btn btn-warning btn-sm">Bearbeiten</button>
                        <button wire:click="deleteInvoice({{ $invoice->id }})" class="btn btn-danger btn-sm">Löschen</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
