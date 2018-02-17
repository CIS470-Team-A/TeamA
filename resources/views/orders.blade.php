@extends('Template')

@section('content')
        	<!--- Body Area code goes here--->

            <!--- End Body code --->
   	<tbody>



       		<tr>
           		<td>Order id</td>
           		<td>Date</td>
				<td>Order Total</td> 
				<td>Order status</td>
				@if (Auth::check())
           		<td>Close order</td>
				@endif


       		</tr>
            <!--- End Body code --->
		</div>

</body>
</html>
@endsection
