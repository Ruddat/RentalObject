<div>
    <h4>Rechnungsköpfe</h4>
    <button wire:click="$set('showForm', true)" class="btn btn-primary mb-3">Neuen Rechnungskopf erstellen</button>

    @if ($showForm)
        <form wire:submit.prevent="saveInvoiceHeader">
            <!-- Vorhandene Felder -->
            <div class="form-group">
                <label>Vorname</label>
                <input type="text" wire:model="invoiceHeader.first_name" class="form-control">
                @error('invoiceHeader.first_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <!-- Weitere Felder hier einfügen -->
            <div class="form-group">
                <label>Nachname</label>
                <input type="text" wire:model="invoiceHeader.last_name" class="form-control">
                @error('invoiceHeader.last_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Firmenname</label>
                <input type="text" wire:model="invoiceHeader.company_name" class="form-control">
                @error('invoiceHeader.company_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>E-Mail</label>
                <input type="email" wire:model="invoiceHeader.email" class="form-control">
                @error('invoiceHeader.email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Telefon</label>
                <input type="text" wire:model="invoiceHeader.phone" class="form-control">
                @error('invoiceHeader.phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Adresse</label>
                <input type="text" wire:model="invoiceHeader.address" class="form-control">
                @error('invoiceHeader.address') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Stadt</label>
                <input type="text" wire:model="invoiceHeader.city" class="form-control">
                @error('invoiceHeader.city') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Postleitzahl</label>
                <input type="text" wire:model="invoiceHeader.postal_code" class="form-control">
                @error('invoiceHeader.postal_code') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Land</label>
                <input type="text" wire:model="invoiceHeader.country" class="form-control">
                @error('invoiceHeader.country') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Steuernummer</label>
                <input type="text" wire:model="invoiceHeader.tax_number" class="form-control">
                @error('invoiceHeader.tax_number') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Bankname</label>
                <input type="text" wire:model="invoiceHeader.bank_name" class="form-control">
                @error('invoiceHeader.bank_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Bankverbindung</label>
                <input type="text" wire:model="invoiceHeader.bank_account" class="form-control">
                @error('invoiceHeader.bank_account') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>IBAN</label>
                <input type="text" wire:model="invoiceHeader.iban" class="form-control">
                @error('invoiceHeader.iban') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>BIC</label>
                <input type="text" wire:model="invoiceHeader.bic" class="form-control">
                @error('invoiceHeader.bic') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>PayPal-Konto</label>
                <input type="text" wire:model="invoiceHeader.paypal_account" class="form-control">
                @error('invoiceHeader.paypal_account') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Banküberweisung akzeptieren</label>
                <input type="checkbox" wire:model="invoiceHeader.accept_bank_transfer" class="form-check-input">
                @error('invoiceHeader.accept_bank_transfer') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>PayPal akzeptieren</label>
                <input type="checkbox" wire:model="invoiceHeader.accept_paypal" class="form-check-input">
                @error('invoiceHeader.accept_paypal') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Website</label>
                <input type="text" wire:model="invoiceHeader.website" class="form-control">
                @error('invoiceHeader.website') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Notizen</label>
                <textarea wire:model="invoiceHeader.notes" class="form-control"></textarea>
                @error('invoiceHeader.notes') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Logo-Upload -->
            <div class="form-group mt-2">
                <label>Logo</label>
                <input type="file" wire:model="logo" class="form-control">
                @error('logo') <span class="text-danger">{{ $message }}</span> @enderror
                @if ($logo)
                    <div class="mt-2">
                        <img src="{{ $logo->temporaryUrl() }}" alt="Logo Vorschau" class="img-thumbnail" width="100">
                    </div>
                @elseif (isset($invoiceHeader['logo_path']))
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $invoiceHeader['logo_path']) }}" alt="Aktuelles Logo" class="img-thumbnail" width="100">
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-success">Speichern</button>
            <button type="button" wire:click="$set('showForm', false)" class="btn btn-secondary">Abbrechen</button>
        </form>
    @endif

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Firma</th>
                <th>E-Mail</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoiceHeaders as $header)
                <tr>
                    <td>{{ $header->first_name }}</td>
                    <td>{{ $header->last_name }}</td>
                    <td>{{ $header->company_name }}</td>
                    <td>{{ $header->email }}</td>
                    <td>
                        <button wire:click="edit({{ $header->id }})" class="btn btn-warning btn-sm">Bearbeiten</button>
                        <button wire:click="delete({{ $header->id }})" class="btn btn-danger btn-sm">Löschen</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
