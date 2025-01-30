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
<div>
    @error('items') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="app-btn-list">
<button wire:click="$set('showForm', true)" class="btn btn-outline-primary">Neue Rechnung erstellen</button>
    <a href="{{ route('e-invoice-customer-manager') }}" class="btn btn-outline-secondary">Kunden verwalten</a>
</div>

    @if ($showForm)
    <form wire:submit.prevent="saveInvoice" class="mt-4">


            <div class="form-group">
                <label>Rechnungskopf</label>
                <select wire:model="invoice.invoice_creator_id" class="form-control">
                    <option value="">-- Rechnungskopf wählen --</option>
                    @foreach ($invoice_creators as $creator)
                        <option value="{{ $creator->id }}">{{ $creator->company_name ?? $creator->getFullNameAttribute() }}</option>
                    @endforeach
                </select>
                @error('invoice.invoice_creator_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Kunde</label>
                <select wire:model="invoice.recipient_id" class="form-control">
                    <option value="">-- Kunde wählen --</option>
                    @foreach ($recipients as $recipient)
                        <option value="{{ $recipient->id }}">{{ $recipient->name }}</option>
                    @endforeach
                </select>
                @error('invoice.recipient_id') <span class="text-danger">{{ $message }}</span> @enderror
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




            <div class="card">
                <div class="card-header">
                    <h5>Rechnungspositionen</h5>
                </div>
                <div class="card-body">
                    <div class="row gy-3">
                        @foreach ($items as $index => $item)
                            <!-- Einzelne Rechnungsposition -->
                            <div class="col-12 border rounded p-3">
                                <div class="row gy-2">
                                    <!-- Artikelnummer -->
                                    <div class="col-md-2">
                                        <label class="form-label">Artikelnummer</label>
                                        <input type="text" wire:model="items.{{ $index }}.item_number" class="form-control form-control-sm" placeholder="Artikelnummer">
                                        @error("items.{$index}.item_number")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Beschreibung -->
                                    <div class="col-md-4">
                                        <label class="form-label">Beschreibung</label>
                                        <textarea wire:model="items.{{ $index }}.description" class="form-control form-control-sm" rows="1" placeholder="Beschreibung"></textarea>
                                        @error("items.{$index}.description")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Menge -->
                                    <div class="col-md-2">
                                        <label class="form-label">Menge</label>
                                        <input type="number" wire:model="items.{{ $index }}.quantity" class="form-control form-control-sm" min="1" placeholder="Menge">
                                        @error("items.{$index}.quantity")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Einzelpreis -->
                                    <div class="col-md-2">
                                        <label class="form-label">Einzelpreis (€)</label>
                                        <input type="number" step="0.01" wire:model="items.{{ $index }}.unit_price" class="form-control form-control-sm" placeholder="Einzelpreis">
                                        @error("items.{$index}.unit_price")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Steuersatz -->
                                    <div class="col-md-2">
                                        <label class="form-label">Steuersatz (%)</label>
                                        <input type="number" step="0.01" wire:model="items.{{ $index }}.tax_rate" class="form-control form-control-sm" placeholder="Steuersatz">
                                        @error("items.{$index}.tax_rate")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Löschen-Button -->
                                    <div class="col-12 text-end mt-2">
                                        <button type="button" wire:click="removeItem({{ $index }})" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i> Löschen
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Button zum Hinzufügen von Positionen -->
                    <div class="text-end mt-3">
                        <button type="button" wire:click="addItem" class="btn btn-success btn-sm">
                            <i class="bi bi-plus-circle"></i> Position hinzufügen
                        </button>
                    </div>
                </div>
            </div>


            <div class="form-group mt-4">
                <button type="submit" class="btn btn-success">Rechnung speichern</button>
                <button type="button" wire:click="$set('showForm', false)" class="btn btn-secondary">Abbrechen</button>
            </div>
        </form>
    @endif





    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Table Striped Columns</h5>
                <p>Using the column strip table need to add <code> .table-striped-columns </code>
                    class to table tag </p>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-bottom-border table-hover align-center mb-0">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kunde</th>
                            <th scope="col">Datum</th>
                            <th scope="col">Fällig</th>
                            <th scope="col">Betrag</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aktionen</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                            <tr>
                                <td>{{ $invoice->invoice_number }}</td>
                                <td>{{ $invoice->recipient->name }}</td>
                                <td>{{ $invoice->invoice_date }}</td>
                                <td>{{ $invoice->due_date }}</td>
                                <td>{{ $invoice->total_amount }}</td>
                                <td>{{ $invoice->status }}</td>
                                <td>
                                    <button wire:click="editInvoice({{ $invoice->id }})" class="btn btn-warning btn-sm">Bearbeiten</button>
                                    <button
                                    type="button" class="btn btn-danger btn-sm"
                                    wire:click="deleteInvoice({{ $invoice->id }})"
                                    wire:confirm="Are you sure you want to delete this Invoice?"
                                >
                                Löschen
                                </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</div>
