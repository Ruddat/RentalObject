<?php

namespace App\Livewire\Backend\ReceiptManager;

use NumberFormatter;
use Livewire\Component;
use App\Models\ModReceipt;
use Livewire\WithPagination;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\DataQuittungText;
use Illuminate\Support\Facades\Storage;

class ReceiptManagerComponent extends Component
{
    use WithPagination;

    public $name, $amount, $date, $description, $sender, $receiver, $includeTax = false, $taxPercent = 19;
    public $showForm = false;
    public $editMode = false;
    public $receiptId;
    public $suggestedDescriptions = []; // Initialisierung
    public $taxType = 'netto'; // Optionen: netto, brutto
    public $customTaxPercent; // Individueller MwSt.-Satz

    protected $rules = [
      //  'name' => 'required|string|max:255',
        'amount' => 'required|numeric|min:0',
        'date' => 'required|date',
        'description' => 'nullable|string|max:1000',
        'sender' => 'required|string|max:255',
        'receiver' => 'required|string|max:255',
    ];


    public function updatedDescription()
    {
        // Beschreibungsvorschläge aus der Datenbank für den aktuellen Benutzer laden
        $this->suggestedDescriptions = DataQuittungText::where('user_id', auth()->id()) // Filtere nach Benutzer-ID
            ->where('text', 'like', '%' . $this->description . '%') // Suche nach der Beschreibung
            ->pluck('text') // Hole nur den Text
            ->toArray(); // Konvertiere in ein Array

        // Optional: Debuggen, falls nötig
        // dd($this->suggestedDescriptions);
    }

    public function saveReceipt()
    {
        $this->validate();

        $taxPercent = $this->customTaxPercent ?? $this->taxPercent;
        $taxAmount = 0;
        $netAmount = $this->amount;
        $grossAmount = $this->amount;

        if ($this->includeTax) {
            if ($this->taxType === 'netto') {
                $taxAmount = $this->amount * $taxPercent / 100;
                $grossAmount = $this->amount + $taxAmount;
            } elseif ($this->taxType === 'brutto') {
                $taxAmount = $this->amount * $taxPercent / (100 + $taxPercent);
                $netAmount = $this->amount - $taxAmount;
            }
        }

        $amountInWords = $this->convertNumberToWords($grossAmount);

        if ($this->editMode) {
            // Aktualisieren der bestehenden Quittung
            $receipt = ModReceipt::findOrFail($this->receiptId);
            $receipt->update([
                'user_id' => auth()->id(),
                'amount' => $netAmount,
                'date' => $this->date,
                'description' => $this->description,
                'sender' => $this->sender,
                'receiver' => $this->receiver,
                'tax_percent' => $this->includeTax ? $taxPercent : null,
                'tax_amount' => $taxAmount,
                'amount_in_words' => $amountInWords,
            ]);

            // Hash generieren
            $receipt->update(['hash' => $this->generateReceiptHash($receipt)]);

            // PDF neu generieren
            $this->generatePdf($receipt);

            session()->flash('success', 'Quittung erfolgreich aktualisiert und PDF neu erstellt!');

            $this->toggleForm();

        } else {
            // Neue Quittung erstellen
            $receiptNumber = $this->generateReceiptNumber();
            $receipt = ModReceipt::create([
                'user_id' => auth()->id(),
                'amount' => $netAmount,
                'date' => $this->date,
                'description' => $this->description,
                'sender' => $this->sender,
                'receiver' => $this->receiver,
                'tax_percent' => $this->includeTax ? $taxPercent : null,
                'tax_amount' => $taxAmount,
                'number' => $receiptNumber,
                'type' => 'standard', // Beispielwert für das Feld 'type'
                'amount_in_words' => $amountInWords,
            ]);

            // Hash generieren
            $receipt->update(['hash' => $this->generateReceiptHash($receipt)]);

            // PDF generieren
            $this->generatePdf($receipt);

            session()->flash('success', 'Quittung erfolgreich erstellt und PDF generiert!');
        }

        $this->resetForm();
    }

    private function convertNumberToWords($number)
    {
        $f = new NumberFormatter('de', \NumberFormatter::SPELLOUT);
        return ucfirst($f->format($number)) . ' Euro';
    }

