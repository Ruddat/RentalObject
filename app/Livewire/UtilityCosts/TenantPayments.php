<?php

namespace App\Livewire\UtilityCosts;

use Carbon\Carbon;
use App\Models\Tenant;
use Livewire\Component;
use App\Models\RentalObject;
use App\Models\TenantPayment;
use Illuminate\Support\Facades\Auth;

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
    public $payment_date;

    protected $rules = [
        'tenant_id' => 'required|exists:tenants,id',
        'rental_object_id' => 'required|exists:rental_objects,id',
        'year' => 'required|integer|digits:4',
        'month' => 'required|integer|between:1,12',
        'amount' => 'required|numeric|min:0',
        'payment_date' => 'nullable|date',
    ];

    public function mount()
    {
        $this->tenants = Tenant::where('user_id', Auth::id())->get();
        $this->rentalObjects = RentalObject::where('user_id', Auth::id())->get();
        $this->loadPayments();

        // Setze das payment_date auf den ersten Tag des aktuellen Monats
        $this->payment_date = now()->startOfMonth()->toDateString();
    }

    public function updatedTenantId()
    {
        $tenant = Tenant::find($this->tenant_id);
        if ($tenant) {
            $this->generateAvailableYearsAndMonths($tenant);
        }
        $this->loadPayments();
    }

    public function updatedYear()
    {
        if ($this->tenant_id) {
            $tenant = Tenant::find($this->tenant_id);
            $this->generateAvailableYearsAndMonths($tenant);
        }
    }

    public function generateAvailableYearsAndMonths($tenant)
    {
        $startDate = Carbon::parse($tenant->start_date);
        $endDate = $tenant->end_date ? Carbon::parse($tenant->end_date) : Carbon::now();

        $this->availableYears = range($startDate->year, $endDate->year);

        // Berechnung der Monate basierend auf dem Jahr und der Mietdauer
        if ($this->year == $startDate->year) {
            $this->availableMonths = range($startDate->month, 12);
        } elseif ($this->year == $endDate->year) {
            $this->availableMonths = range(1, $endDate->month);
        } else {
            $this->availableMonths = range(1, 12);
        }

        // Setzt den Monat auf den ersten verfügbaren, wenn er ungültig ist
        if (!in_array($this->month, $this->availableMonths)) {
            $this->month = $this->availableMonths[0];
        }
    }

    public function loadPayments()
    {
        $query = TenantPayment::with('tenant', 'rentalObject')->where('user_id', Auth::id());

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
            ->where('user_id', Auth::id())
            ->first();

        if ($existingPayment && !$this->editMode) {
            session()->flash('error', 'Für diesen Monat und Jahr existiert bereits ein Eintrag.');
            return;
        }

        // Setze das payment_date auf den ersten Tag des aktuellen Monats, wenn es nicht gesetzt wurde
        if (!$this->payment_date) {
            $this->payment_date = now()->startOfMonth()->toDateString();
        }

        if ($this->editMode) {
            $payment = TenantPayment::where('user_id', Auth::id())->find($this->editId);
            $payment->update([
                'tenant_id' => $this->tenant_id,
                'rental_object_id' => $this->rental_object_id,
                'year' => $this->year,
                'month' => $this->month,
                'amount' => $this->amount,
                'payment_date' => $this->payment_date,
            ]);
        } else {
            TenantPayment::create([
                'user_id' => Auth::id(), // User-ID hinzufügen
                'tenant_id' => $this->tenant_id,
                'rental_object_id' => $this->rental_object_id,
                'year' => $this->year,
                'month' => $this->month,
                'amount' => $this->amount,
                'payment_date' => $this->payment_date,
            ]);
        }

        // Automatisches Hochzählen des Monats, unter Berücksichtigung der Mietdauer
        if ($this->month < 12 && in_array($this->month + 1, $this->availableMonths)) {
            $this->month++;
            // Setze das payment_date auf den ersten Tag des nächsten Monats
            $this->payment_date = Carbon::create($this->year, $this->month, 1)->toDateString();
        } else {
            // Falls Jahrwechsel, nächstes Jahr einstellen und auf den ersten verfügbaren Monat setzen
            if (in_array($this->year + 1, $this->availableYears)) {
                $this->year++;
                $this->month = 1; // Setze den Monat auf Januar
                // Setze das payment_date auf den ersten Tag des neuen Jahres und Monats
                $this->payment_date = Carbon::create($this->year, $this->month, 1)->toDateString();
            }
        }

        $this->loadPayments();
    }

    public function editPayment($id)
    {
        $payment = TenantPayment::where('user_id', Auth::id())->findOrFail($id);
        $this->editMode = true;
        $this->editId = $payment->id;
        $this->tenant_id = $payment->tenant_id;
        $this->rental_object_id = $payment->rental_object_id;
        $this->year = $payment->year;
        $this->month = $payment->month;
        $this->amount = $payment->amount;
        $this->payment_date = $payment->payment_date ?? now()->startOfMonth()->toDateString();

        $this->generateAvailableYearsAndMonths($payment->tenant);
    }

    public function resetFields()
    {
        $this->reset(['tenant_id', 'rental_object_id', 'year', 'month', 'amount', 'payment_date', 'editMode', 'editId']);
        $this->generateAvailableYearsAndMonths(Tenant::find($this->tenant_id));

        // Setze das payment_date auf den ersten Tag des aktuellen Monats
        $this->payment_date = now()->startOfMonth()->toDateString();
    }

    public function deletePayment($id)
    {
        TenantPayment::where('user_id', Auth::id())->findOrFail($id)->delete();
        $this->loadPayments();
    }

    public function sortByTenant()
    {
        $this->sortedByTenant = !$this->sortedByTenant;
        $this->loadPayments();
    }

    public function render()
    {
        return view('livewire.utility-costs.tenant-payments');
    }
}
