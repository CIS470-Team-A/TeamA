@extends('Template')
@section('content')
			<form method="post">
			{{ csrf_field() }}
<div class="container">
  <div class="row align-items-center">
           	<div class="col"><strong>Product</strong></div>
           	<div class="col"><strong>Qty</strong></div>
			<div class="col"><strong> </strong></div>
			<div class="col"><strong>Product Content</strong></div>
           	<div class="col"><strong>Price</strong></div>
           	<div class="col"><strong>Subtotal</strong></div>
			<div class="col"></div>
	</div>
	

   		@foreach(Cart::content() as $row)


       		<div class="row">
           		<div class="col"><strong><?php echo $row->name; ?></strong><img src="" /></div>
           		<div class="col"><input name="row[{{$row->rowId}}]" type="text" size="5" value="<?php echo $row->qty; ?>"></div>
				<div class="col"><button type="submit">Update Cart</button></div>
				<div class="col"><textarea name="content[{{$row->rowId}}]" type="text" maxlength="150" placeholder="Enter your content here. Max 150 characters">{{isset($row->options['content']) ? $row->options['content'] : ''}}</textarea></div>
           		<div class="col">$<?php echo $row->price; ?></div>
           		<div class="col">$<?php echo round($row->total, 2); ?></div>
				<div class="col"></div>

       		</div>

	   	@endforeach
		</form>

		<form method="post" action="orders">	{{ csrf_field() }}

   		<div class="row">
   			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
   			<div class="col"><strong>Subtotal</strong></div>
   			<div class="col">$<?php echo Cart::subtotal(); ?></div>
   		</div>
   		<div class="row">
   			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
   			<div class="col"><strong>Tax</strong></div>
   			<div class="col">$<?php echo Cart::tax(); ?></div>
   		</div>
   		<div class="row">
   			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
   			<div class="col"><strong>Total</strong></div>
   			<div class="col">$<?php echo Cart::total(); ?></div>
   		</div>
		<div class="row">
			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>

			<div class="col"><a class="btn btn-primary" href="payment">Place Order</a>
		
		</div>
</div>

</form>
@endsection