    private function generateReceiptHash($receipt)
    {
        $data = $receipt->number . $receipt->date . $receipt->amount . auth()->id();
        return hash('sha256', $data);
    }


    public function generatePdf($receipt)
    {
        // Benutzerordner für PDFs
        $userFolder = 'receipts/' . auth()->id();

        // Dateiname mit Quittungsnummer
        $fileName = $userFolder . '/receipt_' . $receipt->number . '.pdf';

        // Sicherstellen, dass der Benutzerordner existiert
        if (!Storage::exists($userFolder)) {
            Storage::makeDirectory($userFolder);
        }

        // Generiere das PDF mit den aktuellen Daten
        $pdfContent = Pdf::loadView('pdf.receipt', ['receipt' => $receipt])->output();

        // Speichere das PDF und überschreibe, falls es existiert
        Storage::put($fileName, $pdfContent);

        // Aktualisiere den Pfad in der Datenbank
        $receipt->update(['pdf_path' => $fileName]);
    }

    private function resetForm()
    {
        $this->reset(['amount', 'date', 'description', 'sender', 'receiver', 'includeTax', 'taxPercent', 'editMode', 'receiptId']);
    }


    public function sendWhatsApp($id)
    {
        $receipt = ModReceipt::findOrFail($id);

        if ($receipt->pdf_path && Storage::exists($receipt->pdf_path)) {
            // PDF-Download-URL erstellen
            $pdfUrl = asset('storage/' . $receipt->pdf_path);
            $message = urlencode("Hier ist Ihre Quittung.");
            $whatsAppUrl = "https://wa.me/?text=$message%0A$pdfUrl";

            return redirect()->to($whatsAppUrl);
        }

        session()->flash('error', 'PDF nicht gefunden!');
    }

    public function editReceipt($id)
    {
        $receipt = ModReceipt::findOrFail($id);
        $this->name = $receipt->name;
        $this->amount = $receipt->amount;
        $this->date = $receipt->date;
        $this->description = $receipt->description;
        $this->sender = $receipt->sender;
        $this->receiver = $receipt->receiver;
        $this->includeTax = $receipt->tax_percent > 0;
        $this->taxPercent = $receipt->tax_percent;
        $this->editMode = true;
        $this->receiptId = $id;
        $this->showForm = true;
    }

    public function deleteReceipt($id)
    {
        $receipt = ModReceipt::findOrFail($id);
        Storage::delete($receipt->pdf_path);
        $receipt->delete();
        session()->flash('success', 'Quittung erfolgreich gelöscht!');
    }

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;

    }

    private function saveDescription($description)
    {
        if ($description && !DataQuittungText::where('text', $description)->where('user_id', auth()->id())->exists()) {
            DataQuittungText::create([
                'user_id' => auth()->id(),
                'text' => $description,
            ]);
        }
    }


    public function deleteDescription($text)
    {
        // Beschreibungstext für den aktuellen Benutzer löschen
        $deleted = DataQuittungText::where('user_id', auth()->id())
            ->where('text', $text)
            ->delete();

        if ($deleted) {
            session()->flash('success', 'Beschreibung erfolgreich gelöscht!');
        } else {
            session()->flash('error', 'Beschreibung konnte nicht gelöscht werden.');
        }

        // Vorschläge neu laden
        $this->updatedDescription();
    }

    private function generateReceiptNumber()
    {
        // Datum im Format YYYYMMDD
        $datePart = now()->format('Ymd');

        // Anzahl der bestehenden Quittungen am gleichen Tag zählen
        $dailyCount = ModReceipt::whereDate('created_at', now())->count();

        // Laufende Nummer (z. B. 001, 002)
        $incrementPart = str_pad($dailyCount + 1, 3, '0', STR_PAD_LEFT);

        // Quittungsnummer kombinieren
        return $datePart . '-' . $incrementPart;
    }


    public function render()
    {

        $this->updatedDescription();

        return view('livewire.backend.receipt-manager.receipt-manager-component', [
            'receipts' => ModReceipt::where('user_id', auth()->id())->orderBy('date', 'desc')->paginate(10),
        ]);
    }
}
