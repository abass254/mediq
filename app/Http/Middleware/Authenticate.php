<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next, ...$guards)
    {
        // Your logic here


        $jwt = $request->cookie('jwt');
        
        if($jwt){
            $request->headers->set('Authorization', 'Bearer '. $jwt);
        }

        $this->authenticate($request, $guards);
        return $next($request);
    }
}
