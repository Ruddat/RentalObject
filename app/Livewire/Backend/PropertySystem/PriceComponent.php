<?php

namespace App\Livewire\Backend\PropertySystem;

use Livewire\Component;

class PriceComponent extends Component
{
    public $price;
    public $currencyUnit; // Korrigiert von unitPrice zu currencyUnit
    public $pricePostfix;
    public $beforePriceLabel;
    public $afterPriceLabel;

    protected $rules = [
        'price' => 'required|numeric|min:0',
        'currencyUnit' => 'nullable|string|max:10', // Korrigiert von unitPrice zu currencyUnit
        'pricePostfix' => 'nullable|string|max:20',
        'beforePriceLabel' => 'nullable|string|max:50',
        'afterPriceLabel' => 'nullable|string|max:50',
    ];

    public function submitPrice() // Korrigiert von addPrice zu submitPrice
    {
        $this->validate();

        // Preisangaben an die Hauptkomponente senden
        $this->dispatch('priceAdded', [
            'price' => $this->price,
            'currencyUnit' => $this->currencyUnit, // Korrigiert von unitPrice zu currencyUnit
            'pricePostfix' => $this->pricePostfix,
            'beforePriceLabel' => $this->beforePriceLabel,
            'afterPriceLabel' => $this->afterPriceLabel,
        ]);

        // Felder zurücksetzen
        $this->reset();
    }

    public function render()
    {
        return view('livewire.backend.property-system.price-component');
    }
}
