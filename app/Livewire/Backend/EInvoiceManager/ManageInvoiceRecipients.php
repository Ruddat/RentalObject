<?php

namespace App\Livewire\Backend\EInvoiceManager;

use Livewire\Component;
use App\Models\ModCustomer;
use Livewire\WithPagination;

class ManageInvoiceRecipients extends Component
{
    use WithPagination;

    public $search = '';
    public $showForm = false;
    public $editingRecipient = null;
    public $recipientData = [
        'name' => '',
        'email' => '',
        'phone' => '',
        'address' => '',
        'city' => '',
        'postal_code' => '',
        'country' => '',
        'customer_type' => 'private',
        'company_name' => '',
        'vat_number' => '',
        'payment_terms' => '14 days',
        'iban' => '',
        'bic' => '',
        'is_e_invoice' => 0,
        'e_invoice_format' => null,
        'delivery_method' => null,
        'invoice_language' => 'de',
        'newsletter_opt_in' => 0,
        'notes' => ''
    ];

    protected $rules = [
        'recipientData.name' => 'required|string|max:255',
        'recipientData.email' => 'required|email|max:255',
        'recipientData.phone' => 'nullable|string|max:255',
        'recipientData.address' => 'nullable|string|max:255',
        'recipientData.city' => 'nullable|string|max:255',
        'recipientData.postal_code' => 'nullable|string|max:255',
        'recipientData.country' => 'nullable|string|max:255',
        'recipientData.customer_type' => 'required|in:private,company',
        'recipientData.company_name' => 'nullable|string|max:255',
        'recipientData.vat_number' => 'nullable|string|max:255',
        'recipientData.payment_terms' => 'required|string|max:255',
        'recipientData.iban' => 'nullable|string|max:255',
        'recipientData.bic' => 'nullable|string|max:255',
        'recipientData.is_e_invoice' => 'boolean',
        'recipientData.e_invoice_format' => 'nullable|string|max:255',
        'recipientData.delivery_method' => 'nullable|string|max:255',
        'recipientData.invoice_language' => 'required|string|max:5',
        'recipientData.newsletter_opt_in' => 'boolean',
        'recipientData.notes' => 'nullable|string',
    ];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function editRecipient(ModCustomer $recipient)
    {
        $this->editingRecipient = $recipient;
        $this->recipientData = $recipient->toArray();
        $this->showForm = true;
    }

    public function saveRecipient()
    {
        $this->validate();

        if ($this->editingRecipient) {
            $this->editingRecipient->update($this->recipientData);
        } else {
            ModCustomer::create($this->recipientData);
        }

        $this->resetForm();
        $this->dispatch('notify', 'Recipient saved successfully!');
    }

    public function resetForm()
    {
        $this->editingRecipient = null;
        $this->recipientData = [
            'name' => '',
            'email' => '',
            'phone' => '',
            'address' => '',
            'city' => '',
            'postal_code' => '',
            'country' => '',
            'customer_type' => 'private',
            'company_name' => '',
            'vat_number' => '',
            'payment_terms' => '14 days',
            'iban' => '',
            'bic' => '',
            'is_e_invoice' => 0,
            'e_invoice_format' => null,
            'delivery_method' => null,
            'invoice_language' => 'de',
            'newsletter_opt_in' => 0,
            'notes' => ''
        ];
        $this->showForm = false; // Modal schließen
    }


    public function addRecipient()
    {
        $this->showForm = true;
    }


    public function deleteRecipient(ModCustomer $recipient)
    {
        $recipient->delete();
        $this->dispatch('notify', 'Recipient deleted successfully!');
    }


    public function render()
    {
        $recipients = ModCustomer::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.backend.e-invoice-manager.manage-invoice-recipients', compact('recipients'));
    }
}
