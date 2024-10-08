<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,  string $role): Response
    {
        // $user = Auth::user();  // Get the authenticated user

        // // If user is not logged in, redirect to login
        // if (!$user) {
        //     return redirect()->route('login');
        // }

        // // Check the role of the user
        // $userRole = $user->role;

        // // If the route is for the admin dashboard
        // if ($request->routeIs('dashboard') && $userRole !== 'admin') {
        //     return redirect()->route('user-dashboard');
        // }

        // // If the route is for adding a listing and the user is an admin
        // if ($request->routeIs('add-listing') && $userRole !== 'user') {
        //     return redirect()->route('dashboard');
        // }

        // // Allow access if the user's role matches the route being accessed
        // return $next($request);


        $user = Auth::user();  // Get the authenticated user

        // If the user is not logged in, redirect to the login page
        if (!$user) {
            return redirect()->route('home');
        }

        // If the user doesn't have the required role, redirect them
        if ($user->role !== $role) {
            // Redirect based on the role
            if ($role === 'admin') {
                return redirect()->route('user-dashboard');
            } else {
                return redirect()->route('dashboard');
            }
        }

        // Allow access if the user has the correct role
        return $next($request);
    }
}