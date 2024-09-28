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
}
