@extends('Template')
@section('content')
<table class="table">
	<thead>
		<th scope="col">Order Id</th>
		<th scope="col">Date</th>
		<th scope="col">Order Total</th>
		<th scope="col">Order Status</th>
		@if(Auth::user()->customer)
		@else
			<th scope="col">Customer Name</th>
			<th scope="col">Modify Order</th>
			<th scope="col">Validate Order</th>
			<th scope="col">Close Order</th>
		@endif
	</thead>
	@foreach($orders as $order)
		<tbody>
			<td>#{{$order->Id}} <a href="{{route('orderdetails', ['id'=>$order->Id])}}">Order Details</a></td>
			<td>{{$order->Date}}</td>
			<td>${{$order->Total}}</td>
			<td>{{$order->Status}}</td>
			@if(Auth::user()->customer)
			@else
				<td>{{$order->customer->First_Name}} {{$order->customer->Last_Name}}</td>
				<td>@if($order->Status=="Processing")<form method="post" action="loadOrder">{{ csrf_field() }}<input type="hidden" name="loadOrder" value=""><button name="orderId" value="{{$order->Id}}" type="submit">Modify Order</button></form>@endif</td>
				<td>@if($order->Status =='Processing')<form method="post" action="{{route('orderclose')}}">{{ csrf_field() }}<input type="hidden" name="_method" value="PUT"><button name="id" value="{{$order->Id}}" type="submit">Validate Order</button></form>@endif</td>
				<td>@if($order->Status == 'Validated')<form method="post" action="{{route('orderclose')}}">{{ csrf_field() }}<input type="hidden" name="_method" value="PUT"><button name="id" value="{{$order->Id}}" type="submit">Close Order</button></form>@endif</td>
			@endif
		</tbody>
	@endforeach
</table>
@endsection
