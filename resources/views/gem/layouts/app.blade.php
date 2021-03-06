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
        <link href="{{ asset('assets/css/bootstrap.css') }} " rel='stylesheet' type='text/css' />
        <!-- jQuery (Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('assets/js/jquery.min.js') }} "></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }} "></script>
        <!-- Custom Theme files -->
        <link href="{{ asset('assets/css/style.css') }} " rel="stylesheet" type="text/css" media="all" />
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
        <script src="{{ asset('assets/js/jquery.easydropdown.js') }} "></script>
        <link href="{{ asset('assets/css/nav.css') }} " rel="stylesheet" type="text/css" media="all"/>
        <script src="{{ asset('assets/js/modernizr.custom.js') }} "></script>
        <!--js-->
        <!---- start-smoth-scrolling---->
        <script type="text/javascript" src="{{ asset('assets/js/move-top.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/easing.js') }} "></script>
        <script type="text/javascript">
jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
    });
});
        </script>
        <!---- start-smoth-scrolling---->
        <style>
            .nav ul  li:hover > a {
                background:#e21737;
            }
            .nav ul li {                
            padding-left: 10px;
            padding-top: 4px;
            padding-bottom: 2px;
            }
        </style>
    </head>
    <body>
        <!--banner-->
        <script src="{{ asset('assets/js/responsiveslides.min.js') }} "></script>
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
        @if(Request::segment(1)  === NULL)
        <div class="banner-bg banner-bg1">	
            @else 
            <div class="banner-bg banner-bg1 page-head">
                @endif
                <div class="container">
                    <div class="header">
                        <div class="logo">
                            <a href="/">GEM STONE</a>
                        </div>							 
                        <div class="top-nav">										 
                            <label class="mobile_menu" for="mobile_menu">
                                <span>Menu</span>
                            </label>
                            <input id="mobile_menu" type="checkbox">
                            <ul class="nav">
                                <li><a href="/"><img src="{{ asset('assets/images/home.png') }} "></a></li>
                                <li><a href="{{ url('about') }}">ABOUT</a></li>
                                @if($category!=null)                                
                                @foreach($category as $cat)
                                <li class="dropdown1 dropdown_sub_category"><a href="{{ url('/')}}">{{ $cat->name }}</a>
                                    <?php if ($cat->sub_categorys != NULL) { ?>
                                        <ul class="dropdown2">
                                            <?php foreach ($cat->sub_categorys as $sub_cat) { ?>
                                                <li><a href="{{ url('get-sub-category/'.$sub_cat->category_id.'/'.$sub_cat->id.'/')}}"></a><?php echo $sub_cat->name; ?></li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                    @endforeach
                                    @endif
                                </li>
                                <li><a class="scroll" href="#contact">CONTACT</a></li>
                                @if (Auth::guest())
                                <!--                            <li class="dropdown1"><a href="{{ url('gallery') }}">LOGIN</a>
                                                                <ul class="dropdown2">
                                                                    <li><a href="{{ url('/login') }}">Sign In</a></li>
                                                                    <li><a href="{{ url('/register') }}">Sign Up</a></li>
                                                                </ul>
                                                            </li>-->
                                @else
                                <li class="dropdown1"><a href="{{ url('gallery') }}">{{ Auth::user()->name }}</a>
                                    <ul class="dropdown2">
                                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                @if(Request::segment(1)  === NULL)
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
                    <a class="scroll" href="#cate"><img src="{{ asset('assets/images/scroll.png') }} " alt=""/></a>
                </div>
                @endif
            </div>
            <!--/banner-->



            @yield('content')


            <!--contact-->
            <div id="contact" class="contact">
                <div class="container">
                    <h3>CONTACT US</h3>
                    <p>Please contact us for all inquiries and purchase options.</p>
                    <div class="cont-grids">
                        <div class="col-md-6 contact-left">
                            <form method="POST" action="{{ url('/contact-us-details') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="text" name="name"  placeholder="NAME" required="">
                                <input type="text" name="surname" placeholder="SURNAME" required="">			 
                                <input class="user" name="email" type="text" placeholder="E-MAIL" required=""><br>
                                <textarea name="message" placeholder="MESSAGE"></textarea>
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
                                <li><a href="{{ url('jewellery') }}">JEWELLERY</a></li>
                                <li><a href="{{ url('goldcoins') }}">GOLD COINS</a></li>
                                <li><a href="{{ url('gallery') }}">GALLERY</a></li>
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
                $(document).ready(function () {
                    /*
                     var defaults = {
                     containerID: 'toTop', // fading element id
                     containerHoverID: 'toTopHover', // fading element hover id
                     scrollSpeed: 1200,
                     easingType: 'linear' 
                     };
                     */
                    $().UItoTop({easingType: 'easeOutQuart'});
                });
            </script>
            <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
            <!-- //smooth scrolling -->
    </body>
</html>