<?php

namespace App\Http\Controllers\Web\Backend\Settings;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;

class ProfileController extends Controller
{
    /**
     * Display the profile settings page.
     *
     * @return View
     */
    public function showProfile(Request $request)
    {
        $user = User::find($request->id);
        return view('backend.layout.settings.profile_settings', compact('user'));
    }

    /**
     * Update the user's profile information.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function UpdateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'  => 'nullable|max:100|min:2',
            'email' => 'nullable|email|unique:users,email,' . auth()->user()->id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $user        = User::find(auth()->user()->id);
            $user->name  = $request->name;
            $user->email = $request->email;

            $user->save();
            return redirect()->back()->with('t-success', 'Profile updated successfully');
        } catch (Exception) {
            return redirect()->back()->with('t-error', 'Something went wrong');
        }
    }


    public function UpdateProfilePicture(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Max 2MB
        ]);

        $user = auth()->user(); // Get the authenticated user

        try {
            // Check if a new file is uploaded
            if ($request->hasFile('profile_picture')) {
                $file = $request->file('profile_picture');

                // If the user has an existing profile picture, delete it first
                if (!is_null($user->profile_picture)) {
                    deleteImage($user->profile_picture); // Delete old profile picture if it exists
                }

                // Upload and store the new image
                $path = uploadImage($file, 'profile_pictures', $user->name); // Save it in the 'profile_pictures' folder

                // Update user's profile picture in the database
                $user->profile_picture = $path;
                $user->save();
            }

            return response()->json([
                'success' => true,
                'image_url' => asset($user->profile_picture), // Return the new image URL to update the frontend
            ]);

        } catch (\Exception $e) {
            // Log the error for further debugging
            \Log::error('Profile Picture Update Error: ' . $e->getMessage());

            // Return a failure response
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while updating the profile picture.',
            ], 500);
        }
    }
}
