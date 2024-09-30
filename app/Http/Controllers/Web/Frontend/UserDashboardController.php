<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function UserDashboardController()
    {
       // Get the authenticated user's ID
       $userId = Auth::id();

       // Retrieve properties related to the authenticated user
       $userProperties = Property::where('user_id', $userId)->get();
        return view('frontend.layout.user-dashboard', compact('userProperties'));
    }
    public function EditProfile()
    {
        return view('frontend.layout.edit-profile');
    }
    public function Update(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();

        // Check if the user role is 'user'
        if ($user->role !== 'user') {
            return back()->withErrors(['error' => 'You do not have permission to update this information.']);
        }

        // Validate the incoming data
        $validatedData = $request->validate([
            'facebook' => 'nullable|string|max:255',
            'tiktok' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'x_twitter' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
        ]);

        // Check if user details exist; if not, create a new one
        $userDetail = $user->userDetail ?? new \App\Models\UserDetail(['user_id' => $user->id]);

        // Update social media links
        $userDetail->facebook = $validatedData['facebook'];
        $userDetail->tiktok = $validatedData['tiktok'];
        $userDetail->instagram = $validatedData['instagram'];
        $userDetail->x_twitter = $validatedData['x_twitter'];
        $userDetail->youtube = $validatedData['youtube'];

        // Attempt to save the user detail record
        try {
            $userDetail->save();
            // Redirect back with a success message
            return back()->with('success', 'Data updated successfully.');
        } catch (\Exception $e) {
            // In case of any unexpected errors, return an error message
            return back()->withErrors(['error' => 'An error occurred while updating your social media links. Please try again.']);
        }
    }
}
