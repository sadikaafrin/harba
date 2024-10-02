<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserRequest;

class UserRequestController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'property_id' => 'required|exists:properties,id',
            'name' => 'required|string',
            'phone' => 'nullable|string',
            'date' => 'nullable|date',
            'time' => 'nullable|string',
        ]);

        // Get the authenticated user
        $user = auth()->user();

        // Check if the request already exists for the user and property
        $dataExists = UserRequest::where('user_id', $user->id)
            ->where('property_id', $request->property_id)
            ->first();

        // If the request already exists, return an error message
        if ($dataExists) {
            return redirect()->back()->with('error', 'This request has already been made');
        }

        // Add the user_id to the validated data
        $validated['user_id'] = $user->id;

        // Create a new UserRequest
        UserRequest::create($validated);

        // Optionally, you can redirect or return a success message
        return redirect()->back()->with('success', 'Request sent successfully!');
    }
    public function search(Request $request)
    {
        // Get the search term from the input field 'search'
        $searchTerm = $request->input('search');

        // Query the user_requests table based on the 'name' column
        $properties = UserRequest::where('name', 'LIKE', '%' . $searchTerm . '%')->get();

        return view('frontend.layout.user-search-request.index', compact('properties'));
    }
}
