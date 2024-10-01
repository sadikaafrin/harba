<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

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

    public function changePassword(Request $request)
    {
        // Validate the input data
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->first()]);
        }

        $user = Auth::user();

        // Check if current password matches the stored password
        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json(['status' => 'error', 'message' => 'Current password is incorrect']);
        }

        // Update the user's password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json(['status' => 'success', 'message' => 'Password successfully updated']);
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

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'phone' => 'nullable|string|max:15',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;

        // Ensure userDetail relationship exists, if not create a new one
        if ($user->userDetail) {
            $userDetail = $user->userDetail;
        } else {
            $userDetail = new UserDetail();
            $userDetail->user_id = $user->id; // Assuming user_id is the foreign key in user_details table
        }

        // Update or set the phone number
        $userDetail->phone = $request->phone;
        $userDetail->save();

        $user->save(); // Save user changes

        // Return a success response for the AJAX call
        return response()->json(['success' => true, 'message' => 'Information successfully updated']);
    }
}
