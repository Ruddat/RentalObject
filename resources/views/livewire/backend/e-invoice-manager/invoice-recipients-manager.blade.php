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
        <input type="text" wire:model.live="search" class="form-control" placeholder="Kunden suchen...">
    </div>
    <div class="app-btn-list">
        <button type="button" wire:click="toggleFilter" class="btn btn-secondary icon-btn mt-2" data-bs-toggle="tooltip"
            data-bs-placement="top" title="{{ $filterActive ? 'Inaktive Kunden anzeigen' : 'Aktive Kunden anzeigen' }}">
            <i class="{{ $filterActive ? 'ti ti-user-x' : 'ti ti-user-check' }}"></i>
        </button>

        <button wire:click="exportCustomers" class="btn btn-success mt-2">Kunden exportieren</button>
        <!-- Button für neues Kundenformular -->
        <button wire:click="resetRecipientForm" class="btn btn-primary mt-2">
            {{ $isEditMode ? 'Kunde bearbeiten' : 'Neuen Kunden hinzufügen' }}
        </button>
    </div>


    <!-- Kundenformular -->
    <!-- Empfängerformular -->
    @if ($showForm)
        <form wire:submit.prevent="{{ $isEditMode ? 'updateRecipient' : 'createRecipient' }}" class="mb-4">
            <!-- User ID -->
            <div class="form-group">
                <label>User ID</label>
                <input type="text" wire:model="recipientData.user_id" class="form-control">
                @error('recipientData.user_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- First Name -->
            <div class="form-group">
                <label>Vorname</label>
                <input type="text" wire:model="recipientData.first_name" class="form-control">
                @error('recipientData.first_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Last Name -->
            <div class="form-group">
                <label>Nachname</label>
                <input type="text" wire:model="recipientData.last_name" class="form-control">
                @error('recipientData.last_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Name -->
            <div class="form-group">
                <label>Vollständiger Name</label>
                <input type="text" wire:model="recipientData.name" class="form-control">
                @error('recipientData.name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Email -->
            <div class="form-group">
                <label>Email</label>
                <input type="email" wire:model="recipientData.email" class="form-control">
                @error('recipientData.email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Phone -->
            <div class="form-group">
                <label>Telefon</label>
                <input type="text" wire:model="recipientData.phone" class="form-control">
                @error('recipientData.phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Address -->
            <div class="form-group">
                <label>Adresse</label>
                <input type="text" wire:model="recipientData.address" class="form-control">
                @error('recipientData.address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- City -->
            <div class="form-group">
                <label>Stadt</label>
                <input type="text" wire:model="recipientData.city" class="form-control">
                @error('recipientData.city')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Postal Code -->
            <div class="form-group">
                <label>Postleitzahl</label>
                <input type="text" wire:model="recipientData.zip_code" class="form-control">
                @error('recipientData.zip_code')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Country -->
            <div class="form-group">
                <label>Land</label>
                <input type="text" wire:model="recipientData.country" class="form-control">
                @error('recipientData.country')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Customer Type -->
            <div class="form-group">
                <label>Kundentyp</label>
                <select wire:model="recipientData.customer_type" class="form-control">
                    <option value="private">Privat</option>
                    <option value="business">Geschäftlich</option>
                </select>
                @error('recipientData.customer_type')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Company Name -->
            <div class="form-group">
                <label>Firmenname</label>
                <input type="text" wire:model="recipientData.company_name" class="form-control">
                @error('recipientData.company_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- VAT Number -->
            <div class="form-group">
                <label>Umsatzsteuer-ID</label>
                <input type="text" wire:model="recipientData.vat_number" class="form-control">
                @error('recipientData.vat_number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Payment Terms -->
            <div class="form-group">
                <label>Zahlungsbedingungen</label>
                <input type="text" wire:model="recipientData.payment_terms" class="form-control">
                @error('recipientData.payment_terms')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Notes -->
            <div class="form-group">
                <label>Notizen</label>
                <textarea wire:model="recipientData.notes" class="form-control"></textarea>
                @error('recipientData.notes')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Is Active -->
            <div class="form-group">
                <label>Aktiv</label>
                <input type="checkbox" wire:model="recipientData.is_active" class="form-check-input">
                @error('recipientData.is_active')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- E-Invoice -->
            <div class="form-group">
                <label>E-Rechnung</label>
                <input type="checkbox" wire:model="recipientData.is_e_invoice" class="form-check-input">
                @error('recipientData.is_e_invoice')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- E-Invoice Format -->
            <div class="form-group">
                <label>E-Rechnungsformat</label>
                <select wire:model="recipientData.e_invoice_format" class="form-control">
                    <option value="">Bitte wählen</option>
                    @foreach ($eInvoiceFormats as $format)
                        <option value="{{ $format }}">{{ $format }}</option>
                    @endforeach
                </select>
                @error('recipientData.e_invoice_format')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- E-Invoice Delivery Method -->
            <div class="form-group">
                <label>Liefermethode</label>
                <select wire:model="recipientData.delivery_method" class="form-control">
                    <option value="">Bitte wählen</option>
                    @foreach ($deliveryMethods as $method)
                        <option value="{{ $method }}">{{ $method }}</option>
                    @endforeach
                </select>
                @error('recipientData.delivery_method')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Rechnungssprache -->
            <div class="form-group">
                <label>Rechnungssprache</label>
                <select wire:model="recipientData.invoice_language" class="form-control">
                    <option value="">Bitte wählen</option>
                    @foreach ($invoiceLanguages as $code => $language)
                        <option value="{{ $code }}">{{ $language }}</option>
                    @endforeach
                </select>
                @error('recipientData.invoice_language')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <!-- IBAN -->
            <div class="form-group">
                <label>IBAN</label>
                <input type="text" wire:model="recipientData.iban" class="form-control">
                @error('recipientData.iban')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- BIC -->
            <div class="form-group">
                <label>BIC</label>
                <input type="text" wire:model="recipientData.bic" class="form-control">
                @error('recipientData.bic')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Default Currency -->
            <div class="form-group">
                <label>Standardwährung</label>
                <input type="text" wire:model="recipientData.default_currency" class="form-control">
                @error('recipientData.default_currency')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Submit Buttons -->
            <button type="submit"
                class="btn btn-success">{{ $isEditMode ? 'Empfänger aktualisieren' : 'Empfänger speichern' }}</button>
            <button type="button" wire:click="cancelEdit" class="btn btn-secondary">Abbrechen</button>
        </form>
    @endif


    <!-- Kundenliste -->


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
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Typ</th>
                                <th scope="col">Land</th>
                                <th scope="col">Aktiv</th>
                                <th scope="col">Aktionen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($recipients as $recipient)
                                <tr>
                                    <td>{{ $recipient->name }}</td>
                                    <td>{{ $recipient->email }}</td>
                                    <td>{{ ucfirst($recipient->customer_type) }}</td>
                                    <td>{{ $recipient->country }}</td>
                                    <td>
                                        <div class="app-btn-list">
                                        <button wire:click="toggleActive({{ $recipient->id }})"
                                            class="btn btn-outline-success position-relative {{ $recipient->is_active ? 'btn-success' : 'btn-secondary' }}">
                                            {{ $recipient->is_active ? 'Aktiv' : 'Inaktiv' }}
                                        </button>
                                        </div>
                                    </td>
                                    <td>
                                        <!-- Bearbeiten-Button mit Icon -->
                                        <button wire:click="editCustomer({{ $recipient->id }})"
                                            class="btn btn-warning btn-sm icon-btn" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Bearbeiten">
                                            <i class="ti ti-pencil"></i>
                                        </button>

                                        <!-- Löschen-Button mit Icon -->
                                        <button onclick="confirmDelete({{ $recipient->id }})"
                                            class="btn btn-danger btn-sm icon-btn" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Löschen">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Keine Kunden gefunden</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $recipients->links() }}
    </div>

    <!-- SweetAlert2 für Lösch-Bestätigung -->
    @assets
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endassets

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
</div>
