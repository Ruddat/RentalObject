<div>
    <!-- Flash-Messages -->
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <!-- Filter und Suche -->
    <div class="mb-3">
        <input type="text" wire:model.debounce.500ms="search" class="form-control" placeholder="Kunden suchen...">
        <button wire:click="toggleFilter" class="btn btn-secondary mt-2">
            {{ $filterActive ? 'Inaktive Kunden anzeigen' : 'Aktive Kunden anzeigen' }}
        </button>
        <button wire:click="exportCustomers" class="btn btn-success mt-2">Kunden exportieren</button>
    </div>

    <!-- Button für neues Kundenformular -->
    <button wire:click="resetCustomerForm" class="btn btn-primary mb-3">
        {{ $isEditMode ? 'Kunde bearbeiten' : 'Neuen Kunden hinzufügen' }}
    </button>

    <!-- Kundenformular -->
    @if ($showForm)
        <form wire:submit.prevent="{{ $isEditMode ? 'updateCustomer' : 'createCustomer' }}" class="mb-4">
            <!-- Name -->
            <div class="form-group">
                <label>Name</label>
                <input type="text" wire:model="newCustomer.name" class="form-control">
                @error('newCustomer.name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <!-- Email -->
            <div class="form-group">
                <label>Email</label>
                <input type="email" wire:model="newCustomer.email" class="form-control">
                @error('newCustomer.email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <!-- Phone -->
            <div class="form-group">
                <label>Telefon</label>
                <input type="text" wire:model="newCustomer.phone" class="form-control">
                @error('newCustomer.phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <!-- Address -->
            <div class="form-group">
                <label>Adresse</label>
                <input type="text" wire:model="newCustomer.address" class="form-control">
                @error('newCustomer.address') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <!-- City -->
            <div class="form-group">
                <label>Stadt</label>
                <input type="text" wire:model="newCustomer.city" class="form-control">
                @error('newCustomer.city') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <!-- Postal Code -->
            <div class="form-group">
                <label>Postleitzahl</label>
                <input type="text" wire:model="newCustomer.postal_code" class="form-control">
                @error('newCustomer.postal_code') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <!-- Country -->
            <div class="form-group">
                <label>Land</label>
                <input type="text" wire:model="newCustomer.country" class="form-control">
                @error('newCustomer.country') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <!-- Customer Type -->
            <div class="form-group">
                <label>Kundentyp</label>
                <select wire:model="newCustomer.customer_type" class="form-control">
                    <option value="private">Privat</option>
                    <option value="business">Geschäftlich</option>
                </select>
                @error('newCustomer.customer_type') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <!-- Company Name -->
            <div class="form-group">
                <label>Firmenname</label>
                <input type="text" wire:model="newCustomer.company_name" class="form-control">
                @error('newCustomer.company_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <!-- VAT Number -->
            <div class="form-group">
                <label>Umsatzsteuer-ID</label>
                <input type="text" wire:model="newCustomer.vat_number" class="form-control">
                @error('newCustomer.vat_number') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <!-- Payment Terms -->
            <div class="form-group">
                <label>Zahlungsbedingungen</label>
                <input type="text" wire:model="newCustomer.payment_terms" class="form-control">
                @error('newCustomer.payment_terms') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <!-- Notes -->
            <div class="form-group">
                <label>Notizen</label>
                <textarea wire:model="newCustomer.notes" class="form-control"></textarea>
                @error('newCustomer.notes') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <!-- Is Active -->
            <div class="form-group">
                <label>Aktiv</label>
                <input type="checkbox" wire:model="newCustomer.is_active" class="form-check-input">
                @error('newCustomer.is_active') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-success">{{ $isEditMode ? 'Kunde aktualisieren' : 'Kunde speichern' }}</button>
            <button type="button" wire:click="cancelEdit" class="btn btn-secondary">Abbrechen</button>
        </form>
    @endif

    <!-- Kundenliste -->
    <table class="table table-responsive-sm">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Typ</th>
                <th>Land</th>
                <th>Aktiv</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ ucfirst($customer->customer_type) }}</td>
                    <td>{{ $customer->country }}</td>
                    <td>
                        <button wire:click="toggleActive({{ $customer->id }})" class="btn btn-sm {{ $customer->is_active ? 'btn-success' : 'btn-secondary' }}">
                            {{ $customer->is_active ? 'Aktiv' : 'Inaktiv' }}
                        </button>
                    </td>
                    <td>
                        <button wire:click="editCustomer({{ $customer->id }})" class="btn btn-warning btn-sm">Bearbeiten</button>
                        <button onclick="confirmDelete({{ $customer->id }})" class="btn btn-danger btn-sm">Löschen</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Keine Kunden gefunden</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-3">
        {{ $customers->links() }}
    </div>

    <!-- SweetAlert2 für Lösch-Bestätigung -->
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Kunde löschen?',
                text: 'Möchten Sie diesen Kunden wirklich löschen?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ja, löschen!'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.call('deleteCustomer', id);
                }
            });
        }
    </script>
    @endpush
</div>
