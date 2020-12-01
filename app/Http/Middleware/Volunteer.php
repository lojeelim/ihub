<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Volunteer
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
        if(!Auth::check()){
            return redirect()->route('login');
        }

        if(Auth::user()->type == 'admin'){
            return redirect()->route('admin');
            
        }
        if(Auth::user()->type == 'volunteer'){
            return $next($request);
        }

        if(Auth::user()->type == 'user'){
            return redirect()->route('user');
        }
    }
}
