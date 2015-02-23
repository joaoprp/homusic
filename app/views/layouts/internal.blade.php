<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link href="/assets/css/bootstrap.css" rel="stylesheet">
<link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="/assets/css/pricing.css" rel="stylesheet">
<!-- !important THIS STYLE CSS ON BOTTOM OF STYLEs LIST-->
<link href="/assets/css/style.css" rel="stylesheet">
<!-- !important THIS STYLE CSS ON BOTTOM OF STYLEs LIST-->
<link href="/assets/css/font-awesome.css" rel="stylesheet"> 
<link href="/assets/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<link href="/assets/css/slider.css" rel="stylesheet" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="/assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">

@yield('css')

<style type="text/css">
	.navbar .nav > li > a {
		color:white!important;
	}
</style>

</head>
<body data-spy="scroll" data-target=".scroller-spy" data-twttr-rendered="true">

<!--START MAIN-WRAPPER--> 
<div class="main-wrapper" style="background:#e2daca;">
<!--START MAIN-WRAPPER--> 

<!-- TOP SECTION-->
<section class="headertop needhead" style="background:#e2daca;padding:0;">

 <!-- ################-->
 <!-- START TOP MENU -->
 <!-- ################-->
  <nav class="nav-top">
      <div class="navbar navbar-static-top" id="topnavbar">
          <!-- navbar-fixed-top -->
          <div class="navbar-inner" id="navbartop" style="background:#ed5a3a!important;">
              <div class="container main-container"> <a class="pull-left" href="/">
                      <img src="/assets/img/logo.png" class="logo" alt="Logo" style="margin-right:30px;height:39px!important" />
                      <!--<img src="assets/img/Logo.png" alt="Logo">--></a>
                  <div id="main-nav" class="scroller-spy">
                      <nav class="nav-collapse collapse" >
                          <ul class="nav" id="nav">
                              <li><a href="/#header-section">Home</a> </li>
                              <li class="dropdown-item">
                                  <a href="/schedules">Calendar</a>
                              </li>
                              <li class="dropdown-item">
                                  <a href="/#features-section">Academy</a>
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
                                      <li class="first dropdown-submenu">
                                          <a href="/private-lessons">Private Lessons</a>
                                          <ul class="dropdown-menu">
                                              <li class="first"><a href="/group-lessons#piano">PIANO LESSONS</a></li>
                                              <li><a href="/private-lessons#voice">VOICE</a></li>
                                              <li><a href="/private-lessons#guitar">GUITAR</a></li>
                                              <li><a href="/private-lessons#violin">VIOLIN/VIOLA</a></li>
                                              <li><a href="/private-lessons#drums">DRUMS</a></li>
                                              <li><a href="/private-lessons#bassguitar">BASS GUITAR</a></li>
                                              <li><a href="/private-lessons#ukelele">UKELELE</a></li>
                                              <li><a href="/private-lessons#mandolin">MANDOLIN</a></li>
                                              <li><a href="/private-lessons#accordion">ACCORDION</a></li>
                                              <li><a href="/private-lessons#saxophone">SAXOPHONE</a></li>
                                              <li><a href="/private-lessons#percussion">PERCUSSION</a></li>
                                              <li><a href="/private-lessons#theory">MUSIC THEORY</a></li>
                                              <li class="last"><a href="/private-lessons#writing">SONG WRITING</a></li>
                                          </ul>
                                      </li>
                                      <li class="last dropdown-submenu">
                                          <a href="/group-lessons">Group Lessons</a>
                                          <ul class="dropdown-menu">
                                              <li class="first"><a href="/group-lessons#toddlers">MUSIC FOR TODDLERS</a></li>
                                              <li><a href="/group-lessons#intropiano">INTRO TO PIANO/GUITAR</a></li>
                                              <li><a href="/group-lessons#intropiano8">INTRO TO PIANO, GUITAR, DRUMS</a></li>
                                              <li><a href="/group-lessons#intropiano15">INTRO TO PIANO/GUITAR 15+</a></li>
                                              <li><a href="/group-lessons#poprock">POP/ROCK/BAND STUDIES</a></li>
                                              <li><a href="/group-lessons#latiinflamenco">LATIN/FLAMENCO GUITAR STUDIES</a></li>
                                              <li class="last"><a href="/group-lessons#percussion">PERCUSSION GROUP LESSONS</a></li>
                                          </ul>
                                      </li>
                                  </ul>
                              </li>
                              <li><a href="/faq">FAQ</a> </li>
                              <li><a href="/articles">News</a> </li>
                              <li><a href="/#contact-section">Contact</a> </li>
                          </ul>
                          <div style="float:left;position:relative;">
                              @if (\Auth::user())
                                  <a class="menu-button dropdown-toggle" data-toggle="dropdown" aria-expanded="true" style="border-color: white;">{{ \Auth::user()->name }}</a>
                                  <ul class="dropdown-menu login" role="menu">
                                      <li class="first last"><a href="/logout">Logout</a></li>
                                  </ul>
                              @else
                                  <a class="menu-button dropdown-toggle" data-toggle="dropdown" aria-expanded="true" style="border-color: white;">login</a>
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
                          <ul class="social" style="border-color: white;">
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
<!-- END: MAIN-WRAPPER-->
<!-- Le javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<!-- <script src="/assets/js/jquery.js" type="text/javascript"></script>  -->
<script src="/assets/lib/lightbox/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="/assets/js/google-code-prettify/prettify.js" type="text/javascript"></script> 
<script src="/assets/js/bootstrap-transition.js" type="text/javascript"></script> 
<script src="/assets/js/bootstrap-alert.js" type="text/javascript"></script> 
<script src="/assets/js/bootstrap-modal.js" type="text/javascript"></script> 
<script src="/assets/js/bootstrap-dropdown.js" type="text/javascript"></script> 
<script src="/assets/js/bootstrap-scrollspy.js" type="text/javascript"></script> 
<script src="/assets/js/bootstrap-tab.js" type="text/javascript"></script> 
<script src="/assets/js/bootstrap-tooltip.js" type="text/javascript"></script> 
<script src="/assets/js/bootstrap-popover.js" type="text/javascript"></script> 
<script src="/assets/js/bootstrap-button.js" type="text/javascript"></script> 
<script src="/assets/js/bootstrap-collapse.js" type="text/javascript"></script> 
<script src="/assets/js/bootstrap-carousel.js" type="text/javascript"></script> 
<script src="/assets/js/bootstrap-typeahead.js" type="text/javascript"></script> 
<script src="/assets/js/bootstrap-affix.js" type="text/javascript"></script> 
<script src="/assets/js/application.js" type="text/javascript"></script> 

