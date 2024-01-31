<?php
// app/Http/Middleware/CheckAdminUsername.php

namespace App\Http\Middleware;

use Closure;

class CheckAdminUsername
{
    public function handle($request, Closure $next)
    {
        // Check if the authenticated user has the username 'admin'
        if (auth()->check() && auth()->user()->username === 'admin') {
            return $next($request);
        }

        // If not, redirect or respond as needed
        return redirect('/'); // Redirect to home for example
    }
}
