@extends('Template')

@section('content')
        	<!--- Body Area code goes here--->
        	<h1>Body</h1>
<form method="post" action="orders">	{{ csrf_field() }}

<label class="radio">
<input type="radio" name="paymentType" value="1" />
<strong>Billing</strong>
</label>
<label class="radio">
<input type="radio" name="paymentType" value="3" />
<strong>Bill On Delivery</strong> (10% Down now) $<?php echo round(Cart::total()* .1, 2); ?>
</label>
<button type="submit" >Complete Order</button>
</form>

            <!--- End Body code --->
		</div>

</body>
</html>
@endsection
