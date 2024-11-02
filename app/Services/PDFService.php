<?php


namespace App\Services;

use Barryvdh\DomPDF\Facade\Pdf;

class PDFService
{
    public function generateBillingPDF($billingRecord)
    {
        $pdf = Pdf::loadView('pdf.billing', compact('billingRecord'));
        $filePath = 'storage/billings/' . 'billing_' . $billingRecord->id . '.pdf';
        $pdf->save(public_path($filePath));

        return $filePath;
    }
}
