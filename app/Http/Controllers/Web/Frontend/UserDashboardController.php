<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function UserDashboardController()
    {
        return view('frontend.layout.user-dashboard');
    }
}
