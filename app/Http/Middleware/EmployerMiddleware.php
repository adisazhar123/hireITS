<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class EmployerMiddleware
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
      if(Auth::check())
        if(Auth::user()->role === "employer")
          return $next($request);
      return redirect('/')->with('error','For employer only');
      }
}
