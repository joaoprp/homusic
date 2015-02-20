<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/pricing.css" rel="stylesheet">
<!-- !important THIS STYLE CSS ON BOTTOM OF STYLEs LIST-->
<link href="assets/css/style.css" rel="stylesheet">
<!-- !important THIS STYLE CSS ON BOTTOM OF STYLEs LIST-->
<link href="assets/css/font-awesome.css" rel="stylesheet"> 
<link href="assets/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

<style>
    /* jssor slider bullet navigator skin 21 css */
    /*
    .jssorb21 div           (normal)
    .jssorb21 div:hover     (normal mouseover)
    .jssorb21 .av           (active)
    .jssorb21 .av:hover     (active mouseover)
    .jssorb21 .dn           (mousedown)
    */
    .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
        background: url(/assets/img/b21.png) no-repeat;
        overflow: hidden;
        cursor: pointer;
    }

    .jssorb21 div {
        background-position: -5px -5px;
    }

        .jssorb21 div:hover, .jssorb21 .av:hover {
            background-position: -35px -5px;
        }

    .jssorb21 .av {
        background-position: -65px -5px;
    }

    .jssorb21 .dn, .jssorb21 .dn:hover {
        background-position: -95px -5px;
    }
</style>

<style>
    /* jssor slider arrow navigator skin 21 css */
    /*
    .jssora21l              (normal)
    .jssora21r              (normal)
    .jssora21l:hover        (normal mouseover)
    .jssora21r:hover        (normal mouseover)
    .jssora21ldn            (mousedown)
    .jssora21rdn            (mousedown)
    */
    .jssora21l, .jssora21r, .jssora21ldn, .jssora21rdn {
        position: absolute;
        cursor: pointer;
        display: block;
        background: url(/assets/img/a21.png) center center no-repeat;
        overflow: hidden;
    }

    .jssora21l {
        background-position: -3px -33px;
    }

    .jssora21r {
        background-position: -63px -33px;
    }

    .jssora21l:hover {
        background-position: -123px -33px;
    }

    .jssora21r:hover {
        background-position: -183px -33px;
    }

    .jssora21ldn {
        background-position: -243px -33px;
    }

    .jssora21rdn {
        background-position: -303px -33px;
    }
</style>
</head>
<body data-spy="scroll" data-target=".scroller-spy" data-twttr-rendered="true">

<!--START MAIN-WRAPPER--> 
<div class="main-wrapper">
<!--START MAIN-WRAPPER--> 

<!-- TOP SECTION-->
<section class="headertop needhead" id="header-section">

 <!-- ################-->
 <!-- START TOP MENU -->
 <!-- ################-->
  <nav class="nav-top">
    <div class="navbar navbar-static-top" id="topnavbar"> 
      <!-- navbar-fixed-top -->
      <div class="navbar-inner" id="navbartop">
        <div class="container main-container"> <a class="pull-left" href="/"> 
		<img src="assets/img/logo.png" alt="Logo" style="margin-right:30px;height:39px!important" />
		<!--<img src="assets/img/Logo.png" alt="Logo">--></a>
          <div id="main-nav" class="scroller-spy">
            <nav class="nav-collapse collapse" >
              <ul class="nav" id="nav">
                <li class="active"><a href="#header-section">Home</a> </li>
				<li class="dropdown-item">
					<a href="/schedules">Calendar</a>
					<ul class="dropdown-menu top">
	            		<li class="first last"><a href="/#team-section">Teachers</a></li>
	            	</ul>
				</li>
				<li class="dropdown-item">
					<a href="#features-section">Academy</a>
					<ul class="dropdown-menu top">
	            		<li class="first"><a href="/#features-section">About Us</a></li>
	            		<li class=""><a href="/#team-section">Team</a></li>
	            		<li class=""><a href="/videos">Videos</a></li>
	            		<li class=""><a href="/audios">Audios</a></li>
	            		<li class="last"><a href="/gallery">Gallery</a></li>
	            	</ul>
				</li>
				<li class="dropdown-item">
					<a href="/#portfolio-section">Music Lessons</a>
					<ul class="dropdown-menu top">
	            		<li class="first"><a href="/private-lessons">Private Lessons</a></li>
	            		<li class="last"><a href="/group-lessons">Group Lessons</a></li>
	            	</ul>
				</li>
				<li><a href="/faq">FAQ</a> </li>
				<li><a href="/articles">News</a> </li>
				<li><a href="#contact-section">Contact</a> </li>
              </ul>
              <div style="float:left;position:relative">
              	@if (\Auth::user())              
	            <a class="menu-button dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{ \Auth::user()->name }}</a>
	            <ul class="dropdown-menu login" role="menu">
	            	<li class="first last"><a href="/logout">Logout</a></li>
	            </ul>
	            @else
	            <a class="menu-button dropdown-toggle" data-toggle="dropdown" aria-expanded="true">login</a>
	            <div class="dropdown-menu login" role="menu">
				  <div class="text-center page-header">
					<h5 class="">
						<span>
							LOGIN
						</span>	
					</h5>
				  </div>
				  {{ Form::open(['route' => 'admin.login.store', 'id' => 'login-form']) }}
				  	<div class="login-hover">
						<input type="text" name="email" placeholder="E-mail Address" />
						<input type="password" name="password" placeholder="Password" />

						<input class="menu-button" type="submit" value="SIGN IN" />
						<a class="menu-button" href="/#register">REGISTER</a>
					</div>
				  {{ Form::close() }}
				</div>
				@endif
			  </div>
              <ul class="social">
              	<li><a href="https://www.facebook.com/homusicacademy" target="_blank"><i class="fa fa-facebook"></i></a></li>
              	<li><a href="https://twitter.com/HOMusicAcademy" target="_blank"><i class="fa fa-twitter"></i></a></li>
              </ul>
            </nav>
			
			
          </div>
        </div>
      </div>
    </div>
  
   <!-- ################-->
 <!-- END TOP MENU -->
 <!-- ################-->		
			</nav>
			<!-- END HEADER headertop NAV -->

