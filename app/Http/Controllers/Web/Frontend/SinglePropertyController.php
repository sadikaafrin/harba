<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class SinglePropertyController extends Controller
{
    public function index($id)
    {
        $singleProperty = Property::with('images', 'amenities')->findOrFail($id);
        return view('frontend.layout.listing-single', compact('singleProperty'));
    }
    public function search(Request $request)
    {

    // Get the search term from the request
    $searchTerm = $request->input('property_title'); // Assuming the search input has this name

    $properties = Property::where(function ($query) use ($searchTerm) {
        // Search by property title and keyword
        $query->where('property_title', 'LIKE', '%' . $searchTerm . '%')
              ->orWhere('keyword', 'LIKE', '%' . $searchTerm . '%');

        // Always check for bedrooms and bathrooms
        $query->orWhere('bedroom', 'LIKE', '%' . $searchTerm . '%')
              ->orWhere('bethrooms', 'LIKE', '%' . $searchTerm . '%')
              ->orWhere('area', 'LIKE', '%' . $searchTerm . '%'); // Allow for LIKE search on area
    })->get();

    // Return a view with the search results
    return view('frontend.layout.search_results', compact('properties', 'searchTerm'));
    }
}
