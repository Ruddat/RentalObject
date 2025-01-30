<?php

namespace App\Livewire\Backend\Admin\EInvoiceManager;

use Exception;
use Livewire\Component;
use App\Models\ModInvoice;
use App\Models\ModCustomer;
use App\Models\ModInvoiceCreator;
use App\Models\ModInvoiceRecipient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class InvoiceManager extends Component
{
    public $invoices;
    public $recipients;
    public $showForm = false;
    public $items = []; // Array für Artikelpositionen
    public $status;
    public $invoice_creators; // Liste der Rechnungsköpfe
    public $invoice = [
        'invoice_creator_id' => null, // Auswahl des Rechnungskopfs
    ];
    public $content;

    protected $rules = [
        'invoice.invoice_creator_id' => 'required|exists:mod_invoice_creators,id',
        'invoice.recipient_id' => 'required|exists:mod_invoice_recipients,id',
        'invoice.invoice_date' => 'required|date',
        'invoice.due_date' => 'required|date',
        'invoice.notes' => 'nullable|string',
        'invoice.status' => 'required|in:draft,sent,paid,cancelled',

        'items.*.description' => 'required|string|max:255',
        'items.*.quantity' => 'required|integer|min:1',
        'items.*.unit_price' => 'required|numeric|min:0.01',
        'items.*.tax_rate' => 'nullable|numeric|min:0|max:100',
    ];

    protected function validationAttributes()
    {
        return [
            'invoice.invoice_creator_id' => 'Rechnungskopf',
            'invoice.recipient_id' => 'Kunde',
            'invoice.invoice_date' => 'Rechnungsdatum',
            'invoice.due_date' => 'Fälligkeitsdatum',
            'invoice.status' => 'Status',
            'items.*.description' => 'Beschreibung der Artikelposition',
            'items.*.quantity' => 'Menge der Artikelposition',
            'items.*.unit_price' => 'Einzelpreis der Artikelposition',
            'items.*.tax_rate' => 'Steuersatz der Artikelposition',
        ];
    }

public function updatedContent($value)
{
    $this->dispatch('editorUpdated', $value);
}

public function updateDescription($index, $value)
{
    $this->items[$index]['description'] = $value;
}

    public function mount()
    {
        if (!Auth::check()) {
            abort(403, 'Zugriff verweigert. Bitte melden Sie sich an.');
        }

        $this->invoices = ModInvoice::with('recipient')->where('user_id', Auth::id())->get();
        $this->recipients = ModInvoiceRecipient::where('user_id', Auth::id())->get();
        $this->invoice_creators = ModInvoiceCreator::all();
        $this->items = []; // Initialisiere Artikelpositionen

        $this->invoice = [
            'invoice_creator_id' => null,
            'recipient_id' => null,
            'invoice_date' => now()->toDateString(),
            'due_date' => now()->addDays(30)->toDateString(),
            'status' => 'draft',
        ];

    }

    public function addItem()
    {
        // Sicherstellen, dass jedes Item korrekt initialisiert ist
        foreach ($this->items as $index => $item) {
            if (!isset($item['description']) || $item['description'] === '') {
                $this->addError("items.{$index}.description", "Bitte füllen Sie die Beschreibung für Artikel " . ($index + 1) . " aus.");
                return;
            }
            if (!isset($item['quantity']) || $item['quantity'] <= 0) {
                $this->addError("items.{$index}.quantity", "Bitte geben Sie eine gültige Menge für Artikel " . ($index + 1) . " ein.");
                return;
            }
            if (!isset($item['unit_price']) || $item['unit_price'] <= 0) {
                $this->addError("items.{$index}.unit_price", "Bitte geben Sie einen gültigen Einzelpreis für Artikel " . ($index + 1) . " ein.");
                return;
            }
        }

        // Neues Item hinzufügen
        $this->items[] = [
            'item_number' => '',
            'description' => '',
            'quantity' => 1,
            'unit_price' => 0.00,
            'tax_rate' => 0.00,
        ];

        // Array nach dem Hinzufügen neu initialisieren, damit Livewire es erkennt
        $this->items = array_values($this->items);
    }








    public function removeItem($index)
    {
        unset($this->items[$index]);
        $this->items = array_values($this->items); // Indizes neu ordnen
    }


    public function saveInvoice()
    {
        if (!auth()->check()) {
            session()->flash('error', 'Benutzer nicht authentifiziert. Bitte melden Sie sich an.');
            return;
        }

        try {
            // Überprüfe, ob mindestens eine Artikelposition existiert
            if (empty($this->items)) {
                throw ValidationException::withMessages([
                    'items' => ['Die Rechnung muss mindestens eine Artikelposition enthalten.'],
                ]);
            }

            // Validierung ausführen
            $this->validate();

            // Überprüfen, ob wir eine Rechnung erstellen oder bearbeiten
            if (isset($this->invoice['id'])) {
                // Rechnung bearbeiten
                $invoice = ModInvoice::findOrFail($this->invoice['id']);
                $invoice->update([
                    'recipient_id' => $this->invoice['recipient_id'],
                    'creator_id' => $this->invoice['invoice_creator_id'],
                    'invoice_date' => $this->invoice['invoice_date'],
                    'due_date' => $this->invoice['due_date'],
                    'status' => $this->invoice['status'],
                    'notes' => $this->invoice['notes'] ?? null,
                ]);

                // Artikelpositionen synchronisieren (alte löschen, neue hinzufügen)
                $invoice->items()->delete();
                $totalAmount = 0;

                foreach ($this->items as $item) {
                    $item['total_price'] = $item['quantity'] * $item['unit_price'] +
                        ($item['quantity'] * $item['unit_price'] * ($item['tax_rate'] / 100));
                    $invoice->items()->create($item);
                    $totalAmount += $item['total_price'];
                }

                $invoice->update(['total_amount' => $totalAmount]);
                session()->flash('message', 'Rechnung erfolgreich aktualisiert!');
            } else {

// Neue Rechnung erstellen
//dd($this->invoice); // Debugging

$invoice = ModInvoice::create([
    'user_id' => auth()->id(),
    'invoice_number' => 'INV-' . time(),
    'recipient_id' => $this->invoice['recipient_id'],
    'creator_id' => $this->invoice['invoice_creator_id'], // Korrektur: `invoice_creator_id` zu `creator_id`
    'invoice_date' => $this->invoice['invoice_date'],
    'due_date' => $this->invoice['due_date'],
    'total_amount' => 0,
    'status' => $this->invoice['status'],
    'notes' => $this->invoice['notes'] ?? null,
  //  'customer_id' => $this->invoice['recipient_id'],
]);

                $totalAmount = 0;

      //          dd($this->invoice);

                foreach ($this->items as $item) {
                    $item['total_price'] = $item['quantity'] * $item['unit_price'] +
                        ($item['quantity'] * $item['unit_price'] * ($item['tax_rate'] / 100));
                    $invoice->items()->create($item);
                    $totalAmount += $item['total_price'];
                }

                $invoice->update(['total_amount' => $totalAmount]);
                session()->flash('message', 'Rechnung erfolgreich erstellt!');
            }

            // Daten zurücksetzen
            $this->invoices = ModInvoice::with('recipient', 'items')->where('user_id', auth()->id())->get();
            $this->reset(['invoice', 'items']);
            $this->showForm = false;
        } catch (ValidationException $e) {
            $this->addError('validation', 'Fehler bei der Validierung. Bitte überprüfen Sie Ihre Eingaben.');
            foreach ($e->errors() as $field => $messages) {
                $this->addError($field, $messages[0]);
            }
        } catch (Exception $e) {
            session()->flash('error', 'Ein unerwarteter Fehler ist aufgetreten.');
            logger()->error('Rechnungsfehler:', ['message' => $e->getMessage()]);
        }
    }



    public function editInvoice($id)
    {
        $invoice = ModInvoice::with('creator', 'items')->findOrFail($id);

        $this->invoice = [
            'id' => $invoice->id, // Rechnung-ID speichern
            'invoice_creator_id' => $invoice->creator_id,
            'recipient_id' => $invoice->recipient_id,
            'invoice_date' => $invoice->invoice_date,
            'due_date' => $invoice->due_date,
            'status' => $invoice->status,
            'notes' => $invoice->notes,
        ];

        $this->items = $invoice->items->map(function ($item) {
            return [
                'item_number' => $item->item_number,
                'description' => $item->description,
                'quantity' => $item->quantity,
                'unit_price' => $item->unit_price,
                'tax_rate' => $item->tax_rate,
            ];
        })->toArray();

        $this->showForm = true;
    }

    public function deleteInvoice($id)
    {
        ModInvoice::findOrFail($id)->delete();
        $this->invoices = ModInvoice::with('recipient')->get();
        session()->flash('message', 'Rechnung erfolgreich gelöscht!');
    }



    public function render()
    {
        return view('livewire.backend.admin.e-invoice-manager.invoice-manager');
    }
}
