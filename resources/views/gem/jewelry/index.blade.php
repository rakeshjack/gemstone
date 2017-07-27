@extends('gem.layouts.app')
<!--jewellery-->
@section('content')
<div class="jewellery">
	<div class="container">
            @foreach($page as $page)
		<div class="jewe-head">
			<h3>{{ $page->title }}</h3>
		</div>
		<div class="jewe-grids">
                    <?php echo  $page->content ?>
		</div>
            @endforeach
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