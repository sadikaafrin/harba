<?php

namespace App\Http\Controllers\Web\Backend\Settings;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display the profile settings page.
     *
     * @return View
     */
    public function showProfile(Request $request)
    {
        $user=User::find($request->id);
        return view('backend.layout.settings.profile_settings', compact('user'));
    }
}