@yield('header_content')
			
</section><!--/ TOP SECTION-->


	@yield('content')
	<div class="bg-footer">
		<div>
			<img src="/assets/img/logo-big.png" />
		</div>
	</div>
	<div class="bg-footer-blue">
		<div>
			<span>Copyright &copy; 2014 H&O Music Academy. All rights reserved</span>
			<ul class="social">
		      	<li><a href="https://www.facebook.com/homusicacademy" target="_blank"><i class="fa fa-facebook"></i></a></li>
		      	<li><a href="https://twitter.com/HOMusicAcademy" target="_blank"><i class="fa fa-twitter"></i></a></li>
		    </ul>
		</div>
		<div style="clear:both"></div>
	</div>
</div>

@if(Session::has('message'))
	<div style="position: fixed;bottom: 0;width: 100%;background: green;height: 20px;text-align: center;color: white;" class="message">{{ Session::get('message') }}</div>
@endif
<!-- END: MAIN-WRAPPER-->
<!-- Le javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="assets/js/jquery.js" type="text/javascript"></script> 
<script src="assets/js/jssor.slider.mini.js" type="text/javascript"></script> 
<script src="assets/js/google-code-prettify/prettify.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-transition.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-alert.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-modal.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-dropdown.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-scrollspy.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-tab.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-tooltip.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-popover.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-button.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-collapse.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-carousel.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-typeahead.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-affix.js" type="text/javascript"></script> 
<script src="assets/js/application.js" type="text/javascript"></script> 

<script src="assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="assets/js/tweetable.jquery.js" type="text/javascript"></script>
<script src="assets/js/jquery.timeago.js" type="text/javascript"></script>

<script src="assets/js/jquery.fitvids.min.js" type="text/javascript"></script>

<!-- PARALLAX PLUGIN -->
<script type="text/javascript" src="assets/js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="assets/js/jquery.inview.js"></script>
<script type="text/javascript" src="assets/js/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="assets/js/jquery.parallax-1.1.3.js"></script>
<!-- PARALLAX PLUGIN -->

<!-- gMap PLUGIN -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="assets/js/jquery.gmap.js"></script>
<!-- gMap PLUGIN -->
<script src="assets/js/custom.js" type="text/javascript"></script>

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#nav').localScroll(1000);
	jQuery('#nav2').localScroll(1000);
	jQuery('#nav3').localScroll(1000);
	jQuery('#nav4').localScroll(1000);
	jQuery('#nav5').localScroll(1000);
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	// jQuery('#header-section').parallax("50%", 0.1);
	jQuery('#features-section').parallax("50%", 2);
	jQuery('#team-section').parallax("50%", 0.1);
	jQuery('.bg').parallax("50%", 0.3);
	jQuery('#portfolio-section').parallax("50%", 0.3);
	jQuery('#price-section').parallax("50%", 0.3);
	jQuery('#contact-section').parallax("50%", 0.1);
	jQuery('#slogan-section-1').parallax("50%", 0.3);


	 var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 6000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
              
                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            //Make the element 'slider1_container' visible before initialize jssor slider.
            $("#slider1_container").css("display", "block");
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
	
})
</script>
<script>
jQuery('#features-section .parallax-point-event').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.effect-box-1').addClass("active");
			jQuery('.effect-box-2').addClass("active");
			jQuery('.effect-box-3').addClass("active");
			jQuery('.effect-box-4').addClass("active");
			
        }else{
            jQuery('.effect-box-1').removeClass("active");
			jQuery('.effect-box-2').removeClass("active");
			jQuery('.effect-box-3').removeClass("active");
			jQuery('.effect-box-4').removeClass("active");
		
			//jQuery('.effect-box').unbind('inview');
        }
    });

