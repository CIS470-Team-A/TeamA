<!doctype html>
<html>
<!--- Header --->
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!--- CSS --->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>@yield('page_title')</title>
</head>
<!--- Body --->
<body>
	<div class="container">
    	<!--- Header --->
        <header>
    		<h1>@yield('page_title')</h1>
        
        <!--- Navigation Bar --->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="home">{{env('APP_NAME')}}</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
			  <a class="nav-item nav-link active" href="index">Home <span class="sr-only">(current)</span></a>
			  <a class="nav-item nav-link" href="catalog">Catalog</a>
			  @if (Auth::check())
			  <a class="nav-item nav-link" href="orders">Orders</a>
			  <a class="nav-item nav-link" href="shoppingcart">Cart</a>
			  @endif
			  @if (Auth::check())
				  <a class="nav-item nav-link" href="home">Account</a>
				  <a class="nav-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
				  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                  </form>
			  @else
			  <a class="nav-item nav-link" href="{{ route('login') }}">Login</a>
		      <a class="nav-item nav-link" href="{{ route('register') }}">Register</a>
			  @endif
			</div>
		  </div>
		  <!--
		          <div class="Navigation">
        	<ul>
   				<li><a href="index">Home</a></li>
  				<li><a href="catalog">Catalog</a></li>
				@if (Auth::check())
				<li><a href="orders">Orders</a></li>
                <li><a href="shoppingcart">Cart</a></li>
				@endif
    		</ul>
    	</div>
		-->
		</nav>
		</header>
        <!--- Main Body --->
        <div class="">
        	@yield("content")
		</div>
        <!--- Footer --->
        <footer>
        	
        </footer>
        <!--- Base --->
        <div class="Base">
        <a href="/">Home</a>&nbsp;|&nbsp;<a href="#l">Catalog</a>&nbsp;|&nbsp;<a href="#">Cart</a>&nbsp;|&nbsp;<a href="#">Login</a>
        </div>
    </div>
    <!--- End Of Working Area --->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
