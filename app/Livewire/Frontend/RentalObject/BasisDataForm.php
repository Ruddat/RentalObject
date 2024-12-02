<?php

namespace App\Livewire\Frontend\RentalObject;

use Log;
use Livewire\Component;

class BasisDataForm extends Component
{
    public $data = [
        'area' => '',
        'landArea' => '',
        'rooms' => '',
        'referenceNumber' => '',
        'divisibleMin' => '',
        'divisibleMax' => '',
        'furniture' => 'False', // Default: unmöbliert
        'position' => '0', // Default: keine Angabe
        'availableFrom' => '',
        'availableTo' => '',
        'maxPersons' => '',
        'wgSize' => '2', // Default: 2er WG
        'buildYear' => '',
        'moveIn' => '',
        'seats' => '',
        'floor' => '0', // Default: keine Angabe
        'windowArea' => '',
        'minLease' => '',
        'preferencesGender' => '',
        'preferencesAgeFrom' => '',
        'preferencesAgeTo' => '',
    ];

    public $transactionType;
    public $propertyTypeName;

    public function mount($transactionType, $data, $propertyTypeName = null)
    {
        $this->transactionType = $transactionType;
        $this->data = $data;

        // Wenn `propertyTypeName` leer ist, versuche es aus `data` zu holen
        $this->propertyTypeName = $propertyTypeName ?? $this->data['propertyTypeName'] ?? null;

        // Debug: Logge den Namen
        \Log::info('Property Type Name in mount:', [$this->propertyTypeName]);
    }

    protected $rules = [
        'data.area' => 'nullable|numeric|max:100000000000',
        'data.landArea' => 'nullable|numeric|max:100000000000',
        'data.rooms' => 'nullable|numeric|max:100',
        'data.referenceNumber' => 'nullable|string|max:50',
        'data.divisibleMin' => 'nullable|numeric|max:100000000000',
        'data.divisibleMax' => 'nullable|numeric|max:100000000000',
        'data.furniture' => 'in:True,False',
        'data.position' => 'in:0,1,2,3,4',
        'data.availableFrom' => 'nullable|date',
        'data.availableTo' => 'nullable|date',
        'data.maxPersons' => 'nullable|integer|max:100',
        'data.wgSize' => 'in:2,3,4,5,6,7,8,9,10,11,12,13,14,15,16',
        'data.buildYear' => 'nullable|numeric|max:9999',
        'data.moveIn' => 'nullable|string|max:50',
        'data.seats' => 'nullable|integer|max:999',
        'data.floor' => 'nullable|integer|max:50',
        'data.windowArea' => 'nullable|numeric|max:100000000000',
        'data.minLease' => 'nullable|integer|max:999',
        'data.preferencesGender' => 'nullable|in:,w,m',
        'data.preferencesAgeFrom' => 'nullable|integer|min:0|max:150',
        'data.preferencesAgeTo' => 'nullable|integer|min:0|max:150',
    ];



    protected $listeners = ['syncBasisData', 'updateDataType'];

    public function syncBasisData($data)
    {
        $this->data = $data; // Update local state with parent data
    }

    public function updateDataType($transactionType)
    {
        Log::info('Received Transaction Type:', $transactionType);
        $this->transactionType = $transactionType;

        // Reset fields for "renditeobjekt"
        if ($transactionType === 'renditeobjekt' || $transactionType === null) {
            $this->data = array_fill_keys(array_keys($this->data), null);
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        $this->dispatch('updateBasisData', $this->data); // Send updated prices to the parent component
    }

    public function updatedTransactionType()
    {
        // Stelle sicher, dass `propertyTypeName` basierend auf `transactionType` gesetzt wird
        $this->propertyTypeName = $this->getPropertyTypeName();

        // Debugging, um sicherzustellen, dass der Name korrekt geladen wird
        Log::info('Property Type Name:', [$this->propertyTypeName]);

        // Dynamisch Felder basierend auf `propertyTypeName` laden
        $fieldConfig = config('form_fields.' . $this->propertyTypeName, []);
        $rules = [];

        foreach ($fieldConfig as $field) {
            switch ($field) {
                case 'area':
                    $rules['data.area'] = 'nullable|numeric|max:100000000000';
                    break;
                case 'landArea':
                    $rules['data.landArea'] = 'nullable|numeric|max:100000000000';
                    break;
                case 'rooms':
                    $rules['data.rooms'] = 'nullable|numeric|max:100';
                    break;
                case 'referenceNumber':
                    $rules['data.referenceNumber'] = 'nullable|string|max:50';
                    break;
                case 'divisibleMin':
                    $rules['data.divisibleMin'] = 'nullable|numeric|max:100000000000';
                    $rules['data.divisibleMax'] = 'nullable|numeric|max:100000000000';
                    break;
                case 'divisibleMax':
                    $rules['data.divisibleMax'] = 'nullable|numeric|max:100000000000';
                    break;
                case 'furniture':
                    $rules['data.furniture'] = 'in:True,False';
                    break;
                case 'position':
                    $rules['data.position'] = 'in:0,1,2,3,4';
                    break;
                case 'availableFrom':
                    $rules['data.availableFrom'] = 'nullable|date';
                    break;
                case 'availableTo':
                    $rules['data.availableTo'] = 'nullable|date';
                    break;
                case 'maxPersons':
                    $rules['data.maxPersons'] = 'nullable|integer|max:100';
                    break;
                case 'wgSize':
                    $rules['data.wgSize'] = 'in:2,3,4,5,6,7,8,9,10,11,12,13,14,15,16';
                    break;
                case 'buildYear':
                    $rules['data.buildYear'] = 'nullable|numeric|max:9999';
                    break;
                case 'moveIn':
                    $rules['data.moveIn'] = 'nullable|string|max:50';
                    break;
                case 'seats':
                    $rules['data.seats'] = 'nullable|integer|max:999';
                    break;
                case 'floor':
                    $rules['data.floor'] = 'nullable|integer|max:50';
                    break;
                case 'windowArea':
                    $rules['data.windowArea'] = 'nullable|numeric|max:100000000000';
                    break;
                case 'minLease':
                    $rules['data.minLease'] = 'nullable|integer|max:999';
                    break;
                case 'preferencesGender':
                    $rules['data.preferencesGender'] = 'nullable|in:,w,m';
                    break;
                case 'preferencesAgeFrom':
                    $rules['data.preferencesAgeFrom'] = 'nullable|integer|min:0|max:150';
                    break;
                case 'preferencesAgeTo':
                    $rules['data.preferencesAgeTo'] = 'nullable|integer|min:0|max:150';
                    break;


                // Weitere Regeln ...
            }
        }

        $this->rules = $rules;

        // Debugging, um sicherzustellen, dass Regeln korrekt erstellt werden
        \Log::info('Generated Rules:', $this->rules);
    }


    public function render()
    {
        return view('livewire.frontend.rental-object.basis-data-form');
    }
}
