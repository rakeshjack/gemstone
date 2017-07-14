@extends('gem.layouts.app')
@section('content')
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
@stop
<!--footer-->
