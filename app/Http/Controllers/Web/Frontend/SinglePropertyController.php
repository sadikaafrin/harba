<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\UserRequest;

class SinglePropertyController extends Controller
{
    public function index($id)
    {
        $singleProperty = Property::with(['images', 'amenities', 'user'])->findOrFail($id);
        return view('frontend.layout.listing-single', compact('singleProperty'));
    }



    public function search(Request $request)
    {

        // Get the search term from the request
        $searchTerm = $request->input('property_title');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        $properties = Property::where(function ($query) use ($searchTerm) {
            // Search by property title and keyword
            $query->where('property_title', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('keyword', 'LIKE', '%' . $searchTerm . '%');

            // Always check for bedrooms and bathrooms
            $query->orWhere('bedroom', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('bethrooms', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('area', 'LIKE', '%' . $searchTerm . '%'); // Allow for LIKE search on area
        })
            ->when($minPrice && $maxPrice, function ($query) use ($minPrice, $maxPrice) {
                $query->whereBetween('price', [$minPrice, $maxPrice]);
            })
            ->get();

        // Return a view with the search results
        return view('frontend.layout.search_results', compact('properties', 'searchTerm'));
    }

    // public function store(Request $request)
    // {
    //     // Validate the incoming request data
    //     $validated = $request->validate([
    //         'property_id' => 'required|exists:properties,id',
    //         'name' => 'required|string',
    //         'phone' => 'nullable|string',
    //         'date' => 'nullable|date',
    //         'time' => 'nullable|string',
    //     ]);

    //     // Get the authenticated user
    //     $user = auth()->user();

    //     // Check if the request already exists for the user and property
    //     $dataExists = UserRequest::where('user_id', $user->id)
    //         ->where('property_id', $request->property_id)
    //         ->first();

    //     // If the request already exists, return an error message
    //     if ($dataExists) {
    //         return redirect()->back()->with('error', 'This request has already been made');
    //     }

    //     // Add the user_id to the validated data
    //     $validated['user_id'] = $user->id;

    //     // Create a new UserRequest
    //     UserRequest::create($validated);

    //     // Optionally, you can redirect or return a success message
    //     return redirect()->back()->with('success', 'Request sent successfully!');
    // }
}
