<div class="main-content">
    <div class="main-content-inner">
        <div class="button-show-hide show-mb">
            <span class="body-1">Show Dashboard</span>
        </div>


        <!-- Toggle Button for the Form -->
        <button wire:click="toggleForm" class="btn btn-primary mb-3">
            {{ $showForm ? 'Formular ausblenden' : 'Abrechnungskopf hinzufügen' }}
        </button>

        <!-- Form zur Abrechnungskopfverwaltung -->
        @if($showForm)
        <div class="widget-box-2">
            <h2 class="title">Abrechnungskopf hinzufügen</h2>

            <form wire:submit.prevent="saveHeader">
                <!-- Eingabefelder für Name, Vorname, Adresse, etc. -->
                <div class="mb-3">
                    <label for="creator_name" class="form-label">Name</label>
                    <input type="text" wire:model="creator_name" id="creator_name" class="form-control">
                    @error('creator_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="first_name" class="form-label">Vorname</label>
                    <input type="text" wire:model="first_name" id="first_name" class="form-control">
                    @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label for="street" class="form-label">Straße</label>
                        <input type="text" wire:model="street" id="street" class="form-control">
                        @error('street') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="house_number" class="form-label">Hausnummer</label>
                        <input type="text" wire:model="house_number" id="house_number" class="form-control">
                        @error('house_number') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="zip_code" class="form-label">PLZ</label>
                        <input type="text" wire:model="zip_code" id="zip_code" class="form-control">
                        @error('zip_code') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-8 mb-3">
                        <label for="city" class="form-label">Ort</label>
                        <input type="text" wire:model="city" id="city" class="form-control">
                        @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Telefon (optional)</label>
                    <input type="text" wire:model="phone" id="phone" class="form-control">
                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-Mail (optional)</label>
                    <input type="email" wire:model="email" id="email" class="form-control">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="bank_name" class="form-label">Bankname (optional)</label>
                    <input type="text" wire:model="bank_name" id="bank_name" class="form-control">
                    @error('bank_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="iban" class="form-label">IBAN (optional)</label>
                    <input type="text" wire:model="iban" id="iban" class="form-control">
                    @error('iban') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="bic" class="form-label">BIC (optional)</label>
                    <input type="text" wire:model="bic" id="bic" class="form-control">
                    @error('bic') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="footer_text" class="form-label">Fußtext (optional)</label>
                    <textarea wire:model="footer_text" id="footer_text" class="form-control"></textarea>
                    @error('footer_text') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="notes" class="form-label">Notizen</label>
                    <textarea wire:model="notes" id="notes" class="form-control"></textarea>
                    @error('notes') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="logo" class="form-label">Logo (optional)</label>
                    <input type="file" wire:model="logo" id="logo" class="form-control">
                    @error('logo') <span class="text-danger">{{ $message }}</span> @enderror
                    @if ($logoPreview)
                        <img src="{{ $logoPreview }}" alt="Logo Vorschau" class="img-thumbnail mt-2" style="max-width: 150px;">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Abrechnungskopf speichern</button>
            </form>
        </div>
        @endif

        <!-- Gespeicherte Abrechnungsköpfe in der Tabellenstruktur anzeigen -->
        <div class="widget-box-2 mt-4">
            <h5 class="title">Gespeicherte Abrechnungsköpfe</h5>
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Vorname</th>
                            <th>Adresse</th>
                            <th>Telefon</th>
                            <th>E-Mail</th>
                            <th>Logo</th>
                            <th>Aktionen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($billingHeaders as $header)
                            <tr>
                                <td>{{ $header->creator_name }}</td>
                                <td>{{ $header->first_name }}</td>
                                <td>{{ $header->street }} {{ $header->house_number }}, {{ $header->zip_code }} {{ $header->city }}</td>
                                <td>{{ $header->phone ?? '-' }}</td>
                                <td>{{ $header->email ?? '-' }}</td>
                                <td>
                                    @if ($header->logo_path)
                                        <img src="{{ asset('storage/' . $header->logo_path) }}" alt="Logo" class="img-thumbnail" style="max-width: 50px;">
                                    @endif
                                </td>
                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <button wire:click="deleteHeader({{ $header->id }})" class="btn btn-danger icon-btn b-r-4"><i class="ti ti-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
