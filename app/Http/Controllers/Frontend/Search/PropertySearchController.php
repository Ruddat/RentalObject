<?php

namespace App\Http\Controllers\Frontend\Search;

use App\Models\Attribute;
use App\Models\ObjPrices;
use App\Models\ObjDetails;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Models\ObjProperties;
use App\Http\Controllers\Controller;

class PropertySearchController extends Controller
{
    public function index(Request $request)
    {


        // Lade Eigenschaftstypen und Ausstattungsmerkmale
        $propertyTypes = PropertyType::all();
        $amenities = Attribute::all();

        // Filtereinstellungen aus der Session oder Standardwerte setzen
        $type = $request->input('type', session('search_query.type', 'all'));
        $location = $request->input('location', session('search_query.location', ''));
        $keyword = $request->input('keyword', session('search_query.keyword', ''));
        $minPrice = $request->input('minPrice', session('search_query.minPrice', ObjPrices::min('purchase_price') ?? 0));
        $maxPrice = $request->input('maxPrice', session('search_query.maxPrice', ObjPrices::max('purchase_price') ?? 10000));
        $minSize = $request->input('minSize', session('search_query.minSize', ObjDetails::min('area') ?? 0));
        $maxSize = $request->input('maxSize', session('search_query.maxSize', ObjDetails::max('area') ?? 1000));
        $rooms = $request->input('rooms', session('search_query.rooms'));
        $bathrooms = $request->input('bathrooms', session('search_query.bathrooms'));
        $bedrooms = $request->input('bedrooms', session('search_query.bedrooms'));
        $selectedAmenities = $request->input('selectedAmenities', session('search_query.selectedAmenities', []));

        // Alle verfügbaren Eigenschaften abrufen, ohne Filter anzuwenden
        $properties = ObjProperties::all();

        // Die geladenen Daten und Session-Werte an die View übergeben
        return view('rentalobj.index', compact(
            'properties',
            'propertyTypes',
            'amenities',
            'type',
            'location',
            'keyword',
            'minPrice',
            'maxPrice',
            'minSize',
            'maxSize',
            'rooms',
            'bathrooms',
            'bedrooms',
            'selectedAmenities'
        ));
    }



    public function search(Request $request)
    {
        // Validierung
        $validated = $request->validate([
            'type' => 'nullable|string',
            'location' => 'required|string',
            'keyword' => 'nullable|string',
            'min-value' => 'nullable|numeric|min:0',
            'max-value' => 'nullable|numeric|min:0',
            'min-value2' => 'nullable|numeric|min:0',
            'max-value2' => 'nullable|numeric|min:0',
            'rooms' => 'nullable|integer|min:0',
            'bathrooms' => 'nullable|integer|min:0',
            'bedrooms' => 'nullable|integer|min:0',
            'selectedAmenities' => 'nullable|array',
        ]);

        // Filter aus dem Request
        $type = $validated['type'] ?? 'all';
        $location = $validated['location'] ?? '';
        $keyword = $validated['keyword'] ?? '';
        $minPrice = $validated['min-value'] ?? 0;
        $maxPrice = $validated['max-value'] ?? 1000000;
        $minSize = $validated['min-value2'] ?? 0;
        $maxSize = $validated['max-value2'] ?? 10000;
        $rooms = $validated['rooms'] ?? null;
        $bathrooms = $validated['bathrooms'] ?? null;
        $bedrooms = $validated['bedrooms'] ?? null;
        $selectedAmenities = $validated['selectedAmenities'] ?? [];

        // Filter in der Session speichern
        session()->put([
            'type' => $type,
            'location' => $location,
            'keyword' => $keyword,
            'min-value' => $minPrice,
            'max-value' => $maxPrice,
            'min-value2' => $minSize,
            'max-value2' => $maxSize,
            'rooms' => $rooms,
            'bathrooms' => $bathrooms,
            'bedrooms' => $bedrooms,
            'selectedAmenities' => $selectedAmenities,
        ]);

        // Query-Builder für die Suche
        $query = ObjProperties::query();

        // Property Type Filter
        if ($type !== 'all') {
            $query->where('property_type', $type);
        }

        // Location Filter
        if ($location) {
            $query->where('city', 'LIKE', "%{$location}%");
        }

        // Keyword Filter
        if ($keyword) {
            $query->whereHas('sections', function ($q) use ($keyword) {
                $q->where('headline', 'LIKE', "%{$keyword}%")
                  ->orWhere('description', 'LIKE', "%{$keyword}%");
            });
        }

        // Price Range Filter
        $query->whereHas('prices', function ($q) use ($minPrice, $maxPrice) {
            $q->whereBetween('purchase_price', [$minPrice, $maxPrice]);
        });

        // Size Range Filter
      //  $query->whereHas('details', function ($q) use ($minSize, $maxSize) {
     //       $q->whereBetween('area', [$minSize, $maxSize]);
     //   });

        // Rooms, Bathrooms, Bedrooms Filter
      //  if ($rooms) {
       //     $query->where('rooms', $rooms);
      //  }

      //  if ($bathrooms) {
     //       $query->where('bathrooms', $bathrooms);
     //   }

        if ($bedrooms) {
        //    $query->where('bedrooms', $bedrooms);
        }

        // Selected Amenities Filter
        if (!empty($selectedAmenities)) {
            $query->whereHas('attributes', function ($q) use ($selectedAmenities) {
                $q->whereIn('attributes.id', $selectedAmenities);
            });
        }

        // Ergebnisse abrufen
        // $properties = $query->with(['prices', 'details', 'attributes'])->paginate(15);
        $properties = $query->with(['prices', 'attributes'])->paginate(15);


dd($properties);


        // Zusätzliche Daten für die View
        $propertyTypes = PropertyType::all();
        $amenities = Attribute::all();

        return view('rentalobj.frontend.search.search-results', compact(
            'properties',
            'propertyTypes',
            'amenities',
            'type',
            'location',
            'keyword',
            'minPrice',
            'maxPrice',
            'minSize',
            'maxSize',
            'rooms',
            'bathrooms',
            'bedrooms',
            'selectedAmenities'
        ));
    }





}
