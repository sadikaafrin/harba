<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class GoogleController extends Controller
{
    /**
     * Redirects the user to Google's OAuth page for authentication.
     *
     * @return RedirectResponse
     */
    public function GoogleRedirect(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handles the callback after Google has authenticated the user.
     *
     * @return RedirectResponse
     */
    public function GoogleCallback(): RedirectResponse
    {
        $user = Socialite::driver('google')->user();


        $findUser = User::where('google_id', $user->id)->first();

        if ($findUser) {
            auth()->login($findUser);
        } else {
            $newUser = User::create([
                'name'             => $user->name,
                'email'            => $user->email,
                'password'         => bcrypt(Str::random(20)),
                'google_id'        => $user->id,
                'profile_picture'  => $user->profile_picture,
                'terms_and_policy' => true,
            ]);

            auth()->login($newUser);
        }
        return redirect()->route('home');
    }
}
