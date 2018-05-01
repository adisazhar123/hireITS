<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class FreelancerMiddleware
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
        if(Auth::user()->role === "freelancer")
          return $next($request);
        return redirect('/')->withErrors('For freelancer only');
      }
}
