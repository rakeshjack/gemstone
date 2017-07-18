@extends('gem.layouts.app')
<!-- welcome -->
@section('content')
<div class="welcome">
	<div class="container">
		<div class="wel-header">
			<h3>WELCOME</h3>
		</div>
		<div class="wel-grids">
			<div class="col-md-5 wel-left">
				<p>Sed ut perspiciatis unde omnis iste natus 
				error sit voluptatem accusantium doloremque laudantium, 
				totam rem aperiam, eaque ipsa quae ab illo inventore 
				veritatis et quasi architecto beatae vitae.</p>
			</div>
			<div class="col-md-2 wel-middle text-center">
				<img src="{{ asset('assets/images/444.png') }} " alt=" "/>
			</div>
			<div class="col-md-5 wel-right">
				<p>Sed ut perspiciatis unde omnis iste natus 
				error sit voluptatem accusantium doloremque laudantium, 
				totam rem aperiam, eaque ipsa quae ab illo inventore 
				veritatis et quasi architecto beatae vitae.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- welcome -->
<!--categories-->
<div id="cate" class="categories">
	 <div class="container">
		<div class="cat-head">
			<h3>LATEST DESIGNS</h3>
		</div>
		 <div class="categorie-grids cs-style-1">
				 <div class="col-md-4 cate-grid grid">
					<figure>
						<img src="{{ asset('assets/images/c1.jpg') }} " alt="">
						<figcaption>
							<h3>ANTIQUE PIECE</h3>
							<span>Accusantium Dolor</span>
							<a href="#">VIEW</a>
						</figcaption>
					</figure>
				 </div>
				 <div class="col-md-4 cate-grid grid">
					 <figure>
						<img src="{{ asset('assets/images/c2.jpg') }} " alt="">
						<figcaption>
							<h3>ANTIQUE PIECE</h3>
							<span>Accusantium Dolor</span>
							<a href="#">VIEW</a>
						</figcaption>
					</figure>
				 </div>


				 <div class="col-md-4 cate-grid grid">
					 <figure>
						<img src="{{ asset('assets/images/c3.jpg') }} " alt="">
						<figcaption>
							<h3>ANTIQUE PIECE</h3>
							<span>Accusantium Dolor</span>
							<a href="#">VIEW</a>
						</figcaption>
					</figure>
				 </div>

				 <div class="col-md-4 cate-grid grid">
					<figure>
						<img src="{{ asset('assets/images/c4.jpg') }} " alt="">
						<figcaption>
							<h3>ANTIQUE PIECE</h3>
							<span>Accusantium Dolor</span>
							<a href="#">VIEW</a>
						</figcaption>
					</figure>
				 </div>

				 <div class="col-md-4 cate-grid grid">
					<figure>
						<img src="{{ asset('assets/images/c5.jpg') }} " alt="">
						<figcaption>
							<h3>ANTIQUE PIECE</h3>
							<span>Accusantium Dolor</span>
							<a href="#">VIEW</a>
						</figcaption>
					</figure>
				 </div>

				 <div class="col-md-4 cate-grid grid">
					 <figure>
						<img src="{{ asset('assets/images/c6.jpg') }}" alt="">
						<figcaption>
							<h3>ANTIQUE PIECE</h3>
							<span>Accusantium Dolor</span>
							<a href="#">VIEW</a>
						</figcaption>
					</figure>
				 </div>

			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!--categories-->
<!--flex slider-->
<div class="flex-slider">
	<div class="container">
	</div>
</div>
<!--flex slider-->
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