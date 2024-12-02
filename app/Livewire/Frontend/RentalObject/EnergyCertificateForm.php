<?php

namespace App\Livewire\Frontend\RentalObject;

use Livewire\Component;

class EnergyCertificateForm extends Component
{
    public $energyCertificates = [
        'name' => '',
        'certificateType' => '0', // Default: Bitte wählen
        'buildingType' => '1',   // Default: Wohngebäude
        'certificateArt' => '0', // Default: Bitte wählen
        'issueDate' => '',
        'validUntil' => '',
        'primaryEnergyCarrier' => '',
        'constructionYear' => '',
        'energyConsumption' => '',
        'efficiencyClass' => '',
        'waterIncluded' => false,
    ];

    protected $messages = [
        'energyCertificates.certificateType.required' => 'Bitte wählen Sie einen Energieausweis-Typ aus.',
        'energyCertificates.buildingType.required' => 'Bitte wählen Sie einen Gebäudetyp aus.',
        'energyCertificates.certificateArt.required' => 'Bitte wählen Sie eine Art des Energieausweises aus.',
    ];

    public $addedCertificates = []; // Array zum Speichern der hinzugefügten Energieausweise
    public $isEditing = false; // Status für Bearbeitungsmodus
    public $editIndex = null; // Index des bearbeiteten Eintrags
    public $existingCertificates = [];


    public $efficiencyClasses = [
        'A+' => [0.01, 29.99],
        'A' => [30.00, 49.99],
        'B' => [50.00, 74.99],
        'C' => [75.00, 99.99],
        'D' => [100.00, 129.99],
        'E' => [130.00, 159.99],
        'F' => [160.00, 199.99],
        'G' => [200.00, 249.99],
        'H' => [250.00, 100000.00],
    ];

    protected $rules = [
        'energyCertificates.name' => 'required|string|max:30',
        'energyCertificates.certificateType' => 'required',
        'energyCertificates.buildingType' => 'required',
        'energyCertificates.certificateArt' => 'required',
        'energyCertificates.issueDate' => 'nullable|date',
        'energyCertificates.validUntil' => 'nullable|date',
        'energyCertificates.primaryEnergyCarrier' => 'nullable|string|max:50',
        'energyCertificates.constructionYear' => 'nullable|numeric|max:9999',
        'energyCertificates.energyConsumption' => 'nullable|numeric|max:200000',
        'energyCertificates.efficiencyClass' => 'nullable|string',
        'energyCertificates.waterIncluded' => 'boolean',
    ];

    public function mount($existingCertificates = [])
    {
        $this->energyCertificates['certificateType'] = '0'; // Standardwert
        $this->energyCertificates['certificateArt'] = '0';  // Standardwert
        $this->addedCertificates = $existingCertificates; // Lade existierende Daten in die Komponente

    }

    public function loadCertificates($certificates)
    {
        $this->addedCertificates = $certificates;
    }

    public function addCertificate()
    {
        if (!$this->isEditing) {
            $this->validate(); // Validierung nur beim Hinzufügen
        }

        $this->addedCertificates[] = $this->energyCertificates;

        $this->resetForm();

        // Validierungsfehler zurücksetzen
        $this->resetValidation();

        // Änderungen an die Hauptkomponente senden
        $this->dispatch('syncEnergyCertificates', $this->addedCertificates);

        session()->flash('success', 'Energieausweis erfolgreich hinzugefügt.');
    }

    public function editCertificate($index)
    {
        $this->isEditing = true;
        $this->editIndex = $index;
        $this->energyCertificates = $this->addedCertificates[$index];
    }

    public function updateCertificate()
    {
        $this->validate();

        $this->addedCertificates[$this->editIndex] = $this->energyCertificates;

        $this->resetForm();

        // Änderungen an die Hauptkomponente senden
        $this->dispatch('syncEnergyCertificates', $this->addedCertificates);

        session()->flash('success', 'Energieausweis erfolgreich aktualisiert.');
    }

    public function deleteCertificate($index)
    {
        unset($this->addedCertificates[$index]);
        $this->addedCertificates = array_values($this->addedCertificates); // Neu indexieren

        // Änderungen an die Hauptkomponente senden
        $this->dispatch('syncEnergyCertificates', $this->addedCertificates);

        session()->flash('success', 'Energieausweis erfolgreich gelöscht.');
    }

    public function cancelEdit()
    {
        $this->resetForm();
    }



    private function resetForm()
    {
        $this->isEditing = false;
        $this->editIndex = null;

        $this->energyCertificates = [
            'name' => '',
            'certificateType' => '',
            'buildingType' => '',
            'certificateArt' => '',
            'issueDate' => '',
            'validUntil' => '',
            'primaryEnergyCarrier' => '',
            'constructionYear' => '',
            'energyConsumption' => '',
            'efficiencyClass' => '',
            'waterIncluded' => false,
        ];
    }



    public function render()
    {
        return view('livewire.frontend.rental-object.energy-certificate-form');
    }
}
