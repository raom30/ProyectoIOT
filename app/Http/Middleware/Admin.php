<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->hasRole('admin'))
    	{
    		return $next($request);
    	}
    	Log::debug(Auth::user()->hasRole('admin'));
    	Log::warning('Usuario no administrador intenta acceder a recurso protegido');
    	
    	return redirect('/');
    }
}
