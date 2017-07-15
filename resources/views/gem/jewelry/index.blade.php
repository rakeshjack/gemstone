@extends('gem.layouts.app')
<!--jewellery-->
@section('content')
<div class="jewellery">
	<div class="container">
		<div class="jewe-head">
			<h3>EXCLUSIVE JEWELLERY DESIGNS</h3>
		</div>
		<div class="jewe-grids">
			<div class="col-md-6 jewe-left">
				<img src="{{ asset('assets/images/h1.jpg') }} " alt=""/>
			</div>
			<div class="col-md-6 jewe-right">
				<div class="j-lg">
					<img src="{{ asset('assets/images/h5.jpg') }}" alt=""/>
				</div>
				<div class="j-rg">
					<h3>RINGS</h3>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessi tatibus saepe eveniet ut et voluptates</p>
				</div>
				<div class="j-bl">
					<h3>RINGS</h3>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessi tatibus saepe eveniet ut et voluptates</p>
				</div>
				<div class="j-br">
					<img src="{{ asset('assets/images/h3.jpg') }} " alt=""/>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--products-->
<div class="products">
	<div class="container">
		<div class="pro-head">
			<h3>UNIQUE COLLECTIONS</h3>
		</div>
		<div class="pro-grids">
			<div class="col-md-4 pro-right">
				<h3>RINGS</h3>
				<p>Temporibus autem quibusdam et aut officiis autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae</p>
			</div>
			<div class="col-md-8 pro-left">
				<img src="{{ asset('assets/images/h4.jpg') }}" alt=""/>
			</div>	
			<div class="col-md-8 pro-bleft">
				<img src="{{ asset('assets/images/h6.jpg') }} " alt=""/>
			</div>
			<div class="col-md-4 pro-bright">
				<h3>RINGS</h3>
				<p>Temporibus autem quibusdam et aut officiis autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//products-->
<!--//jewellery-->
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