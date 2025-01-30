<?php

namespace App\Livewire\Backend\EInvoiceManager;

use Livewire\Component;
use App\Models\ModInvoiceRecipient;
use Livewire\WithPagination;

class InvoiceRecipientsManager extends Component
{
    use WithPagination;

    public $search = '';
    public $showForm = false;
    public $editingRecipient = null;
    public $filterActive = true; // Standardwert: aktive Kunden anzeigen
    public $isEditMode = false; // Modus für Bearbeitung
    public $eInvoiceFormats = ['ZUGFeRD', 'XRechnung', 'UBL']; // Beispielwerte
    public $deliveryMethods = ['Email', 'Post', 'Portal']; // Beispielwerte
    public $invoiceLanguages = ['de' => 'Deutsch', 'en' => 'Englisch', 'fr' => 'Französisch']; // Sprachcodes und Namen


    public $recipientData = [
        'user_id' => null,
        'first_name' => '',
        'last_name' => '',
        'company_name' => '',
        'name' => '',
        'email' => '',
        'phone' => '',
        'address' => '',
        'city' => '',
        'zip_code' => '',
        'country' => 'Germany',
        'customer_type' => 'private',
        'vat_number' => '',
        'payment_terms' => '14 days',
        'iban' => '',
        'bic' => '',
        'is_active' => 1,
        'notes' => '',
        'is_e_invoice' => 0,
        'e_invoice_format' => null,
        'delivery_method' => null,
        'invoice_language' => 'de',
        'default_currency' => 'EUR',
        'last_invoice_date' => null,
        'total_invoiced' => 0,
        'newsletter_opt_in' => 0
    ];

    protected $rules = [
        'recipientData.first_name' => 'nullable|string|max:255',
        'recipientData.last_name' => 'nullable|string|max:255',
        'recipientData.name' => 'required|string|max:255',
        'recipientData.email' => 'required|email|max:255',
        'recipientData.phone' => 'nullable|string|max:255',
        'recipientData.address' => 'nullable|string|max:255',
        'recipientData.city' => 'nullable|string|max:255',
        'recipientData.zip_code' => 'nullable|string|max:255',
        'recipientData.country' => 'nullable|string|max:255',
        'recipientData.customer_type' => 'required|in:private,company',
        'recipientData.company_name' => 'nullable|string|max:255',
        'recipientData.vat_number' => 'nullable|string|max:255',
        'recipientData.payment_terms' => 'required|string|max:255',
        'recipientData.iban' => 'nullable|string|max:255',
        'recipientData.bic' => 'nullable|string|max:255',
        'recipientData.is_active' => 'boolean',
        'recipientData.notes' => 'nullable|string',
        'recipientData.is_e_invoice' => 'boolean',
        'recipientData.e_invoice_format' => 'nullable|string|max:255',
        'recipientData.delivery_method' => 'nullable|string|max:255',
        'recipientData.invoice_language' => 'required|string|max:5',
        'recipientData.default_currency' => 'required|string|max:3',
        'recipientData.last_invoice_date' => 'nullable|date',
        'recipientData.total_invoiced' => 'nullable|numeric|min:0',
        'recipientData.newsletter_opt_in' => 'boolean',
    ];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function editRecipient(ModInvoiceRecipient $recipient)
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
            ModInvoiceRecipient::create($this->recipientData);
        }

        $this->resetForm();
        $this->dispatch('notify', 'Recipient saved successfully!');
    }

    public function resetForm()
    {
        $this->editingRecipient = null;
        $this->recipientData = [
            'user_id' => null,
            'first_name' => '',
            'last_name' => '',
            'company_name' => '',
            'name' => '',
            'email' => '',
            'phone' => '',
            'address' => '',
            'city' => '',
            'zip_code' => '',
            'country' => 'Germany',
            'customer_type' => 'private',
            'vat_number' => '',
            'payment_terms' => '14 days',
            'iban' => '',
            'bic' => '',
            'is_active' => 1,
            'notes' => '',
            'is_e_invoice' => 0,
            'e_invoice_format' => null,
            'delivery_method' => null,
            'invoice_language' => 'de',
            'default_currency' => 'EUR',
            'last_invoice_date' => null,
            'total_invoiced' => 0,
            'newsletter_opt_in' => 0
        ];
        $this->showForm = false; // Close modal
    }

    public function addRecipient()
    {
        $this->showForm = true;
    }

    public function createRecipient()
    {
        $this->validate();

        $this->recipientData['user_id'] = auth()->id();

        ModInvoiceRecipient::create($this->recipientData);

        $this->resetForm();
        $this->dispatch('notify', 'Recipient created successfully!');
    }


    public function deleteRecipient(ModInvoiceRecipient $recipient)
    {
        $recipient->delete();
        $this->dispatch('notify', 'Recipient deleted successfully!');
    }

    public function cancelEdit()
    {
        $this->resetForm();
    }


    // Aktiv/Inaktiv umschalten
    public function toggleActive($id)
    {
        $recipient = ModInvoiceRecipient::findOrFail($id);
        $recipient->is_active = !$recipient->is_active;
        $recipient->save();

    }

    // Filter umschalten (aktive/inaktive Kunden)
    public function toggleFilter()
    {
        $this->filterActive = !$this->filterActive;
    }

    public function resetRecipientForm()
    {
        $this->resetForm();

        $this->showForm = true;
    }


    // Suchfunktion
public function getRecipientsProperty()
{
    $query = ModInvoiceRecipient::query()->where('user_id', auth()->id());

    if ($this->filterActive) {
        $query->where('is_active', true);
    }

    if ($this->search) {
        $query->where(function ($subQuery) {
            $subQuery->where('name', 'like', '%' . $this->search . '%')
                     ->orWhere('email', 'like', '%' . $this->search . '%');
        });
    }

    return $query->orderBy('created_at', 'desc')->paginate(10);
}

public function render()
{
    return view('livewire.backend.e-invoice-manager.invoice-recipients-manager', [
        'recipients' => $this->recipients
    ]);
}

}
