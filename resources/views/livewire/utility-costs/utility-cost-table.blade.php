<div class="container mt-5">
    <h2 class="mb-4">Nebenkostenpositionen verwalten</h2>

    <!-- Formular zur Eingabe neuer Positionen oder zum Bearbeiten -->
    <form wire:submit.prevent="{{ $editMode ? 'updateUtilityCost' : 'addUtilityCost' }}" class="mb-4">
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
            </select>
            @error('distribution_key') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            {{ $editMode ? 'Position aktualisieren' : 'Position hinzufügen' }}
        </button>
        @if ($editMode)
            <button type="button" wire:click="resetFields" class="btn btn-secondary">Abbrechen</button>
        @endif
    </form>

    <!-- Tabelle zur Anzeige der Positionen mit Bearbeiten- und Löschen-Optionen -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Beschreibung</th>
                <th>Betrag (€)</th>
                <th>Verteilerschlüssel</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($utilityCosts as $cost)
                <tr>
                    <td>{{ $cost->name }}</td>
                    <td>{{ $cost->description }}</td>
                    <td>{{ number_format($cost->amount, 2, ',', '.') }}</td>
                    <td>{{ $cost->distribution_key }}</td>
                    <td>
                        <button wire:click="editUtilityCost({{ $cost->id }})" class="btn btn-sm btn-warning">Bearbeiten</button>
                        <button wire:click="deleteUtilityCost({{ $cost->id }})" class="btn btn-sm btn-danger" onclick="return confirm('Möchten Sie diese Position wirklich löschen?')">Löschen</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
