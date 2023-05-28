<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    public function handle(Request $request, Closure $next)
    {   
        $adminEmail = 'errguyby.rachida@gmail.com'; 
        if(Auth::check() && Auth::user()->email == $adminEmail)
        return $next($request);
        abort(401,'You have not admin access');
    }
}
