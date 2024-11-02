<?php

namespace App\Livewire\UtilityCosts;

use Livewire\Component;
use App\Models\RentalObject;

class BillingTable extends Component
{
    public $rental_object_id;
    public $billing_date;
    public $billing_type;
    public $total_amount;
    public $billingRecords;

    public function mount()
    {
        $this->billingRecords = BillingRecord::all();
    }

    public function calculateBilling()
    {
        $rentalObject = RentalObject::find($this->rental_object_id);
        $tenants = $rentalObject->tenants;

        $totalAmount = 0;
        $costs = UtilityCost::all();

        foreach ($tenants as $tenant) {
            $factor = ($this->billing_type === 'units') ? $tenant->unit_count : $tenant->person_count;
            foreach ($costs as $cost) {
                $totalAmount += $cost->amount * $factor;
            }
        }

        // Speichern der Abrechnung
        BillingRecord::create([
            'rental_object_id' => $this->rental_object_id,
            'billing_date' => $this->billing_date,
            'billing_type' => $this->billing_type,
            'total_amount' => $totalAmount,
        ]);

        $this->total_amount = $totalAmount;
        $this->billingRecords = BillingRecord::all();
    }

    public function render()
    {
        return view('livewire.utility-costs.billing-table');
    }
}

