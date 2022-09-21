<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class VendorMiddleware
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
        
        if(Auth::user()->role_as == 'vendor'){
            if(Auth::check() && Auth::user()->isban){

                $banned = Auth::user()->isban =='1';
                Auth::logout();
     
                if($banned == 1){
                    $message ='Your account has been banned please contact Administrator.';
     
     
     
                }
                return redirect()->route('login')->
                with('status',$message)->
                withErrors(['email' =>'Your account has been banned please contact Administrator.']);
     
     
            }
            return $next($request);
    
           }else{
    
            return redirect('/home')->with('stastus','You are not allow to acess the VENDOR Dashboard...');
           }
        
    }
}
