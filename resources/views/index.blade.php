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
	<title>Williams Speciality Company</title>
</head>
<!--- Body --->
<body>
	<div class="BodyFrame">
    	<!--- Header --->
        <div class="Header">
    		
        </div>
        <!--- Navigation Bar --->
        <div class="Navigation">
        	<ul>
   				<li><a href="index">Home</a></li>
  				<li><a href="catalog">Catalog</a></li>
				<li><a href="orders">Orders</a></li>
                <li><a href="shoppingcart">Cart</a></li>
                <li><a href="login">Login</a></li>
    		</ul>
    	</div>
        <!--- Main Body --->
        <div class="BodyMain">
        	<!--- Body Area code goes here--->
			<h1> Welcome to the new WSC Site</h1>
        	<!-- Slideshow container -->
				<div class="slideshow-container">

				  <!-- Full-width images with number and caption text -->
				  <div class="mySlides fade">
					
					<img src="graphics/img1.jpg" style="width:100%">
					
				  </div>

				  <div class="mySlides fade">
					<img src="graphics/img2.jpg" style="width:100%">
					
				  </div>

				  <div class="mySlides fade">
					<
					<img src="graphics/img3.jpg" style="width:100%">
					
				  </div>

				  <!-- Next and previous buttons -->
				  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				  <a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				<br>

				<!-- The dots/circles -->
				<div style="text-align:center">
				  <span class="dot" onclick="currentSlide(1)"></span> 
				  <span class="dot" onclick="currentSlide(2)"></span> 
				  <span class="dot" onclick="currentSlide(3)"></span> 
				</div>
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
			<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
			   slides[i].style.display = "none";  
			}
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1}    
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			setTimeout(showSlides, 6000); // Change image every 2 seconds
		}
		</script>

</body>
</html>
