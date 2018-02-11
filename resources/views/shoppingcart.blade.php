<!doctype html>
<html>
<!--- Header --->
<!---
This area should be used for keeping information that may become useful to the group.

Please continue to update this during the development of the site.

--->
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!--- CSS --->
<link rel="stylesheet" href="css/base.css">
	<title>WSC Shopping Cart</title>
</head>
<!--- Body --->
<body>
	<div class="BodyFrame">
    	<!--- Header --->
        <div class="Header">
    		<h1>Header</h1>
        </div>
        <!--- Navigation Bar --->
        <div class="Navigation">
        	<ul>
   				<li><a href="index">Home</a></li>
  				<li><a href="catalog">Catalog</a></li>
                <li><a href="shoppingcart">Cart</a></li>
                <li><a href="login">Login</a></li>
    		</ul>
    	</div>
        <!--- Main Body --->
        <div class="BodyMain">
        	<!--- Body Area code goes here--->
			<form method="post">
			{{ csrf_field() }}
        	<table>
   	<thead>
       	<tr>
           	<th>Product</th>
           	<th>Qty</th>
			<th></th>
           	<th>Price</th>
           	<th>Subtotal</th>
       	</tr>
   	</thead>

   	<tbody>
		
   		<?php foreach(Cart::content() as $row) :?>
		
       		<tr>
           		<td>
               		<p><strong><?php echo $row->name; ?></strong></p>
               		<p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
           		</td>
           		<td><input name="row[{{$row->rowId}}]" type="text" value="<?php echo $row->qty; ?>"></td>
				<td><button type="submit">Update Cart</button>
           		<td>$<?php echo $row->price; ?></td>
           		<td>$<?php echo $row->total; ?></td>
       		</tr>

	   	<?php endforeach;?>

   	</tbody>
   	
   	<tfoot>
   		<tr>
   			<td colspan="4">&nbsp;</td>
   			<td>Subtotal</td>
   			<td><?php echo Cart::subtotal(); ?></td>
   		</tr>
   		<tr>
   			<td colspan="4">&nbsp;</td>
   			<td>Tax</td>
   			<td><?php echo Cart::tax(); ?></td>
   		</tr>
   		<tr>
   			<td colspan="4">&nbsp;</td>
   			<td>Total</td>
   			<td><?php echo Cart::total(); ?></td>
   		</tr>
   	</tfoot>
</table>
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
