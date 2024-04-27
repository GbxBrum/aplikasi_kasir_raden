<?php

namespace App\Http\Middleware;

use App\Models\admin;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $levels): Response
    {
         // Periksa peran pengguna
         $user = admin::user();
         if (in_array($user->role, $levels)) {
             return $next($request);
         }
 
         abort(403, 'unauthorize');

         
        return $next($request);
    }
}
