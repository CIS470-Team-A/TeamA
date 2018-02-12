<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CartMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
		$username = $request->ip();
		\Cart::restore($username);
		$response = $next($request);
		\DB::table('shoppingcart')->where('identifier',$username)->delete();
		\Cart::store($username);

        return $response;
    }
}
