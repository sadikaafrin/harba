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
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();  // Get the authenticated user

        // If user is not logged in, redirect to login
        if (!$user) {
            return redirect()->route('login');
        }

        // Check the role of the user
        $userRole = $user->role;

        // If the route is for the admin dashboard
        if ($request->routeIs('dashboard') && $userRole !== 'admin') {
            return redirect()->route('add-listing');
        }

        // If the route is for adding a listing and the user is an admin
        if ($request->routeIs('add-listing') && $userRole !== 'user') {
            return redirect()->route('dashboard');
        }

        // Allow access if the user's role matches the route being accessed
        return $next($request);
    }
}
