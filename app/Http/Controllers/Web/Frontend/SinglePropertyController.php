<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SinglePropertyController extends Controller
{
    public function index()
    {
         return view('frontend.layout.listing-single');
    }
}
