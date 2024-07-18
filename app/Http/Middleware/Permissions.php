<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Permissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd("here");
        $route = $request->route()->getName();
        $permissions = [
            'employee.index' => 'show employee',
            'employee.show' => 'show employee',
            'employee.edit' => 'update employee',
            'employee.update' => 'update employee',
            'employee.destroy' => 'destroy employee',
            'employee.create' => 'create employee',
            'employee.store' => 'create employee',

            'company.index' => 'show company',
            'company.edit' => 'update company',
            'company.update' => 'update company',
            'company.update' => 'update company',
            'company.destroy' => 'destroy company',
            'company.create' => 'create company',
            'company.store' => 'create company',
        ];

        $user = Auth::user();

        $role = $user->roles()->first();

        if ($role->hasPermissionTo($permissions[$route]) == false) {
            abort(403, 'Unauthorized action!');
        }

        return $next($request);
    }
}
