<div class="widget-box-2 mb-20 bg-primary-yellow">
    <h4>Energieausweis</h4>
    <div class="row">
        <!-- Linke Spalte: Formular -->
        <div class="col-md-6">
            <form wire:submit.prevent="addCertificate">
                <div class="form-group">
                    <label for="name">Bezeichnung</label>
                    <input type="text" id="name" wire:model.lazy="energyCertificates.name" class="form-control">
                    @error('energyCertificates.name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="certificateType">Energieausweis</label>
                    <select id="certificateType" wire:model.lazy="energyCertificates.certificateType" class="form-control">
                        <option value="0">Bitte wählen</option>
                        <option value="ausgestellt ab 01.05.2014">ausgestellt ab 01.05.2014</option>
                        <option value="ausgestellt bis 30.04.2014">ausgestellt bis 30.04.2014</option>
                        <option value="nicht notwendig (Denkmalschutz)">nicht notwendig (Denkmalschutz)</option>
                    </select>
                    @error('energyCertificates.certificateType') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="buildingType">Gebäudetyp</label>
                    <select id="buildingType" wire:model.lazy="energyCertificates.buildingType" class="form-control">
                        <option value="0">Bitte wählen</option>
                        <option value="Wohngebäude">Wohngebäude</option>
                        <option value="Nicht-Wohngebäude">Nicht-Wohngebäude</option>
                    </select>
                    @error('energyCertificates.buildingType') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="certificateArt">Art des Energieausweises</label>
                    <select id="certificateArt" wire:model.lazy="energyCertificates.certificateArt" class="form-control">
                        <option value="0">Bitte wählen</option>
                        <option value="Bedarfsausweis">Bedarfsausweis</option>
                        <option value="Verbrauchsausweis">Verbrauchsausweis</option>
                    </select>
                    @error('energyCertificates.certificateArt') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="issueDate">Ausstelldatum</label>
                    <input type="date" id="issueDate" wire:model.lazy="energyCertificates.issueDate" class="form-control">
                    @error('energyCertificates.issueDate') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="validUntil">Gültig bis</label>
                    <input type="date" id="validUntil" wire:model.lazy="energyCertificates.validUntil" class="form-control">
                    @error('energyCertificates.validUntil') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="energyConsumption">Endenergieverbrauch (kWh/(m²·a))</label>
                    <input type="number" id="energyConsumption" wire:model.lazy="energyCertificates.energyConsumption" class="form-control">
                    @error('energyCertificates.energyConsumption') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="efficiencyClass">Effizienzklasse</label>
                    <select id="efficiencyClass" wire:model.lazy="energyCertificates.efficiencyClass" class="form-control">
                        <option value="">Effizienzklasse wählen</option>
                        @foreach($efficiencyClasses as $class => $range)
                            <option value="{{ $class }}">{{ $class }}</option>
                        @endforeach
                    </select>
                    @error('energyCertificates.efficiencyClass') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-check">
                    <input type="checkbox" id="waterIncluded" wire:model.lazy="energyCertificates.waterIncluded" class="form-check-input">
                    <label for="waterIncluded" class="form-check-label">Energieverbrauch für Warmwasser enthalten</label>
                </div>

                <button type="submit" class="btn btn-primary mt-3">
                    {{ $isEditing ? 'Speichern' : 'Hinzufügen' }}
                </button>
                @if($isEditing)
                    <button type="button" class="btn btn-secondary mt-3" wire:click="cancelEdit">Abbrechen</button>
                @endif
            </form>
        </div>

        <!-- Rechte Spalte: Liste der Energieausweise -->
        <div class="col-md-6">
            <h5>Hinzugefügte Energieausweise</h5>
            @if(!empty($addedCertificates))
                <ul class="list-group">
                    @foreach($addedCertificates as $index => $certificate)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong>Bezeichnung:</strong> {{ $certificate['name'] ?? 'N/A' }}<br>
                                <strong>Energieausweis:</strong> {{ $certificate['certificateType'] ?? 'N/A' }}<br>
                                <strong>Gebäudetyp:</strong> {{ $certificate['buildingType'] ?? 'N/A' }}<br>
                                <strong>Art:</strong> {{ $certificate['certificateArt'] ?? 'N/A' }}
                            </div>
                            <div>
                                <button type="button" class="btn btn-sm btn-warning" wire:click="editCertificate({{ $index }})">Bearbeiten</button>
                                <button type="button" class="btn btn-sm btn-danger" wire:click="deleteCertificate({{ $index }})">Löschen</button>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>Es wurden noch keine Energieausweise hinzugefügt.</p>
            @endif
        </div>
    </div>
</div>
