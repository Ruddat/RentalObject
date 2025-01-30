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

    public function generatePdf($id, $zugferd = false, $templatePath = 'public/assets/e-invoice/template-1/')
    {
        $invoice = ModInvoice::with('recipient', 'items', 'creator')->findOrFail($id);
        $creator = $invoice->creator;
        $recipient = $invoice->recipient;
        $items = $invoice->items;

        // Berechnung von Netto und Steuer
        $totalNet = $items->sum(fn($item) => $item->quantity * $item->unit_price);
        $taxRate = 19; // Beispiel für 19% Steuer
        $totalTax = $totalNet * ($taxRate / 100);

        $directory = storage_path('app/public/invoices');

        // Verzeichnis erstellen, falls es nicht existiert
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        // Dynamisches Stylesheet übergeben
        $stylesheet = "{$templatePath}style.css";

//dd($stylesheet);

        // Basis-PDF erstellen
        $basePdfPath = "{$directory}/{$invoice->invoice_number}_base.pdf";
        $pdf = Pdf::loadView('pdf.invoices.invoice', compact('invoice', 'creator', 'recipient', 'items', 'totalNet', 'totalTax', 'taxRate', 'stylesheet'));
        $pdf->save($basePdfPath);

        if ($zugferd) {
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
        $creator = $invoice->creator;
        $recipient = $invoice->recipient;

        $document = ZugferdDocumentBuilder::CreateNew(ZugferdProfiles::PROFILE_EN16931);

        $document
            ->setDocumentInformation(
                $invoice->invoice_number,
                "380",
                new \DateTime($invoice->invoice_date),
                "EUR"
            )
            ->setDocumentSeller(
                $creator->company_name,
                "549910"
            )
            ->addDocumentSellerTaxRegistration("VA", $creator->tax_number ?? 'Unbekannt') // Umsatzsteuer-ID
            ->setDocumentSellerAddress(
                $creator->address,
                "",
                "",
                $creator->postal_code,
                $creator->city,
                $creator->country
            )
            ->setDocumentSellerContact(
                "{$creator->first_name} {$creator->last_name}",
                "Geschäftsführer",
                $creator->phone ?? '',
                "",
                $creator->email ?? ''
            )
            ->setDocumentBuyer($recipient->name ?? 'Unbekannt', "Kundennummer")
            ->setDocumentBuyerAddress(
                $recipient->address,
                "",
                "",
                $recipient->zip_code,
                $recipient->city,
                $recipient->country
            )
            ->addDocumentPaymentTerm($recipient->payment_terms ?? 'Zahlbar innerhalb von 30 Tagen netto.')
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

        // Steuersätze und Artikelpositionen hinzufügen
        $netAmount = $invoice->items->sum(fn($item) => $item->quantity * $item->unit_price);
        $totalTax = $netAmount * 0.19; // Beispiel für 19% Steuer
        $document->addDocumentTax("S", "VAT", 19.0, $netAmount, 19.0);

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

        $mergedPdfPath = "{$directory}/{$invoice->invoice_number}_zugferd.pdf";

        $pdfBuilder = new ZugferdDocumentPdfBuilder($document, $basePdfPath);
        $pdfBuilder->generateDocument()->saveDocument($mergedPdfPath);

        return $mergedPdfPath;
    }



    public function render()
    {
        $invoices = ModInvoice::with('recipient', 'creator', 'items')->where('user_id', auth()->id())->get();
        return view('livewire.backend.admin.e-invoice-manager.invoice-pdf-manager', compact('invoices'));
    }
}
