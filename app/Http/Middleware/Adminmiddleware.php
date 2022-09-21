<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
class Adminmiddleware
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
       // return $next($request);

       if(Auth::user()->role_as == 'admin'){
        if(Auth::check()){

            $expiresAt =Carbon::now()->addMinutes(1);
           Cache::put('user-is-online'. Auth::user()->id, true, $expiresAt);
       }
        return $next($request);

       }else{

        return redirect('/home')->with('stastus','You are not allow to acess the Dashboard...');
       }

  
    }
}