</script>

<script>
jQuery('#slogan-section-1').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.large-slogan').addClass("active");
		 }else{
            jQuery('.large-slogan').removeClass("active"); 	
        }
    });

</script>
<script>
jQuery('#slogan-section-2 .parallax-point-event').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.browser-shot-1').addClass("active");
			jQuery('.browser-shot-2').addClass("active");
			jQuery('.browser-shot-3').addClass("active");
			
        }else{
            jQuery('.browser-shot-1').removeClass("active"); 
			jQuery('.browser-shot-2').removeClass("active");
			jQuery('.browser-shot-3').removeClass("active");
			
        }
    });

</script>

<script>
jQuery('#register').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.goprice').addClass("active");
		}else{
            jQuery('.goprice').removeClass("active"); 	
        }
    });

</script>

<script>
jQuery('#header-section').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.gobottom').addClass("active"); 
			jQuery('.hero-unit h1 span').addClass("active");
			
        }else{
            jQuery('.gobottom').removeClass("active");  
			jQuery('.hero-unit h1 span').removeClass("active"); 
			
			
        }
    });

</script>


<script>
		var hero = jQuery('#header-section .hero-unit');
		jQuery(window).scroll(function () {
				if (jQuery(this).scrollTop() > 550) {
					hero.addClass("hide");	
				} else {
					hero.removeClass("hide");	
				}
			});
		</script>
		
	<script>
		var navbar = jQuery('#navbartop');
		var navbartop = jQuery('#topnavbar');
			jQuery(window).scroll(function () {
				if (jQuery(this).scrollTop() > 70) {
				
					navbar.addClass("navbar-scroll");
					navbartop.removeClass("navbar-static-top");
					navbartop.addClass("navbar-fixed-top");
					
				} else {
					navbar.removeClass("navbar-scroll");
					navbartop.removeClass("navbar-fixed-top");
					navbartop.addClass("navbar-static-top");
				}
			});
		</script>
		
		<script>
        // Basic FitVids Test
			$(".container").fitVids();  
		</script>
		
		<script type="text/javascript">
		
				jQuery(document).ready(function(){

				jQuery('#map').gMap({ address: '10626 51 Ave, Edmonton, AB',
							   panControl: true,
						   zoomControl: true,
							   zoomControlOptions: {
					style: google.maps.ZoomControlStyle.SMALL
							   },
						   mapTypeControl: true,
						   scaleControl: true,
						   streetViewControl: false,
						   overviewMapControl: true,
							   scrollwheel: true,
							   icon: {
						image: "/assets/img/map-pin.png",
						shadow: "http://www.google.com/mapfiles/shadow50.png",
						iconsize: [140, 100],
						shadowsize: [37, 34],
						iconanchor: [140, 100],
						shadowanchor: [19, 34]
					},
						zoom:15,
							   markers: [
							{ 'address' : '10626 51 Ave, Edmonton, AB'}
						]
							   
							   
							   }); 
				});



</script>

<script type="text/javascript">
		jQuery(function(){
			jQuery('#tweets').tweetable({
				username: 'wrapbootstrap', 
				time: true,
				rotate: false,
				speed: 4000, 
				limit: 1,
				replies: false,
				position: 'append',
				failed: "Sorry, twitter is currently unavailable for this user.",
				html5: true,
				onComplete:function(jQueryul){
					jQuery('time').timeago();
				}
			});
		});
		</script>
		<script>
			jQuery('.carousel').carousel()
		</script>

		<script type="text/javascript">
			$('.dropdown-menu.login').on('click',function(e){
				if ($(e.toElement).val() != "SIGN IN" && e.toElement.tagName != 'A') {
					return false;
				}
			});

			if ($('.message')) {
				window.setTimeout(function(){
					$('.message').fadeOut();
				},3000)
			}

			$('.dropdown-item').on('mouseenter',function(){
				$(this).find('ul').show();
			}).on('mouseleave',function(){
				$(this).find('ul').hide();
			});

			$('.dropdown-menu.top').on('mouseenter',function(){
				$(this).show();
			}).on('mouseleave',function(){
				$(this).hide();
			})

		</script>

		@yield('script')
</body>
</html>
