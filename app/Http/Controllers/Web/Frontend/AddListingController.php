<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AllCity;
use App\Models\Amenity;
use App\Models\AppartmentType;
use App\Models\Category;
use Illuminate\Http\Request;

class AddListingController extends Controller
{
    public function AddListing()
    {
        $categories = Category::all();
        $appartmenType = AppartmentType::all();
        $allCity = AllCity::all();
        $amenities = Amenity::all(); // Retrieve all amenities


         return view('frontend.layout.add_listing', compact('categories', 'appartmenType', 'allCity', 'amenities'));
    }
}
