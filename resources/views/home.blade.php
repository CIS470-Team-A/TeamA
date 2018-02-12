

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="BodyFrame">
    	<!--- Header --->
        <div class="Header">
          <link rel="stylesheet" href="css/base.css">

        </div>
        <!--- Navigation Bar --->

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                  <div class="Navigation">

                  	<ul>
             				<li><a href="index">Home</a></li>
            				<li><a href="catalog">Catalog</a></li>
                          <li><a href="shoppingcart">Cart</a></li>
                          <li><a href="login">Login</a></li>
              		</ul>
                  <br>
                  <div class="panel-heading"><h3>Dashboard</h3>
                    <dl>
                    You are logged in!
                    <br>
                    <br>
                          <dd><a href="#">Previous Orders</a></dd>
                          <dd><a href="#">Add Payment Options</a></dd>
                  </dl>
              	</div>
              </div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


					<br>
					<br>

        <br>
        <br>
					<h2>Update Your Information!</h2>
					<form action= "/insert" method="post">
					{{csrf_field()}}
					<p>First Name:<br><input type="text" name="firstname"></p>
					<p>Last Name:<br><input type="text" name="lastname"></p>
					<p>Address:<br><input type="text" name="Address"></p>
					<p>Phone Number:<br><input type="text" name="mobile"></p>
					<p>City:<br><input type="text" name="City"></p>
					<p>State:<br><input type="text" name="State"></p>
					<p><input type="submit" value="update" name="submit"></p>
					</form><br><br>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
