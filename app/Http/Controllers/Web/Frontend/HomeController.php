<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AppartmentType;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $properties = Property::with(['appartmentType', 'images'])
            ->where('feature', 'active')
            ->get();

            $appartmentTypes = AppartmentType::all();


        return view('frontend.layout.home', compact('properties', 'appartmentTypes'));
    }


}
