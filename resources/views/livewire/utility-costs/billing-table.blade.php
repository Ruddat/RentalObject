<div>
    <h2>Abrechnung erstellen</h2>

    <!-- Formular zur Eingabe der Abrechnungsdetails -->
    <form wire:submit.prevent="calculateBilling">
        <div>
            <label for="rental_object_id">Mietobjekt:</label>
            <select wire:model="rental_object_id" id="rental_object_id" required>
                <option value="">Wählen...</option>
                @foreach(App\Models\RentalObject::all() as $object)
                    <option value="{{ $object->id }}">{{ $object->address }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="billing_date">Abrechnungsdatum:</label>
            <input type="date" wire:model="billing_date" id="billing_date" required>
        </div>

        <div>
            <label for="billing_type">Abrechnungstyp:</label>
            <select wire:model="billing_type" id="billing_type" required>
                <option value="units">Einheiten</option>
                <option value="people">Personen</option>
            </select>
        </div>

        <div>
            <button type="submit">Abrechnung berechnen und speichern</button>
        </div>
    </form>

    <!-- Anzeige der berechneten Abrechnungssumme -->
    @if ($total_amount)
        <h3>Berechnete Gesamtkosten: €{{ number_format($total_amount, 2) }}</h3>
    @endif

    <!-- Tabelle zur Anzeige der Abrechnungsverläufe -->
    <h3>Vergangene Abrechnungen</h3>
    <table>
        <thead>
            <tr>
                <th>Mietobjekt</th>
                <th>Datum</th>
                <th>Abrechnungstyp</th>
                <th>Gesamtkosten (€)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($billingRecords as $record)
                <tr>
                    <td>{{ $record->rental_object->address }}</td>
                    <td>{{ $record->billing_date }}</td>
                    <td>{{ $record->billing_type === 'units' ? 'Einheiten' : 'Personen' }}</td>
                    <td>€{{ number_format($record->total_amount, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
