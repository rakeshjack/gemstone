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
@stop