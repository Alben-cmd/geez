<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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
        if (auth::check() && Auth::user()->role_id == 3) {
            return $next($request);
        }
        else {
            return redirect()->back()->with('info','opps!, Access Denied!!');
        }
        
    }
}
