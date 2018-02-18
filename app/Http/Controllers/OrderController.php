<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(\Auth::user()->customer)
      {
        $orders =  \Auth::user()->customer->orders;
      }
      else
      {
        $orders = \App\Order::get();
      }
        return view('orders',['orders'=>$orders]);
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
        //

        $order = \App\Order::create([
          'Customer_id'=>\Auth::user()->customer->Id,
          'Status'=>'Processing',
		  'Date'=>date('Y-m-d H:i:s'),
		  'Total'=>\Cart::total(),


        ]);
        $order->save();

        foreach(\Cart::content() as $row)
        {

          $lineItem = \App\LineItem::create([
            'Order_Id'=>$order->id,
            'Product_Id'=>$row->id,
            'Quantity'=>$row->qty,

            'Price'=>$row->price,
            'Product_Content'=>$row->options['content']

          ]);
          $lineItem->save();
        }
        \Cart::destroy();
        return redirect('orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
     if(\Auth::user()->customer)
      {
        $orders =  \Auth::user()->customer->orders;
      }
      else
      {
        $orders = \App\Order::get();
      }
	  $order = $orders->where('Id', $request->get('id'))->first();
        return view('orderdetails',['order'=>$order]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
		if(\Auth::user()->customer)
      {
        $orders =  \Auth::user()->customer->orders;
      }
      else
      {
        $orders = \App\Order::get();
      }
	  $order = $orders->where('Id', $request->get('id'))->first();
	  $order->Status = "Delivered";
	  $order->save();
	  return back();
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
