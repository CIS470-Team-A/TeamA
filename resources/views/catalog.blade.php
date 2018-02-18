@extends('Template')

@section('content')


<!--- CSS --->


        <div class="BodyMain">
		@if(session("flash_success"))
		<p class="alert alert-success">	
		{{session("flash_success")}}
	@endif
		</p>
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

</body>
</html>
@endsection
