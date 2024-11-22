<?php

namespace App\Livewire\Backend\Admin\EInvoiceManager;

use Exception;
use Livewire\Component;
use App\Models\ModInvoice;
use App\Models\ModCustomer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class InvoiceManager extends Component
{
    public $invoices;
    public $invoice = [];
    public $customers;
    public $showForm = false;
    public $items = []; // Array für Artikelpositionen
    public $status;

    protected $rules = [
        'invoice.customer_id' => 'required|exists:mod_customers,id',
        'invoice.invoice_date' => 'required|date',
        'invoice.due_date' => 'required|date',
        'invoice.notes' => 'nullable|string',
        'invoice.status' => 'required|in:draft,sent,paid,cancelled',
        'items.*.description' => 'required|string|max:255',
        'items.*.quantity' => 'required|integer|min:1',
        'items.*.unit_price' => 'required|numeric|min:0.01',
        'items.*.tax_rate' => 'nullable|numeric|min:0|max:100',
    ];


    public function mount()
    {
        if (!Auth::check()) {
            abort(403, 'Zugriff verweigert. Bitte melden Sie sich an.');
        }

        $this->invoices = ModInvoice::with('customer')->where('user_id', Auth::id())->get();
        $this->customers = ModCustomer::all();
        $this->items = []; // Initialisiere Artikelpositionen
    }

    public function addItem()
    {
        $this->items[] = [
            'item_number' => '',
            'description' => '',
            'quantity' => 1,
            'unit_price' => 0.00,
            'tax_rate' => 0.00,
        ];
    }

    public function removeItem($index)
    {
        unset($this->items[$index]);
        $this->items = array_values($this->items); // Indizes neu ordnen
    }


    public function createInvoice()
    {
        if (!auth()->check()) {
            session()->flash('error', 'Benutzer nicht authentifiziert. Bitte melden Sie sich an.');
            return;
        }

        try {
            $this->invoice['total_amount'] = 0;


            // Konvertiere Komma in Punkt vor der Validierung
            $this->items = array_map(function ($item) {
                $item['unit_price'] = str_replace(',', '.', $item['unit_price']);
                $item['tax_rate'] = isset($item['tax_rate']) ? str_replace(',', '.', $item['tax_rate']) : null;
                return $item;
            }, $this->items);


            $this->validate();

            $invoice = ModInvoice::create([
                'user_id' => auth()->id(), // Aktuelle Benutzer-ID speichern
                'invoice_number' => 'INV-' . time(),
                'customer_id' => $this->invoice['customer_id'],
                'invoice_date' => $this->invoice['invoice_date'],
                'due_date' => $this->invoice['due_date'],
                'total_amount' => 0, // Wird später berechnet
                'status' => $this->invoice['status'],
                'notes' => $this->invoice['notes'] ?? null,
            ]);

            $totalAmount = 0;

            $validItems = array_filter($this->items, function ($item) {
                return !empty($item['description']) && $item['quantity'] > 0 && $item['unit_price'] > 0;
            });

            if (empty($validItems)) {
                session()->flash('error', 'Die Rechnung muss mindestens eine valide Artikelposition enthalten.');
                return;
            }

            foreach ($validItems as $item) {
                $item['total_price'] = $item['quantity'] * $item['unit_price'] +
                    ($item['quantity'] * $item['unit_price'] * ($item['tax_rate'] / 100));
                $invoice->items()->create($item);
                $totalAmount += $item['total_price'];
            }

            $invoice->update(['total_amount' => $totalAmount]);

            $this->invoices = ModInvoice::with('customer', 'items')->where('user_id', auth()->id())->get();
            $this->reset(['invoice', 'items']);
            $this->showForm = false;

            session()->flash('message', 'Rechnung erfolgreich erstellt!');
        } catch (ValidationException $e) {
            session()->flash('error', 'Fehler bei der Validierung. Bitte überprüfen Sie Ihre Eingaben.');
            logger()->error('Validierungsfehler:', $e->errors());
        } catch (Exception $e) {
            session()->flash('error', 'Ein unerwarteter Fehler ist aufgetreten.');
            logger()->error('Rechnungsfehler:', ['message' => $e->getMessage()]);
        }
    }



    public function editInvoice($id)
    {
        $invoice = ModInvoice::with('items')->findOrFail($id); // Lade die Rechnung inklusive der Artikel
        $this->invoice = $invoice->toArray();
        $this->items = $invoice->items->map(function ($item) {
            return [
                'item_number' => $item->item_number,
                'description' => $item->description,
                'quantity' => $item->quantity,
                'unit_price' => $item->unit_price,
                'tax_rate' => $item->tax_rate,
            ];
        })->toArray(); // Mappe die Artikel in ein Array

        $this->showForm = true;
    }

    public function deleteInvoice($id)
    {
        ModInvoice::findOrFail($id)->delete();
        $this->invoices = ModInvoice::with('customer')->get();
        session()->flash('message', 'Rechnung erfolgreich gelöscht!');
    }



    public function render()
    {
        return view('livewire.backend.admin.e-invoice-manager.invoice-manager');
    }
}
