<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Sentinel;
class admin
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
     
      if (!Sentinel::check()) {
            return redirect()->route('getAdmin');
            
        } 
        else
         {

            if (Sentinel::inRole('nur') ) {


                $onuser = Sentinel::getUser();
                view()->share('onuser', $onuser);

            } else {
              
                return redirect()->route('getAdmin');

            } 

        }

        return $next($request);
    }
}
