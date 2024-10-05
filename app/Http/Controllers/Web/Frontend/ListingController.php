<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AllCity;
use App\Models\AppartmentType;
use App\Models\Property;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Request $request)
    {

        $properties = Property::with(['appartmentType', 'images'])
            ->where('feature', 'active')
            ->get();

        $appartmentTypes = AppartmentType::all();
        $propertyCity = AllCity::all();
        return view('frontend.layout.listing-search', compact('properties', 'appartmentTypes', 'propertyCity'));
    }

    public function advanceSearch(Request $request)
    {
        dd($request->all());
        // Initialize the query
        $query = Property::with(['appartmentType', 'images'])
            ->where('feature', 'active');

        // Filter by created_at date
        if ($request->filled('created_at')) {
            $query->whereDate('created_at', '=', $request->created_at);
        }

        // // Filter by updated_at date
        if ($request->filled('updated_at')) {
            $query->whereDate('updated_at', '=', $request->updated_at);
        }


        // Filter by appartment_type_id
        if ($request->filled('appartment_type_id')) {
            $query->where('appartment_type_id', $request->appartment_type_id);
        }


        // Filter by appartment_type_id
        if ($request->filled('all_cities_id')) {
            $query->where('all_cities_id', $request->city_id);
        }

        // Get min and max price from the request
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        // Apply filters if values are set
        if ($minPrice !== null && is_numeric($minPrice)) {
            $query->where('price', '>=', $minPrice);
        }

        if ($maxPrice !== null && is_numeric($maxPrice)) {
            $query->where('price', '<=', $maxPrice);
        }

        if ($request->filled('area')) {
            $query->where('area', '>=', (int)$request->area); // Ensure it's an integer
        }
        // Execute the query and get filtered properties
        $properties = $query->get();
        // Dynamic price range

        $appartmentTypes = AppartmentType::all();


        // Search term for display (optional)
        $searchTerm = "Filtered Properties"; // Customize based on your filters
        return view('frontend.layout.advance-search.listing-search', compact('properties', 'appartmentTypes', 'searchTerm'));
    }
}
