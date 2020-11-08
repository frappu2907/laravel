<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::user()){
            return redirect('login');
        }elseif(Auth::user()->is_admin == 1){
            return $next($request);
        }else{
            return redirect('home')->with('errorAdmin','You have not admin access'); 
        }
    }
}
