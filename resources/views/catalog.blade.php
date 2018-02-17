@extends('Template')

@section('content')


<!--- CSS --->


        <div class="BodyMain">
		@if(session("flash_success"))
		{{session("flash_success")}}
	@endif
        	<!--- Body Area code goes here---><form method="post"> 
			<div class="row">
				   {{ csrf_field() }}
				@foreach($products as $product)
				<div class="col-6 col-md-4">
				<p>{{$product->ProductName}}</p>
					<p><img src="{{asset("graphics/".$product->ProductPic)}}" /></p>
				<p>{{$product->ProductType}}, {{$product->Media}}, ${{$product->Price}} </p>
				@if (Auth::check())
				<p><button name="addCart" value="{{$product->Id}}" type="submit">Add to Cart</button></p>
			</form>
				@else
			<form method="post">
				<p><button name="login" onclick="window.location.href='{{ route('login') }}'" type="button">Login to Add to Cart</button></p>
				@endif
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
