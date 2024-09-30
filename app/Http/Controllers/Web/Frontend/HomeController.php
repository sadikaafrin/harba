<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $properties = Property::with(['images'])
            ->where('feature', 'active')
            ->get();
        return view('frontend.layout.home', compact('properties'));
    }
}