<script src="/assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="/assets/js/tweetable.jquery.js" type="text/javascript"></script>
<script src="/assets/js/jquery.timeago.js" type="text/javascript"></script>

<script src="/assets/js/jquery.fitvids.min.js" type="text/javascript"></script>

<!-- PARALLAX PLUGIN -->
<script type="text/javascript" src="/assets/js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.inview.js"></script>
<script type="text/javascript" src="/assets/js/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.parallax-1.1.3.js"></script>
<!-- PARALLAX PLUGIN -->

<!-- gMap PLUGIN -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="/assets/js/jquery.gmap.js"></script>
<!-- gMap PLUGIN -->
<script src="/assets/js/custom.js" type="text/javascript"></script>

<script src="/assets/js/bootstrap-slider.js" type="text/javascript"></script>

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
	jQuery('#header-section').parallax("50%", 0.1);
	jQuery('#features-section').parallax("50%", 2);
	jQuery('#team-section').parallax("50%", 0.1);
	jQuery('.bg').parallax("50%", 0.3);
	jQuery('#portfolio-section').parallax("50%", 0.3);
	jQuery('#price-section').parallax("50%", 0.3);
	jQuery('#contact-section').parallax("50%", 0.1);
	jQuery('#slogan-section-1').parallax("50%", 0.3);
	
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
