<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; 
use Symfony\Component\HttpFoundation\Response;

class Employee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
    //  if (!Auth::check()) {
    //         abort(403, 'User is not authenticated.');
    //     }

    //     $user = Auth::user();
    //     Log::info('User roles in Employee: ' . $user->getRoleNames());

    //     // Check if the user has the 'employee' role
    //     if (!$user->hasRole('employee')) {
    //         Log::info('User is not an employee.');
    //         abort(403, 'User is not an employee.');
    //     }

        return $next($request);

      
        
    }
}
