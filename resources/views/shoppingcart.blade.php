@extends('Template')
@section('content')
			<form method="post">
			{{ csrf_field() }}
        	<table>
   	<thead>
       	<tr>
           	<th>Product</th>
           	<th>Qty</th>
			<th> </th>
			<th>Product Content</th>
           	<th>Price</th>
			<th></th>
           	<th>Subtotal</th>
       	</tr>
   	</thead>

   	<tbody>

   		<?php foreach(Cart::content() as $row) :?>


       		<tr>
           		<td>
               		<p><strong><?php echo $row->name; ?></strong></p>
					<p><img src="" /></p>
               		<p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
           		</td>
           		<td><input name="row[{{$row->rowId}}]" type="text" value="<?php echo $row->qty; ?>"></td>

				<td><button type="submit">Update Cart</button>

				<td><textarea name="content" type="text" maxlength="150" placeholder="Enter your content here. Max 150 characters"></textarea></td>

           		<td>$<?php echo $row->price; ?></td>
				<td></td>
           		<td>$<?php echo round($row->total, 2); ?></td>

       		</tr>

	   	<?php endforeach;?>
		</form>
   	</tbody>
		<form method="post" action="orders">	{{ csrf_field() }}
   	<tfoot>
   		<tr>
   			<td colspan="5">&nbsp;</td>
   			<td><strong>Subtotal</strong></td>
   			<td>$<?php echo Cart::subtotal(); ?></td>
   		</tr>
   		<tr>
   			<td colspan="5">&nbsp;</td>
   			<td><strong>Tax</strong></td>
   			<td>$<?php echo Cart::tax(); ?></td>
   		</tr>
   		<tr>
   			<td colspan="5">&nbsp;</td>
   			<td><strong>Total</strong></td>
   			<td>$<?php echo Cart::total(); ?></td>
   		</tr>
		<tr>
			<td colspan="5">&nbsp;</td>
			<td><button type="submit">Place Order</button>
		</tr>
   	</tfoot>
</table>
</form>
@endsection
