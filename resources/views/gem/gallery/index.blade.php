@extends('gem.layouts.app')
@section('content')
<!--gallery-->
<!--light-box-files -->
		<script src="{{asset('assets/js/jquery.chocolat.js')}} "></script>
		<link rel="stylesheet" href="{{ asset('assets/css/chocolat.css')}} " type="text/css" media="screen" charset="utf-8" />
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.moments-bottom a').Chocolat();
		});
		</script>
	<!--moments-starts--> 
	<div class="moments">
		<div class="container">
                                <h3>GALLERY</h3>
			<div class="moments-bottom">
                                        <?php foreach($page as $p) {
                                            foreach($p->gallery_post as $post) { ?>
					<div class="col-md-4 moments-left">
                                            <a class="mask1" href="/assets/images/<?php echo $post->image; ?>">
							<img src="/assets/images/<?php echo $post->image; ?> " class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
                                        <?php } ?>                                        
                                            <?php }?>
					<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!--moments-->
<!--//gallery-->
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
