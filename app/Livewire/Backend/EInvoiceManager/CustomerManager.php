<?php

namespace App\Livewire\Backend\EInvoiceManager;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ModCustomer;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CustomersExport;

class CustomerManager extends Component
{
    use WithPagination;

    public $newCustomer = []; // Neues Kunden-Formular
    public $editCustomer = null; // ID des Kunden im Bearbeitungsmodus
    public $showForm = false; // Steuerung für Formularanzeige
    public $isEditMode = false; // Modus für Bearbeitung
    public $search = ''; // Suchfeld
    public $filterActive = true; // Filter für aktive Kunden

    // Validierungsregeln für Kunden
    protected $rules = [
        'newCustomer.name' => 'required|string|max:255',
        'newCustomer.email' => 'required|email|unique:mod_customers,email',
        'newCustomer.phone' => 'nullable|string|max:255',
        'newCustomer.address' => 'nullable|string|max:255',
        'newCustomer.city' => 'nullable|string|max:255',
        'newCustomer.postal_code' => 'nullable|string|max:255',
        'newCustomer.country' => 'nullable|string|max:255',
        'newCustomer.customer_type' => 'required|in:private,business',
        'newCustomer.company_name' => 'nullable|string|max:255',
        'newCustomer.vat_number' => 'nullable|string|max:255',
        'newCustomer.payment_terms' => 'nullable|string|max:255',
        'newCustomer.notes' => 'nullable|string',
        'newCustomer.is_active' => 'boolean',
        'recipientData.default_currency' => 'required|string|max:3',
        'recipientData.e_invoice_format' => 'nullable|string|max:255',
        'recipientData.newsletter_opt_in' => 'boolean',
    ];

    // Initialisierung der Komponente
    public function mount()
    {
        $this->resetCustomerForm();
    }

    // Formular zurücksetzen
    public function resetCustomerForm()
    {
        $this->newCustomer = [
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
            'notes' => '',
            'default_currency' => 'EUR',
            'e_invoice_format' => null,
            'newsletter_opt_in' => 0,
            'is_active' => true,
        ];
        $this->editCustomer = null;
        $this->isEditMode = false;
        $this->showForm = false;
    }

    // Kunden erstellen
    public function createCustomer()
    {
        $this->validate();

        try {
            ModCustomer::create($this->newCustomer);
            $this->resetCustomerForm();
            session()->flash('message', 'Kunde erfolgreich erstellt!');
        } catch (ValidationException $e) {
            session()->flash('error', 'Fehler bei der Validierung.');
        }
    }

    // Kunde bearbeiten
    public function editCustomer($id)
    {
        $customer = ModCustomer::findOrFail($id); // Kunde finden
        $this->newCustomer = $customer->toArray(); // Daten ins Formular laden
        $this->editCustomer = $id; // ID setzen
        $this->isEditMode = true; // Bearbeitungsmodus aktivieren
        $this->showForm = true; // Formular anzeigen
    }

    // Kundenaktualisierung
    public function updateCustomer()
    {
        $this->validate([
            'newCustomer.name' => 'required|string|max:255',
            'newCustomer.email' => 'required|email|unique:mod_customers,email,' . $this->editCustomer,
        ]);

        $customer = ModCustomer::findOrFail($this->editCustomer); // Kunde finden
        $customer->update($this->newCustomer); // Kundendaten aktualisieren

        $this->resetCustomerForm(); // Formular zurücksetzen
        session()->flash('message', 'Kunde erfolgreich aktualisiert!');
    }

    // Kunde löschen
    public function deleteCustomer($id)
    {
        ModCustomer::findOrFail($id)->delete();
        session()->flash('message', 'Kunde erfolgreich gelöscht!');
    }

    // Aktiv/Inaktiv umschalten
    public function toggleActive($id)
    {
        $customer = ModCustomer::findOrFail($id);
        $customer->is_active = !$customer->is_active;
        $customer->save();
    }

    // Filter umschalten (aktive/inaktive Kunden)
    public function toggleFilter()
    {
        $this->filterActive = !$this->filterActive;
    }

    // Export der Kundenliste als Excel
    public function exportCustomers()
    {
        return Excel::download(new CustomersExport($this->search, $this->filterActive), 'customers.xlsx');
    }

    // Suchfunktion
    public function getCustomersProperty()
    {
        $query = ModCustomer::query();

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

    // Rendering der Blade-Datei
    public function render()
    {
        return view('livewire.backend.e-invoice-manager.customer-manager', [
            'customers' => $this->customers,
        ]);
    }
}
