<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddListingController extends Controller
{
    public function AddListing()
    {
         return view('frontend.layout.add_listing');
    }
}
