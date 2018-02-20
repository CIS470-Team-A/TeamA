@extends('Template')

@section('content')
<table class="table">
  <thead>
		<th scope="col">Order Id</th>
		<th scope="col">Date</th>
		<th scope="col">Order Total</th>
		<th scope="col">Order Status</th>
		<th scope="col">Payment Type</th>
		<th scope="col">Payment Amount</th>



    </thead>
	
		
	
		
	
	<tbody>
		<td>#{{$order->Id}}</td>
		<td>{{$order->Date}}</td>
		<td>${{$order->Total}}</td>
		<td>{{$order->Status}}</td>
		
		<td>@if($order->Payment_Type=="BillonDelivery")Bill on Delivery</td>
	@elseif($order->Payment_Type=="Billing")
		<td>Billing
		@endif</td>
		<td>${{round($order->Payment_Amount,2)}}</td>
    </tbody>
</table>
  <table class="table">
	<thead>
           	<th scope="col">Product</th>
           	<th scope="col">Qty</th>
			<th scope="col">Product Content</th>
           	<th scope="col">Price</th>
           	<th scope="col">Total</th>

	</thead>
	<tbody>
		  
		  @foreach($order->lineItems as $lineItem)
	  
           	<td>{{$lineItem->product->ProductName}}</td>
           	<td>{{$lineItem->Quantity}}</td>
			<td>{{$lineItem->Product_Content}}</td>
			<td>${{$lineItem->Price}}</td>
           	
</td>
			@endforeach
	<td>${{$order->Total}}</td>
	</tbody>
</table>

</body>
</html>
@endsection
