@extends('Template')

@section('content')
        	<!--- Body Area code goes here--->

            <!--- End Body code --->



<div class="container">
  <div class="row">
           		<div class="col"><strong>Order Id</strong></div>
           		<div class="col"><strong>Date</strong></div>
				<div class="col"><strong>Order Total</strong></div>
				<div class="col"><strong>Order Status</strong></div>
				<div class="col"><strong>Close order</strong></div>



       		</div>
          @foreach($orders as $order)
          <div class="row">
            <div class="col">#{{$order->Id}} <a href="orderdetails">Order Details</a></div>
            <div class="col">{{$order->Date}}</div>
      <div class="col">${{$order->Total}}</div>
      <div class="col">{{$order->Status}}</div>

            <div class="col">Close order</div>
          </div>
          @endforeach
  </div>
</div>

            <!--- End Body code --->
		</div>

</body>
</html>
@endsection
