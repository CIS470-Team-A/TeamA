<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $canPlaceOrder=true;
      foreach(Cart::content() as $row)
      {
        if (!isset($row->options['content']) || $row->options['content'] == '')
        {
          $canPlaceOrder=false;
        }
      }
      if (Cart::content()->count() == 0)
      {
        $canPlaceOrder = false;
      }
      if (\Auth::user()->customer && \Auth::user()->customer->Address='')
      {
        $canPlaceOrder = false;
      }

        return view ("shoppingcart",['canPlaceOrder'=>$canPlaceOrder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		foreach($request->input("row") as $rowId=>$quantity):
		if($quantity == "0" || $quantity==""){
			Cart::remove($rowId);
		}else{
			
			Cart::update($rowId, ['qty'=>$quantity, 'options'=>['content'=>$request->input("content.$rowId")]]);
		}
		endforeach;
session()->flash("flash_success", "Your Cart has been Updated");
		return(back());
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
