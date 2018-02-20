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
		if(\Auth::user()->customer){
			$customer=\Auth::user()->customer->Id;
		}else{
			$customer=$request->get('customer');
		}
		if($request->get('paymentType')== 'BillonDelivery'){
			$paymentAmount=(\Cart::total()*.1);
		}
		else{
			$paymentAmount=(\Cart::total());
		}
		if(session('orderId')){
			$order= \App\Order::find(session('orderId'));
			$order->Customer_id=$customer;
			$order->Total=\Cart::total();
		  $order->Payment_Type=$request->get('paymentType');
		  $order->Payment_Amount=$paymentAmount;
		  session()->forget('orderId');
		}else{
        $order = \App\Order::create([
          'Customer_id'=>$customer,
          'Status'=>'Processing',
		  'Date'=>date('Y-m-d H:i:s'),
		  'Total'=>\Cart::total(),
		  'Payment_Type'=>$request->get('paymentType'),
		  'Payment_Amount'=>$paymentAmount,
		  ]);
		}

        $order->save();

        foreach(\Cart::content() as $row)
        {

          $lineItem = \App\LineItem::create([
            'Order_Id'=>$order->Id,
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
	  if($order->Status=="Processing"){
		$order->Status="Validated";
		}
		elseif($order->Status=="Validated"){
		  $order->Status = "Delivered";
	  }
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
    public function load(Request $request)
    {
        if(\Auth::user()->customer)
      {
        $orders =  \Auth::user()->customer->orders;
      }
      else
      {
        $orders = \App\Order::get();
      }
	  $order = $orders->where('Id', $request->get('orderId'))->first();
	  \Cart::destroy();
	  foreach($order->lineItems as $lineItem)
	  {
		  \Cart::add($lineItem->Product_Id, $lineItem->product->ProductName, $lineItem->Quantity, $lineItem->Price, ['content'=>$lineItem->Product_Content]);
		  
	  }
	  session()->put('orderId', $request->get('orderId'));
	  return redirect(route('shoppingcart.index'));
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
