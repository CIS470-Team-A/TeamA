<!doctype html>
<html>
<!--- Header --->
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!--- CSS --->
<link rel="stylesheet" href="css/base.css">
	<title>Home</title>
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
   				<li><a href="/">Home</a></li>
  				<li><a>Catalog</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="#">Login</a></li>
    		</ul>
    	</div>
        <!--- Main Body --->
        <div class="BodyMain">
        	<h1>Body</h1>@yield("Content")
		</div>
        <!--- Footer --->
        <div class="Footer">
        	<h1>Footer</h1>
        </div>
        <!--- Base --->
        <div class="Base">
        <a href="/">Home</a>&nbsp;|&nbsp;<a href="#l">Catalog</a>&nbsp;|&nbsp;<a href="#">Cart</a>&nbsp;|&nbsp;<a href="#">Login</a>
        </div>
    </div>
    <!--- End Of Working Area --->
</body>
</html>
