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
@stop
<!--footer-->