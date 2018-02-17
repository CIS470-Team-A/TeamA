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
        //See if we have a cart cookie, if not we'll make one
        $cartIdentifier = \Cookie::get('cart');
        if ($cartIdentifier == null) {
            $cartIdentifier = 'ABCD' . str_random(10, 20);
        }
        //If we don't have a cart in our session, try and load it from the database
        if (!session()->has('cart')) {
            \Cart::restore($cartIdentifier);
        }
        //Continue with the page load
        $response =  $next($request);

        //Now we'll apply the cookie to the response, if we can.
        if (is_a($response, '\Illuminate\Http\Response')) {
            $response->withCookie(cookie()->forever('cart', $cartIdentifier));
        }
        //Now we'll update the cart in the database
        \DB::table('shoppingcart')->where('identifier', $cartIdentifier)->delete();
        \Cart::store($cartIdentifier);
        return $response;
    }
}
