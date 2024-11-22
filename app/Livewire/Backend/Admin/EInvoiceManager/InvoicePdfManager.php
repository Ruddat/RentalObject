<?php

namespace App\Livewire\Backend\Admin\EInvoiceManager;

use Livewire\Component;
use App\Models\ModInvoice;
use Barryvdh\DomPDF\Facade\Pdf;
use horstoeko\zugferd\ZugferdDocumentBuilder;
use horstoeko\zugferd\ZugferdDocumentPdfBuilder;
use horstoeko\zugferd\ZugferdProfiles;

class InvoicePdfManager extends Component
{
    public $invoiceId;

    public function generatePdf($id, $zugferd = false)
    {
        $invoice = ModInvoice::with('customer', 'items')->findOrFail($id);
        $directory = storage_path('app/public/invoices');

        // Verzeichnis erstellen, falls es nicht existiert
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        // Basis-PDF erstellen
        $basePdfPath = "{$directory}/{$invoice->invoice_number}_base.pdf";
        $pdf = Pdf::loadView('pdf.invoices.invoice', compact('invoice'));
        $pdf->save($basePdfPath);

        if ($zugferd) {
            // ZUGFeRD-Dokument erstellen und mit Basis-PDF kombinieren
            $pdfPath = $this->generateZugferdPdf($invoice, $basePdfPath, $directory);
            session()->flash('message', 'ZUGFeRD-PDF erfolgreich erstellt!');
        } else {
            session()->flash('message', 'Basis-PDF erfolgreich erstellt!');
            $pdfPath = $basePdfPath;
        }

        $invoice->update(['pdf_path' => $pdfPath]);
    }

    public function generateZugferdPdf($invoice, $basePdfPath, $directory)
    {
        // ZUGFeRD-Dokument erstellen
        $document = ZugferdDocumentBuilder::CreateNew(ZugferdProfiles::PROFILE_EN16931);

        // Dokumentinformationen hinzufügen
        $document
            ->setDocumentInformation(
                $invoice->invoice_number,
                "380",
                new \DateTime($invoice->invoice_date),
                "EUR"
            )
            ->setDocumentSeller("Lieferant GmbH", "549910")
            ->addDocumentSellerTaxRegistration("VA", "DE123456789") // Umsatzsteuer-ID
            ->setDocumentSellerAddress("Lieferantenstraße 20", "", "", "80333", "München", "DE")
            ->setDocumentSellerContact("Max Mustermann", "Geschäftsführer", "0800-123456", "0800-123457", "kontakt@lieferant.de")
           // ->addDocumentSellerLegalOrganization("Handelsregister München", "HRB 12345") // Handelsregistereintrag
            ->setDocumentBuyer($invoice->customer->name ?? 'Unbekannt', "Kundennummer")
            ->setDocumentBuyerAddress("Kundenstraße 15", "", "", "69876", "Frankfurt", "DE")
            ->addDocumentPaymentTerm("Zahlbar innerhalb von 30 Tagen netto.")
            ->setDocumentSupplyChainEvent(new \DateTime($invoice->invoice_date))
            ->setDocumentSummation(
                $invoice->total_amount ?? 0,
                $invoice->total_amount ?? 0,
                $invoice->total_amount ?? 0,
                0,
                0,
                $invoice->total_amount ?? 0,
                0
            );

        // Steuersätze hinzufügen
        $netAmount = $invoice->items->sum(fn($item) => $item->quantity * $item->unit_price);
        $totalTax = $netAmount * 0.19; // Beispiel für 19% Steuer
        $document->addDocumentTax("S", "VAT", 19.0, $netAmount, 19.0);

        // Positionen hinzufügen
        foreach ($invoice->items as $item) {
            $document->addNewPosition($item->id)
                ->setDocumentPositionProductDetails(
                    $item->description ?? 'Unbekannt',
                    "",
                    "P{$item->id}",
                    null,
                    "0160",
                    "4000050986428"
                )
                ->setDocumentPositionNetPrice($item->unit_price ?? 0)
                ->setDocumentPositionQuantity($item->quantity ?? 1, "H87")
                ->addDocumentPositionTax('S', 'VAT', $item->tax_rate ?? 0)
                ->setDocumentPositionLineSummation(($item->unit_price ?? 0) * ($item->quantity ?? 1));
        }

        // Kombiniertes PDF mit ZUGFeRD-XML erstellen
        $mergedPdfPath = "{$directory}/{$invoice->invoice_number}_zugferd.pdf";

        // ZUGFeRD-Dokument mit Basis-PDF verbinden
        $pdfBuilder = new ZugferdDocumentPdfBuilder($document, $basePdfPath);
        $pdfBuilder->generateDocument()->saveDocument($mergedPdfPath);

        return $mergedPdfPath;
    }



    public function render()
    {
        $invoices = ModInvoice::with('customer', 'items')->where('user_id', auth()->id())->get();
        return view('livewire.backend.admin.e-invoice-manager.invoice-pdf-manager', compact('invoices'));
    }
}
