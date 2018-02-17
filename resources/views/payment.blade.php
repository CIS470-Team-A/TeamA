@extends('Template')

@section('content')
        	<!--- Body Area code goes here--->
        	<h1>Body</h1>
<form method="post" action="orders">	{{ csrf_field() }}

<label class="radio">
<input type="radio" name="paymentType" value="1" />
Payment Type 1
</label>
<label class="radio">
<input type="radio" name="paymentType" value="2" />
Payment Type 2
</label>
<label class="radio">
<input type="radio" name="paymentType" value="3" />
Payment Type 3
</label>
<button type="submit" >Complete Order</button>
</form>

            <!--- End Body code --->
		</div>

</body>
</html>
@endsection
