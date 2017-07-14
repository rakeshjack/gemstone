<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Gem Stone a Fashion Category Flat Bootstrap Responsive Website Template| Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gem Stone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Alegreya:400italic,700italic,900italic,400,700,900' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/modernizr.custom.js"></script>
<!--js-->
<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
</head>
<body>
<!--banner-->
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-bg1">	
	  <div class="container">
			 <div class="header">
			       <div class="logo">
						 <a href="index.html">GEM STONE</a>
				   </div>							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						 <li><a href="index.html"><img src="images/home.png"></a></li>
						 <li><a href="{{ url('about') }}">ABOUT</a></li>
						 <li class="dropdown1"><a href="{{ url('jewellery') }}">JEWELLERY</a>
							 <ul class="dropdown2">
									<li><a href="jewellery.html">PENDANTS</a></li>
									<li><a href="jewellery.html">BRACELETS</a></li>
									<li><a href="jewellery.html">EARRINGS</a></li>
									<li><a href="jewellery.html">PEARLS</a></li>
							  </ul>
						 </li> 
							  <li class="dropdown1"><a href="{{ url('goldcoins') }}">GOLD COINS</a>
							  <ul class="dropdown2">
									<li><a href="typography.html">1 GRAM</a></li>
									<li><a href="typography.html">5 GRAMS</a></li>
									<li><a href="typography.html">10 GRAMS</a></li>												
							  </ul>
						  </li>
						 <li class="dropdown1"><a href="{{ url('gallery') }}">GALLERY</a>
							 <ul class="dropdown2">
										<li><a href="gallery.html">GALLERY 1</a></li>
										<li><a href="gallery.html">GALLERY 2</a></li>
										<li><a href="gallery.html">GALLERY 3</a></li>
							  </ul>
						 </li>               
						 <li><a class="scroll" href="#contact">CONTACT</a></li>
					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div>	 
	 <div class="caption">
		 <div class="slider">
					   <div class="callbacks_container">
						   <ul class="rslides" id="slider">
								<li><h1>EXQUISITE DESIGNER JEWELLERY</h1></li>	
								<li><h1>EXCLUSIVE QUALITY</h1></li>
								<li><h1>LATEST DESIGNS WITH BEST PRICES</h1></li>
						  </ul>
						  <p>With Our Jewellery You Discover Your Natural Beauty</p>
						  <a class="morebtn" href="#">MORE</a>
					  </div>
				  </div>
	 </div>
	 <div class="dwn">
		<a class="scroll" href="#cate"><img src="images/scroll.png" alt=""/></a>
	 </div>				 
</div>
<!--/banner-->



@yield('content')





<!---->
<div class="footer">
	<div class="container">
		<div class="footer-grids">
			<div class="logo2">
				 <a href="index.html">GEM STONE</a>
			</div>
			<div class="ftr-menu">
				 <ul>
					 <li><a href="{{ url('about') }}">ABOUT</a></li>
					 <li><a href="jewellery.html">JEWELLERY</a></li>
					 <li><a href="typography.html">GOLD COINS</a></li>
					 <li><a href="gallery.html">GALLERY</a></li>
					 <li><a class="scroll" href="#contact">CONTACT</a></li>
				 </ul>
			</div>
			<div class="clearfix"></div>
		</div>

	</div>
</div>
<div class="copy-right">
	<div class="container">
			<p> &copy; 2015 Gem_Stone. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
	</div>
</div>
<!---->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>