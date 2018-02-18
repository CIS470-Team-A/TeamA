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
				@if(Auth::user()->customer)
				@else
				<div class="col"><strong>Customer Name</strong></div>
				<div class="col"><strong>Close order</strong></div>
				@endif



       		</div>
          @foreach($orders as $order)
          <div class="row">
            <div class="col">#{{$order->Id}} <a href="{{route('orderdetails', ['id'=>$order->Id])}}">Order Details</a></div>
            <div class="col">{{$order->Date}}</div>
      <div class="col">${{$order->Total}}</div>
	  <div class="col">{{$order->Status}}</div>
	       @if(Auth::user()->customer)
      @else
      <div class="col">{{$order->customer->First_Name}} {{$order->customer->Last_Name}}</div>
        
		<div class="col"><form method="post" action="{{route('orderclose')}}">{{ csrf_field() }}<input type="hidden" name="_method" value="PUT"><button name="id" value="{{$order->Id}}" type="submit">Close Order</button></form></div>
		
      @endif


            
          </div>
          @endforeach
  </div>
</div>

            <!--- End Body code --->
		</div>

</body>
</html>
@endsection
