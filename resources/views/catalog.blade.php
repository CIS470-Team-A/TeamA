@extends('Template')

@section('content')


<!--- CSS --->


        <div class="BodyMain">
		@if(session("flash_success"))
		{{session("flash_success")}}
	@endif
        	<!--- Body Area code goes here--->
			<form method="post">    {{ csrf_field() }}
			@foreach($products as $product)
        	<div id="itembox">
			<h1>{{$product->ProductName}}</h1>
				<img src="{{asset("graphics/".$product->ProductPic)}}" />
			<p>{{$product->ProductType}}, {{$product->Media}}, ${{$product->Price}}, <button name="addCart" value="{{$product->Id}}" type="submit">Add to Cart</button></p>
			</div>
			@endforeach
			
			</form>
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
