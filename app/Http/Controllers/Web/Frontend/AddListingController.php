<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AllCity;
use App\Models\Amenity;
use App\Models\AppartmentType;
use App\Models\Category;
use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AddListingController extends Controller
{
    public function AddListing()
    {
        // Ensure the user is logged in
        if (!Auth::check()) {
            return redirect()->back();
        }

        $categories = Category::all();
        $appartmenType = AppartmentType::all();
        $allCity = AllCity::all();
        $amenities = Amenity::all(); 

        return view('frontend.layout.add_listing.index', compact('categories', 'appartmenType', 'allCity', 'amenities'));
    }
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'appartment_type_id' => 'required|exists:appartment_types,id',
            'property_title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'keyword' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'all_cities_id' => 'required|exists:all_cities,id',
            'address' => 'required|string|max:1000',
            'area' => 'required|string',
            'bedroom' => 'required|integer',
            'bethrooms' => 'required|integer',
            'parking' => 'required|string',
            'accomudation' => 'required|string',
            'website' => 'nullable|string',
            'details' => 'nullable|string|max:1000',
            'amenities' => 'array',
            'images' => 'array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        // Return validation errors if any
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            // Begin Transaction
            DB::beginTransaction();

            // Create the property
            $property = new Property($request->except(['amenities', 'images', 'all_cities_id']));
            $property->user_id = Auth::id(); // Set the authenticated user's ID

            $property->all_cities_id = $request->input('all_cities_id')[0]; // Store the first city ID from the array
            $property->save(); // Save the property

            // Attach amenities if provided
            if ($request->has('amenities')) {
                $property->amenities()->attach($request->amenities);
            }

            // Handle image upload
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePath = uploadImage($image, 'add-properties', Str::uuid());
                    PropertyImage::create([
                        'property_id' => $property->id,
                        'images' => $imagePath,
                    ]);
                }
            }

            // Commit transaction
            DB::commit();

            return response()->json(['message' => 'Property created successfully']);
        } catch (\Exception $e) {
            // Rollback in case of an error
            DB::rollBack();

            return response()->json(['error' => 'An unexpected error occurred. ' . $e->getMessage()], 500);
        }
    }
}
