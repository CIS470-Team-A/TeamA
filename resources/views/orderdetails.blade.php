@extends('Template')

@section('content')
<div class="container">
  <div class="row">
           		<div class="col"><strong>Order Id</strong></div>
           		<div class="col"><strong>Date</strong></div>
				<div class="col"><strong>Order Total</strong></div>
				<div class="col"><strong>Order Status</strong></div>
				<div class="col"><strong></strong></div>



       		</div>
	          <div class="row">
            <div class="col">#{{$order->Id}}</div>
            <div class="col">{{$order->Date}}</div>
      <div class="col">${{$order->Total}}</div>
      <div class="col">{{$order->Status}}</div>
			<div class="col"></div>
          </div>
  <div class="row align-items-center">
           	<div class="col"><strong>Product</strong></div>
           	<div class="col"><strong>Qty</strong></div>
			<div class="col"><strong>Product Content</strong></div>
           	<div class="col"><strong>Price</strong></div>
           	<div class="col"><strong>Subtotal</strong></div>

	</div>

		  
		  @foreach($order->lineItems as $lineItem)
	  <div class="row align-items-center">
           	<div class="col">{{$lineItem->product->ProductName}}</div>
           	<div class="col">{{$lineItem->Quantity}}</div>
			<div class="col">{{$lineItem->Product_Content}}</div>
			<div class="col">${{$lineItem->Price}}</div>
           	<div class="col">${{$lineItem->Price*$lineItem->Quantity}}</div>
</div>
			@endforeach
	

		</div>

</body>
</html>
@endsection
