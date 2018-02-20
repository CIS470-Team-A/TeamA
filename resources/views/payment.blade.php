@extends('Template')

@section('content')
        	<!--- Body Area code goes here--->
<div style="text-align:center">
<form method="post" action="orders">	{{ csrf_field() }}
@if(\Auth::user()->employee)
 <label for="exampleFormControlSelect1"><strong>Select Customer</strong></label>
    <select class="form-control" id="customerselect" name="customer">
  @foreach($customers as $customer)   
  
	 <option value="{{$customer->Id}}">{{$customer->First_Name}} {{$customer->Last_Name}}</option>
@endforeach
    </select>
  @endif

	


<label class="radio">
<input type="radio" name="paymentType" value="Billing" />
<strong>Billing</strong>
</label>
<label class="radio">
<input type="radio" name="paymentType" value="BillonDelivery" />
<strong>Bill On Delivery</strong> (10% Down now) $<?php echo round(Cart::total()* .1, 2); ?>
</label>
			@if(\Auth::user())
<p><button type="submit" >Complete Order</button></p>
@endif
</form>

            <!--- End Body code --->
		</div>


@endsection
