<?php

namespace App\Livewire\Frontend\RentalObject;

use Livewire\Component;

class PricesAndCosts extends Component
{
    public $prices = [
        'purchasePrice' => '',
        'additionalInformation' => '',
        'maintenanceFee' => '',
        'pricePerSquareMeter' => '',
        'parkingSlots' => '',
        'parkingPrice' => '',
        'multipleOfRent' => '',
        'historicPreservation' => false,
        'renovationDepreciation' => false,
        'capitalInvestment' => false,
        'coldRent' => '',
        'utilities' => '',
        'heatingCosts' => '',
        'noSpecification' => '',
        'warmRent' => '',
        'pricepersqm' => '',
        'numberParkingSpaces' => '',
        'priceParkingSpace' => '',
        'Deposit' => '',
    ];

    public $transactionType = null;

    protected $rules = [
        'prices.purchasePrice' => 'required|numeric|max:100000000000',
        'prices.additionalInformation' => 'nullable|string|in:onRequest,negotiable,minimumPrice',
        'prices.maintenanceFee' => 'nullable|numeric|max:100000000000',
        'prices.pricePerSquareMeter' => 'nullable|numeric|max:100000000000',
        'prices.parkingSlots' => 'nullable|integer|max:9999',
        'prices.parkingPrice' => 'nullable|numeric|max:100000000000',
        'prices.multipleOfRent' => 'nullable|numeric|max:100000000000',
        'prices.historicPreservation' => 'boolean',
        'prices.renovationDepreciation' => 'boolean',
        'prices.capitalInvestment' => 'boolean',
        'prices.coldRent' => 'required|numeric|max:100000000000',
        'prices.utilities' => 'required|numeric|max:100000000000',
        'prices.heatingCosts' => 'nullable|numeric|max:100000000000',
        'prices.noSpecification' => 'nullable|string',
        'prices.warmRent' => 'nullable|numeric|max:100000000000',
        'prices.pricepersqm' => 'nullable|numeric|max:100000000000',
        'prices.numberParkingSpaces' => 'nullable|integer|max:9999',
        'prices.priceParkingSpace' => 'nullable|numeric|max:100000000000',
        'prices.Deposit' => 'nullable|numeric|max:100000000000',
    ];

    protected $listeners = ['syncPrices', 'updateTransactionType', 'validatePricesRequest'];

    public function syncPrices($prices)
    {
        $this->prices = $prices; // Update local state with parent data
    }

    public function updateTransactionType($transactionType)
    {
        \Log::info('Received Transaction Type:', $transactionType);
        $this->transactionType = $transactionType;

        // Reset fields for "renditeobjekt"
        if ($transactionType === 'renditeobjekt' || $transactionType === null) {
            $this->prices = array_fill_keys(array_keys($this->prices), null);
        }
    }

    public function validatePricesRequest()
    {

      //  dd($this->prices);

        try {
            $this->validate(); // Validierung ausführen
            $this->dispatch('pricesValidationResponse', true); // Validierung erfolgreich
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('pricesValidationResponse', false); // Validierung fehlgeschlagen
        }
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        $this->dispatch('updatePrices', $this->prices); // Send updated prices to the parent component
    }

    public function render()
    {
        return view('livewire.frontend.rental-object.prices-and-costs');
    }
}
