<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DoctorRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $jwt = $request->get('jwt');
        if ($jwt) {
            $request->headers->set('Authorization', 'Bearer ' . $jwt);
        }

        // Check if user is authenticated
        if (!Auth::check() || !$request->user()) {
            return response()->json(['message' => 'Unauthorized.'], 401);
        }
        // Verify if the authenticated user has a role of 'doctor'
        if ($request->user()->role !== 'patient') {
            return response()->json(['message' => 'Access forbidden for non-doctors.'], 403);
        }
        
        return $next($request);
    }
}
