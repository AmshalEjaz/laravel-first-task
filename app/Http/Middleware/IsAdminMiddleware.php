<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; 
use Symfony\Component\HttpFoundation\Response;

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  array  ...$permissions
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd("here");
        //  if (!Auth::check()) {
        //     abort(403, 'User is not authenticated.');
        // }

        // $user = Auth::user();
        // Log::info('User roles in IsAdminMiddleware: ' . $user->getRoleNames());
        
        // $user = $request->user();
        // $user_roles = $user->roles->pluck('name')->toArray();

        // if (in_array('admin', $user_roles)) {
        //     return $next($request);
        // } 
        // else {
        //    // return redirect()->back()->withErrors(['Unauthorized']);
        //    abort(403, 'User is not an employee.');
        // }

       
    }
}
