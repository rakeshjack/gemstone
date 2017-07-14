<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Gem Stone a Fashion Category Flat Bootstrap Responsive Website Template| About :: w3layouts</title>
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
<div class="banner-bg banner-bg1 page-head">	
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
						 <li><a class="active" href="{{ url('about') }}">ABOUT</a></li>
						 <li class="dropdown1"><a href="jewellery.html">JEWELLERY</a>
							 <ul class="dropdown2">
									<li><a href="jewellery.html">PENDANTS</a></li>
									<li><a href="jewellery.html">BRACELETS</a></li>
									<li><a href="jewellery.html">EARRINGS</a></li>
									<li><a href="jewellery.html">PEARLS</a></li>
							  </ul>
						 </li> 
							  <li class="dropdown1"><a href="typography.html">GOLD COINS</a>
							  <ul class="dropdown2">
									<li><a href="typography.html">1 GRAM</a></li>
									<li><a href="typography.html">5 GRAMS</a></li>
									<li><a href="typography.html">10 GRAMS</a></li>												
							  </ul>
						  </li>
						 <li class="dropdown1"><a href="gallery.html">GALLERY</a>
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
				 
</div>
<!--//banner-->
<!--about-->
<!-- about-page -->
<div class="about-page">
	<div class="container">
		<div class="about-info">
			<h3>ABOUT</h3>
		</div>	
		<div class="about-grids">	
			<div class="col-md-7 about-grid">
				<h4>A FEW WORDS ABOUT US</h4>
				<p> Neque porro quisquam est, qui dolorem ipsum 
				quia dolor sit amet, consectetur, adipisci velit, 
				sed quia non <span>numquam eius modi tempora incidunt ut 
				labore et dolore magnam aliquam quaerat  </span>voluptatem. 
				Ut enim ad minima veniam, quis nostrum exercitationem 
				ullam corporis suscipit laboriosam, nisi ut aliquid 
				ex ea commodi consequatu.</p>
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum 
			necessitatibus saepe eveniet ut et voluptates repudiandae sint et 
			molestiae non recusandae. Itaque earum aliquid 
				ex ea commodi consequatu.</p>
			</div>
			<div class="col-md-5 about-grid">
				<img src="{{ asset('assets/images/g4.jpg') }}" alt=""/>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- test -->
	<div class="people-section">
			<div class="container">
				<div class="people-grides">
					<h3>MEET OUR TEAM</h3>
			 			<div class="col-md-6 people-section1">
			 				<div class="people-gride1">
				 				<div class="col-md-8 people-text">
				 					<h4> JULIA ANTHREW</h4>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. exercitation ullamco Duis aute irure dolor in reprehenderit.</p>
				 				</div>
				 				<div class="col-md-4 people-img">
				 					<img src="{{asset('assets/images/p1.jpg')}}" alt="" />
								</div>
				 				<div class="clearfix"> </div>  		
			 				</div>
			 			</div>
		 				<div class="col-md-6 people-section2">
			 				<div class="people-gride2">
				 				<div class="col-md-4 people-img two">
				 						<img src="{{asset('assets/images/p2.jpg')}}" alt="" />
								</div>
				 				<div class="col-md-8 people-text two ">
				 					<h4>JONATHON ALEX</h4>
				 					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. exercitation ullamco Duis aute irure dolor in reprehenderit .</p>
				 				</div>
				 				<div class="clearfix"> </div>  		
			 				</div>
			 			</div>
			 			<div class="clearfix"> </div>  		
			 	</div>
			</div>
	</div>
	<!--/peoples-->
<!-- //test -->
<div class="team">
	<div class="container">
		<div class="team-info">
			<h3>WEDDING COLLECTIONS</h3>
		</div>
		<!-- flex-slider -->
			<div class="work-bottom">
							<ul id="flexiselDemo1">			
								<li>
									<div class="team-left">
										<img src="{{asset('assets/images/team-1.jpg')}}" alt=""/>
										<div class="team-bottom">
											<h4>ENGAGEMENT RINGS</h4>
											<p>Fusce et nibh eget odio cursus consectetur</p>
										</div>
									</div>
								</li>
								<li>
									<div class="team-left">
										<img src="{{asset('assets/images/team-3.jpg')}}" alt=""/>
										<div class="team-bottom">
											<h4>RINGS</h4>
											<p>Fusce et nibh eget odio cursus consectetur</p>
										</div>
									</div>
								</li>
								<li>
									<div class="team-left">
										<img src="{{asset('assets/images/team-2.jpg')}}" alt=""/>
										<div class="team-bottom">
											<h4>BANGLES</h4>
											<p>Fusce et nibh eget odio cursus consectetur</p>
										</div>
									</div>
								</li>
								<li>
									<div class="team-left">
										<img src="{{asset('assets/images/team-4.jpg')}}" alt=""/>
										<div class="team-bottom">
											<h4>EAR RINGS</h4>
											<p>Fusce et nibh eget odio cursus consectetur</p>
										</div>
									</div>
								</li>
							</ul>
								<script type="text/javascript">
										$(window).load(function() {
											$("#flexiselDemo1").flexisel({
												visibleItems: 4,
												animationSpeed: 1000,
												autoPlay: true,
												autoPlaySpeed: 3000,    		
												pauseOnHover: true,
												enableResponsiveBreakpoints: true,
												responsiveBreakpoints: { 
													portrait: { 
														changePoint:320,
														visibleItems: 1
													}, 
													landscape: { 
														changePoint:480,
														visibleItems: 2
													},
													tablet: { 
														changePoint:768,
														visibleItems: 3
													}
												}
											});
											
										});
								</script>
								<script type="text/javascript" src="{{asset('assets/js/jquery.flexisel.js')}}"></script>
				
			</div>
		<!-- //flex-slider -->	
	</div>
</div>
<!--//about-->
<!--contact-->
<div id="contact" class="contact">
	<div class="container">
		<h3>CONTACT US</h3>
		<p>Please contact us for all inquiries and purchase options.</p>
			<div class="cont-grids">
				<div class="col-md-6 contact-left">
					<form>
						 <input type="text" placeholder="NAME" required="">
						 <input type="text" placeholder="SURNAME" required="">			 
						 <input class="user" type="text" placeholder="E-MAIL" required=""><br>
						 <textarea placeholder="MESSAGE"></textarea>
						 <input type="submit" value="SEND">
					</form>
				</div>
				<div class="col-md-6 contact-right">
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" frameborder="0" style="border:0"></iframe>
				</div>
				<div class="clearfix"></div>
			</div>
	</div>
</div>
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-grids">
			<div class="logo2">
				 <a href="index.html">GEM STONE</a>
			</div>
			<div class="ftr-menu">
				 <ul>
					 <li><a href="{{ url('about') }}">ABOUT</a></li>
					 <li><a href="{{ url('gallery')}}">JEWELLERY</a></li>
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
<!--footer-->
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