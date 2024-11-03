<?php

namespace App\Livewire\UtilityCosts;

use Carbon\Carbon;
use App\Models\Tenant;
use Livewire\Component;
use App\Models\RentalObject;
use App\Models\TenantPayment;

class TenantPayments extends Component
{
    public $tenant_id;
    public $rental_object_id;
    public $year;
    public $month;
    public $amount;
    public $editMode = false;
    public $editId;
    public $sortedByTenant = false;

    public $tenants;
    public $rentalObjects;
    public $payments;
    public $availableYears = [];
    public $availableMonths = [];

    protected $rules = [
        'tenant_id' => 'required|exists:tenants,id',
        'rental_object_id' => 'required|exists:rental_objects,id',
        'year' => 'required|integer|digits:4',
        'month' => 'required|integer|between:1,12',
        'amount' => 'required|numeric|min:0',
    ];

    public function mount()
    {
        $this->tenants = Tenant::all();
        $this->rentalObjects = RentalObject::all();
        $this->loadPayments();
    }

    public function updatedTenantId()
    {
        $tenant = Tenant::find($this->tenant_id);
        if ($tenant) {
            $this->generateAvailableYearsAndMonths($tenant);
        }
        $this->loadPayments();
    }

    public function generateAvailableYearsAndMonths($tenant)
    {
        $startDate = Carbon::parse($tenant->start_date);
        $endDate = $tenant->end_date ? Carbon::parse($tenant->end_date) : Carbon::now();

        $this->availableYears = range($startDate->year, $endDate->year);

        if ($this->year == $startDate->year) {
            $this->availableMonths = range($startDate->month, 12);
        } elseif ($this->year == $endDate->year) {
            $this->availableMonths = range(1, $endDate->month);
        } else {
            $this->availableMonths = range(1, 12);
        }
    }

    public function loadPayments()
    {
        $query = TenantPayment::with('tenant', 'rentalObject');

        if ($this->tenant_id) {
            $query->where('tenant_id', $this->tenant_id);
        }

        $this->payments = $this->sortedByTenant
            ? $query->orderBy('tenant_id')->get()
            : $query->get();
    }

    public function savePayment()
    {
        $this->validate();

        $existingPayment = TenantPayment::where('tenant_id', $this->tenant_id)
            ->where('year', $this->year)
            ->where('month', $this->month)
            ->first();

        if ($existingPayment && !$this->editMode) {
            session()->flash('error', 'Für diesen Monat und Jahr existiert bereits ein Eintrag.');
            return;
        }

        if ($this->editMode) {
            $payment = TenantPayment::find($this->editId);
            $payment->update([
                'tenant_id' => $this->tenant_id,
                'rental_object_id' => $this->rental_object_id,
                'year' => $this->year,
                'month' => $this->month,
                'amount' => $this->amount,
            ]);
        } else {
            TenantPayment::create([
                'tenant_id' => $this->tenant_id,
                'rental_object_id' => $this->rental_object_id,
                'year' => $this->year,
                'month' => $this->month ?? 1,
                'amount' => $this->amount,
            ]);
        }

        $this->resetFields();
        $this->loadPayments();
    }

    public function editPayment($id)
    {
        $payment = TenantPayment::findOrFail($id);
        $this->editMode = true;
        $this->editId = $payment->id;
        $this->tenant_id = $payment->tenant_id;
        $this->rental_object_id = $payment->rental_object_id;
        $this->year = $payment->year;
        $this->month = $payment->month;
        $this->amount = $payment->amount;

        $this->generateAvailableYearsAndMonths($payment->tenant);
    }

    public function deletePayment($id)
    {
        TenantPayment::findOrFail($id)->delete();
        $this->loadPayments();
    }

    public function sortByTenant()
    {
        $this->sortedByTenant = !$this->sortedByTenant;
        $this->loadPayments();
    }

    public function resetFields()
    {
        $this->reset(['amount', 'editMode', 'editId']);
    }

    public function render()
    {
        return view('livewire.utility-costs.tenant-payments');
    }
}
