<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

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
        if(!Auth::check()){
            return redirect()->route('login');
        }

        if(Auth::user()->type =="admin"){
            
            return $next($request);
        }
        if(Auth::user()->type == 'volunteer'){
            return redirect()->route('volunteer');
        }

        if(Auth::user()->type =="user"){
            return redirect()->route('user');
        }
        

    }
}
