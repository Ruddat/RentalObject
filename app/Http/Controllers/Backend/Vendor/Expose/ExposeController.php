<?php

namespace App\Http\Controllers\Backend\Vendor\Expose;

use Illuminate\Http\Request;
use App\Models\ObjProperties;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class ExposeController extends Controller
{
    public function exportPdf(Request $request)
    {
        $property = ObjProperties::with(['photos', 'prices', 'details', 'energyCertificates'])->findOrFail($request->propertyId);

        // Filtern der Daten basierend auf der Auswahl
        $selectedSections = $request->input('selectedSections', []);
        $selectedPhotos = $request->input('selectedPhotos', []);

        $filteredPhotos = $property->photos->whereIn('id', $selectedPhotos);

        $pdf = Pdf::loadView('pdf.property-expose', compact('property', 'selectedSections', 'filteredPhotos'));

        return $pdf->download('expose_' . $property->ad_number . '.pdf');
    }
}
