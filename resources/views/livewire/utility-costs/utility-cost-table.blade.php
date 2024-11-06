<div class="main-content mt-5">
    <div class="main-content-inner">
        <div class="button-show-hide show-mb">
            <span class="body-1">Show Dashboard</span>
        </div>

        <h2 class="mb-4">Nebenkostenpositionen verwalten</h2>

        <!-- Formular zur Eingabe neuer Positionen oder zum Bearbeiten -->
        <div class="widget-box-2">
            <h5 class="title mb-3">{{ $editMode ? 'Position bearbeiten' : 'Neue Position hinzufügen' }}</h5>
            <form wire:submit.prevent="{{ $editMode ? 'updateUtilityCost' : 'addUtilityCost' }}" class="form-box mb-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Name der Position:</label>
                    <input type="text" wire:model="name" id="name" class="form-control" required>
                    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Beschreibung:</label>
                    <textarea wire:model="description" id="description" class="form-control"></textarea>
                    @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="amount" class="form-label">Betrag (€):</label>
                    <input type="number" step="0.01" wire:model="amount" id="amount" class="form-control" required>
                    @error('amount') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="distribution_key" class="form-label">Verteilerschlüssel:</label>
                    <select wire:model="distribution_key" id="distribution_key" class="form-select" required>
                        <option value="units">Einheiten</option>
                        <option value="people">Personenanzahl</option>
                        <option value="area">Wohnfläche</option>
                        <option value="consumption">Nach Verbrauch</option>
                    </select>
                    @error('distribution_key') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        {{ $editMode ? 'Position aktualisieren' : 'Position hinzufügen' }}
                    </button>
                    @if ($editMode)
                        <button type="button" wire:click="resetFields" class="btn btn-secondary">Abbrechen</button>
                    @endif
                </div>
            </form>
        </div>

        <!-- Tabelle zur Anzeige der Positionen mit Bearbeiten- und Löschen-Optionen -->
        <div class="widget-box-2 table-responsive">
            <h5 class="title mb-3">Nebenkostenpositionen</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th class="d-none d-md-table-cell">Beschreibung</th> <!-- Beschreibung wird auf kleinen Bildschirmen ausgeblendet -->
                        <th>Betrag (€)</th>
                        <th>Verteilerschlüssel</th>
                        <th>Aktionen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($utilityCosts as $cost)
                    <tr>
                        <td>{{ $cost->name }}</td>
                        <td class="d-none d-md-table-cell">{!! nl2br(e(wordwrap($cost->description, 50, "\n"))) !!}</td> <!-- Hier wird ein Zeilenumbruch hinzugefügt und die Spalte bleibt responsiv -->
                        <td>{{ number_format($cost->amount, 2, ',', '.') }}</td>
                        <td>
                            @if ($cost->distribution_key == 'units')
                                Einheiten
                            @elseif ($cost->distribution_key == 'people')
                                Personenanzahl
                            @elseif ($cost->distribution_key == 'area')
                                Wohnfläche
                            @elseif ($cost->distribution_key == 'consumption')
                                Nach Verbrauch
                            @endif
                        </td>
                        <td>
                            <button wire:click="editUtilityCost({{ $cost->id }})" class="btn btn-sm btn-warning">Bearbeiten</button>
                            <button wire:click="deleteUtilityCost({{ $cost->id }})" class="btn btn-sm btn-danger" onclick="return confirm('Möchten Sie diese Position wirklich löschen?')">Löschen</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    <!-- Footer -->
    <div class="footer-dashboard footer-dashboard-2 mt-4">
        <p>Copyright © 2024 Home Lengo</p>
    </div>
</div>
