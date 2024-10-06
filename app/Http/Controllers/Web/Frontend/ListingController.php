<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AllCity;
use App\Models\Amenity;
use App\Models\AppartmentType;
use App\Models\Property;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        // Fetch all amenities
        $amenities = Amenity::all();
        $properties = Property::with(['appartmentType', 'images', 'amenities'])
            ->where('feature', 'active')
            ->get();


        // Filter properties if amenities are selected
        if ($request->has('amenities')) {
            $selectedAmenities = $request->input('amenities');

            $properties = $properties->whereHas('amenities', function ($query) use ($selectedAmenities) {
                $query->whereIn('amenity_id', $selectedAmenities);
            });
        }

        $appartmentTypes = AppartmentType::all();
        $propertyCity = AllCity::all();
        return view('frontend.layout.listing-search', compact('properties', 'appartmentTypes', 'propertyCity', 'amenities'));
    }

    public function advanceSearch(Request $request)
    {

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


        // Apply price range filter (using only `price` column)
        if ($request->filled('min_price') && is_numeric($request->min_price)) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price') && is_numeric($request->max_price)) {
            $query->where('price', '<=', $request->max_price);
        }

        // if ($request->filled('price')) {
        //     $query->where('price', '>=', (int)$request->price);
        // }


        // Apply area range filter (using only `area` column)
        if ($request->filled('min_area') && is_numeric($request->min_area)) {
            $query->where('area', '>=', $request->min_area);
        }

        if ($request->filled('max_area') && is_numeric($request->max_area)) {
            $query->where('area', '<=', $request->max_area);
        }

        // if ($request->filled('area')) {
        //     $query->where('area', '>=', (int)$request->area);
        // }


        // Filter by bathrooms
        if ($request->filled('bethrooms') && is_numeric($request->bethrooms)) {
            $query->where('bethrooms', '>=', $request->bethrooms);
        }

        // Filter by amenities
        if ($request->filled('amenities') && is_array($request->amenities)) {
            $query->whereHas('amenities', function ($query) use ($request) {
                $query->whereIn('amenity_id', $request->amenities);
            });
        }

        // Execute the query and get filtered properties
        $properties = $query->get();
        // Dynamic price range

        $appartmentTypes = AppartmentType::all();
        $allCities = AllCity::all();


        // Search term for display (optional)
        $searchTerm = "Filtered Properties"; // Customize based on your filters
        return view('frontend.layout.advance-search.listing-search', compact('properties', 'appartmentTypes', 'allCities', 'searchTerm'));
    }
}
