<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Quittungen</h2>
        <button wire:click="toggleForm" class="btn btn-primary">
            {{ $showForm ? 'Formular schließen' : 'Neue Quittung erstellen' }}
        </button>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if ($showForm)
        <form wire:submit.prevent="saveReceipt" class="mb-4">
            <!-- Absender und Empfänger -->
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="sender" class="form-label">Absender des Geldes</label>
                        <input type="text" id="sender" wire:model="sender" class="form-control">
                        @error('sender') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="receiver" class="form-label">Empfänger des Geldes</label>
                        <input type="text" id="receiver" wire:model="receiver" class="form-control">
                        @error('receiver') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

<!-- Betrag und MwSt -->
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="amount" class="form-label">Betrag</label>
            <input type="number" step="0.01" id="amount" wire:model="amount" class="form-control">
            @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="taxType" class="form-label">Betragstyp</label>
            <select id="taxType" wire:model="taxType" class="form-control">
                <option value="netto">Netto (zzgl. MwSt.)</option>
                <option value="brutto">Brutto (inkl. MwSt.)</option>
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-check">
            <input type="checkbox" id="includeTax" wire:model="includeTax" class="form-check-input">
            <label for="includeTax" class="form-check-label">MwSt. hinzufügen</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="customTaxPercent" class="form-label">MwSt.-Satz (%)</label>
            <input type="number" step="0.01" id="customTaxPercent" wire:model="customTaxPercent" class="form-control" placeholder="{{ $taxPercent }}">
        </div>
    </div>
</div>



            <!-- Datum -->
            <div class="mb-3">
                <label for="date" class="form-label">Datum</label>
                <input type="date" id="date" wire:model="date" class="form-control">
                @error('date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Beschreibung -->
            <div class="mb-3">
                <label for="description" class="form-label">Beschreibung</label>
                <textarea id="description" wire:model="description" class="form-control"></textarea>

                @if (!empty($suggestedDescriptions))
                    <ul class="list-group mt-2">
                        @foreach ($suggestedDescriptions as $suggestion)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span wire:click="$set('description', '{{ $suggestion }}')">
                                    {{ $suggestion }}
                                </span>
                                <button type="button" class="btn btn-danger btn-sm" wire:click="deleteDescription('{{ $suggestion }}')">
                                    Löschen
                                </button>
                            </li>
                        @endforeach
                    </ul>
                @endif

                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-secondary me-2" wire:click="toggleForm">Abbrechen</button>
                <button type="submit" class="btn btn-success">{{ $editMode ? 'Aktualisieren' : 'Speichern' }}</button>
            </div>
        </form>
    @endif

    <!-- Tabelle -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nummer</th>
                <th>Netto</th>
                <th>MwSt. %</th>
                <th>Brutto</th>
                <th>Datum</th>
                <th>Beschreibung</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($receipts as $receipt)
                <tr>
                    <td>{{ $receipt->id }}</td>
                    <td>{{ $receipt->number }}</td>
                    <td>{{ number_format($receipt->amount, 2, ',', '.') }} €</td>
                    <td>{{ number_format($receipt->tax_amount, 2, ',', '.') }} €</td>
                    <td>{{ number_format($receipt->amount + $receipt->tax_amount, 2, ',', '.') }} €</td>
                    <td>{{ $receipt->date }}</td>
                    <td>{{ $receipt->description }}</td>
                    <td>
                        <button wire:click="editReceipt({{ $receipt->id }})" class="btn btn-warning btn-sm">Bearbeiten</button>
                        <button wire:click="deleteReceipt({{ $receipt->id }})" class="btn btn-danger btn-sm">Löschen</button>
                        <a href="{{ asset('storage/' . $receipt->pdf_path) }}" target="_blank" class="btn btn-primary btn-sm">
                            PDF Herunterladen
                        </a>
                        <button wire:click="sendWhatsApp({{ $receipt->id }})" class="btn btn-success btn-sm">WhatsApp</button>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>


    {{ $receipts->links() }}
</div>
