<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            // Redirect to the login page with an error message
            return redirect()->route('login')->withErrors(['message' => 'You must be logged in to access that page.']);
        }

        return $next($request); // Continue to the next middleware or controller
    }
}
