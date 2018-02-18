<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{

  public function handle($request, Closure $next)
  {
                $response =  $next($request);
        if (\Auth::check() && \Auth::user()->customer){
          if(\Auth::user()->customer->Address=='')
            $request->session()->flash('flash_error','Please finish creating your account.');




        }

        return $response;
    }
}
