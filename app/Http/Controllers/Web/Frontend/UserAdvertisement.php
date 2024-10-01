<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class UserAdvertisement extends Controller
{
    public function advertisemnent()
    {
        $user = auth()->user();
        $property = Property::where('user_id', $user->id)->get();
        return view('frontend.layout.user-advertisement', compact('property'));
    }
}
