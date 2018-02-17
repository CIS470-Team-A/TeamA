@extends('Template')

@section('content')
        	<!--- Body Area code goes here--->

            <!--- End Body code --->



<table>
       		<tr>
           		<td>Order id</td>
           		<td>Date</td>
				<td>Order Total</td>
				<td>Order status</td>
     		<td>Close order</td>



       		</tr>
          @foreach($orders as $order)
          <tr>
            <td>{{$order->Id}}</td>
            <td>Date</td>
      <td>{{$order->lineItems->sum('Price')}}</td>
      <td>{{$order->Status}}</td>

            <td>Close order</td>
          </tr>
          @endforeach
</table>

            <!--- End Body code --->
		</div>

</body>
</html>
@endsection
