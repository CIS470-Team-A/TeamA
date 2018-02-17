@extends('Template')

@section('content')
        	<!--- Body Area code goes here--->
        	<h1>Body</h1>
            <!--- End Body code --->
   	<tbody>

   		<?php foreach(Cart::content() as $row) :?>


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
        <!--- Footer --->
        <div class="Footer">
        	<h1>Footer</h1>
        </div>
        <!--- Base --->
        <div class="Base">
        <a href="/">Home</a>&nbsp;|&nbsp;<a href="catalog.html">Catalog</a>&nbsp;|&nbsp;<a href="shoppingcart.html">Cart</a>&nbsp;|&nbsp;<a href="login.html">Login</a>
        </div>
    </div>
    <!--- End Of Working Area --->
</body>
</html>
@endsection
