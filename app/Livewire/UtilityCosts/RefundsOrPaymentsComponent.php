<?php

namespace App\Livewire\UtilityCosts;

use App\Models\Tenant;
use Livewire\Component;
use App\Models\RentalObject;
use App\Models\RefundsOrPayments;
use Illuminate\Support\Facades\Auth;

class RefundsOrPaymentsComponent extends Component
{
    public $tenant_id, $rental_object_id, $amount, $type, $note, $payment_date;
    public $editMode = false, $editId;
    public $tenants, $rentalObjects, $entries;


    protected $rules = [
        'tenant_id' => 'required|exists:tenants,id',
        'rental_object_id' => 'required|exists:rental_objects,id',
        'type' => 'required|in:refund,payment',
        'amount' => 'required|numeric|min:0',
        'payment_date' => 'nullable|date',
        'note' => 'nullable|string|max:255',
    ];

    public function mount()
    {
        $this->tenants = Tenant::where('user_id', Auth::id())->get();
        $this->rentalObjects = RentalObject::where('user_id', Auth::id())->get();
        $this->loadEntries();
    }

    public function loadEntries()
    {
        $this->entries = RefundsOrPayments::with('tenant', 'rentalObject')
            ->where('user_id', Auth::id())
            ->orderByDesc('created_at')
            ->get();
    }

    public function saveEntry()
    {
        $this->validate();

        $paymentDate = $this->payment_date ?? now()->toDateString();
        $year = \Carbon\Carbon::parse($paymentDate)->year;
        $month = \Carbon\Carbon::parse($paymentDate)->month;

        if ($this->editMode) {
            RefundsOrPayments::findOrFail($this->editId)->update([
                'tenant_id' => $this->tenant_id,
                'rental_object_id' => $this->rental_object_id,
                'type' => $this->type,
                'amount' => $this->amount,
                'payment_date' => $paymentDate,
                'year' => $year,
                'month' => $month,
                'note' => $this->note,
            ]);
        } else {
            RefundsOrPayments::create([
                'user_id' => Auth::id(),
                'tenant_id' => $this->tenant_id,
                'rental_object_id' => $this->rental_object_id,
                'type' => $this->type,
                'amount' => $this->amount,
                'payment_date' => $paymentDate,
                'year' => $year,
                'month' => $month,
                'note' => $this->note,
            ]);
        }

        $this->resetFields();
        $this->loadEntries();
    }


    public function editEntry($id)
    {
        $entry = RefundsOrPayments::findOrFail($id);
        $this->editMode = true;
        $this->editId = $entry->id;
        $this->tenant_id = $entry->tenant_id;
        $this->rental_object_id = $entry->rental_object_id;
        $this->type = $entry->type;
        $this->amount = $entry->amount;
        $this->payment_date = $entry->payment_date;
        $this->note = $entry->note;
    }

    public function resetFields()
    {
        $this->reset(['tenant_id', 'rental_object_id', 'type', 'amount', 'payment_date', 'note', 'editMode', 'editId']);
    }

    public function deleteEntry($id)
    {
        RefundsOrPayments::findOrFail($id)->delete();
        $this->loadEntries();
    }

    public function render()
    {
        return view('livewire.utility-costs.refunds-or-payments-component', [
            'entries' => $this->entries,
        ]);
    }
}
