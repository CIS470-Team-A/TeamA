
@extends('layouts.app')

@section('content')
	<div class="BodyFrame">
    	<!--- Header --->
        <div class="Header">
    		
        </div>
        <!--- Navigation Bar --->
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
				
				<div>
				<h4>Lorem ipsum dolor sit amet, est sanctus dolorem eu, sea at veri civibus luptatum, te mei ullum consetetur efficiantur. Pri unum omnesque ea, error conceptam est ex. Augue euismod phaedrum vis ea, integre mentitum at eam, cum ne tota denique. Modus assum delenit in pri. Sea id facilis indoctum, no inimicus suavitate sit, vitae graeco commodo nam ne. Utinam omnium vix ne, dicam legere appellantur vix id.

Iriure legendos mediocrem eu est, ea eum case impetus patrioque, eum eu facilisi inciderint. Id vis tritani legimus dissentiet. Novum ludus legere id sed, usu dolor assueverit interpretaris ex. Eu qui saperet pertinax explicari, ne novum perfecto sit. At pro labore civibus, quo nemore vituperatoribus an.

Ea cum saepe principes. Eum autem urbanitas assentior ne. No vis discere bonorum, eam ei quod denique. Vel ei fierent scaevola ocurreret. Latine omnesque pro eu, ut putant efficiantur vim. Ne doctus admodum intellegebat pro.

Ne cum corpora consulatu appellantur. Eros consul inimicus mel ex. Quidam hendrerit ius id, duo ea putent aliquam. At case graeco nam. Id mel dicunt inimicus, eum ei vero quaerendum, at illum iracundia disputationi pro. Ne mea nulla dolorum dolorem, mei ea unum dicam habemus.

Consul mediocrem laboramus ius no, eam zril delenit deserunt no. Affert deserunt principes mei ne, graecis deserunt nec ad. No cum odio recteque. Per iriure eripuit intellegat id, te case tantas eloquentiam usu. Ex nobis noster sea, nec no sumo alia.

Pri ex summo putent delectus, novum consul sensibus ad has, mea ne dictas saperet. Te accumsan corrumpit gubergren vis. His numquam mediocritatem ea, hinc recusabo sea an, te cum elitr nostrud concludaturque. Omnium percipit reprehendunt sed ex, eu senserit complectitur ius, eu sed clita propriae interpretaris. Feugait noluisse ea sit. Dolorum menandri no per. At audire signiferumque necessitatibus vim, sed et dicit timeam evertitur.

Dicam maiorum gubergren te his. Cetero insolens disputationi ut cum, gubergren assentior usu no, ad cum tation soleat scribentur. Quando nostrum ne quo. Ius iisque eripuit ut, ei ius tritani senserit dignissim.</h4>
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

@endsection

