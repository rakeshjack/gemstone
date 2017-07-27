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
@stop
<!--footer-->
