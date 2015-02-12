@extends('layouts.front')

@section('title')
H&O Music Academy
@stop

@section('header_content')
<!-- HEADER MARKETING SLOGAN-->
<header>
	<div id="slider1_container" style="display: none; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 600px; overflow: hidden;">
            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
                <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
            </div>
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
				<div>
					<img u="image" src2="/assets/img/slides/slide-1.png" />
				</div>
				<div>
					<img u="image" src2="/assets/img/slides/slide-2.png" />
				</div>
				<div>
					<img u="image" src2="/assets/img/slides/slide-3.png" />
				</div>
			</div>
			<div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype" style="POSITION: absolute; WIDTH: 22px; HEIGHT: 22px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
            </div>
          <!--   <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
            </span>
            <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
            </span> -->
	</div>
</header><!-- / HEADER MARKETING SLOGAN container-->
@stop

@section('content')

<!-- /SERVICE SECTION-->			
<section  id="features-section" class="section-2">
	<div class="bg-wraper parallax-point-event">
	<div class="container">
		<div class="row-fluid">
	<!-- PROJECTS HEADER-->
			<header class="" >
				<div class="text-center page-header">
					<h3 class="">
						<span><!-- WHITE SPACE-->
							WHO WE ARE
						</span>	
					</h3>
				</div>
			</header>
		</div>
</div><!-- /SERVICE HEADER-->
	<div class="container text-striped">
		<div class="row-fluid">
			<div class="center">
				<p>Are you trying to find extracurricular activities for your children?  
				Maybe you are looking for something for yourself, or maybe you’ve dreamed of always playing music, but just need a push in the right direction.</p>

				<p>These are just some of the reasons that H&O Music Academy is a growing music school.  We present our customers with top quality music education while developing lesson plans personally tailored to individual needs.</p>

				<p>Our instructors are qualified with many years of teaching experience.  
				And most of all, they know how to make lessons fun and exciting so 
				you get the best out of your music education.</p>

				<span class="scroller-spy">
				<span class="nav" id="nav">
					<a class="button" href="#map-section">Feel free to visit our Academy in Person</a>
				</span>
				</span>
			</div>

		
		</div><!--/ ROW-FLUID-->
		<hr/>
	
	</div><!--/CONTAINER-->
</div><!-- / BG WRAPER-->

</section>
	
	<!-- /FEATURE section-->
	
	<!-- /SLOGAN section-->
	<section class="section-3" id="slogan-section-2">
		<div class="parallax-point-event">
			<div class="container">
				<div class="row-fluid sub-container">

					<a href="/videos" class="span4 circle">
						<div>VIDEOS</div>
						<img src="assets/img/icon-video.png" />
						<span class="plus-sign">+</span>
					</a>

					<a href="/audios" class="span4 circle">
						<div>MUSIC</div>
						<img src="assets/img/icon-music.png" />
						<span class="plus-sign">+</span>
					</a>

					<a href="/gallery" class="span4 circle">
						<div>GALLERY</div>
						<img src="assets/img/icon-camera.png" />
						<span class="plus-sign">+</span>
					</a>
				</div>
				
			</div><!-- /container-->
		</div><!-- /row-->

</section> <!--/SLOGAN section-->

<section class="teachers-section" id="teacher-1" style="display:none">
		<div class="text-center page-header">
			<h3>AMY KAO</h3>
		</div>

		<div class="row">
			<div class="left">
				<img src="assets/img/teachers/amy-desc.png" />
				<span>
					<a href="#"><img src="assets/img/email.png" /></a>
					<a href="#"><img src="assets/img/calendar.png" /></a>
				</span>
			</div>
			<div class="right">
					<p>Amy began studying piano at age 5, and violin at age 7, and has been passionate about both ever since. She graduated from the University of Alberta music program and has experience playing in chamber music groups, as well as the University Symphony Orchestra. She enjoys performing with a variety of acts around Edmonton. Amy also has her grade 10 certificate from the RCM, and has been teaching violin for 6 years.
					</p>
			</div>
		</div>
</section>

<section class="teachers-section" id="teacher-2" style="display:none">
		<div class="text-center page-header">
			<h3>FRANKIE HIDALGO</h3>
		</div>

		<div class="row">
			<div class="left">
				<img src="assets/img/teachers/frankie-desc.png" />
				<span>
					<a href="#"><img src="assets/img/email.png" /></a>
					<a href="#"><img src="assets/img/calendar.png" /></a>
				</span>
			</div>
			<div class="right">
					<p>Frankie is an accomplished multi instrumentalist with years of experience performing, arranging, composing and directing musical acts around western Canada. He graduated from the Grant MacEwan music program, specializing in piano performance, with a minor in vocal. He has been teaching his expertise to students for over 12 years.
					</p>
			</div>
		</div>
</section>

<section class="teachers-section" id="teacher-3" style="display:none">
		<div class="text-center page-header">
			<h3>FREDDY RUIZ</h3>
		</div>

		<div class="row">
			<div class="left">
				<img src="assets/img/teachers/freddy-desc.png" />
				<span>
					<a href="#"><img src="assets/img/email.png" /></a>
					<a href="#"><img src="assets/img/calendar.png" /></a>
				</span>
			</div>
			<div class="right">
					<p>Freddy completed his study of music at the University of Sherbrooke in Laval, Montréal. He specializes as a classical guitarist in Latin, flamenco and contemporary music, and has performed as a professional flamenco guitarist for many years in many countries. Freddy has taught musical education in various primary and secondary schools over the past 8 years. 
					</p>
			</div>
		</div>
</section>

<section class="teachers-section" id="teacher-4" style="display:none">
		<div class="text-center page-header">
			<h3>GRAEME MELLWAY</h3>
		</div>

		<div class="row">
			<div class="left">
				<img src="assets/img/teachers/graeme-desc.png" />
				<span>
					<a href="#"><img src="assets/img/email.png" /></a>
					<a href="#"><img src="assets/img/calendar.png" /></a>
				</span>
			</div>
			<div class="right">
					<p>Graeme graduated from the Grant MacEwan music program, specializing in recording and drum set, and has taught drumming himself since 2001. He has a wide variety of experience in performing and recording with groups ranging from punk rock to hip-hop, and has travelled across Canada performing with indie rock bands and country acts. Also,Graeme been recorded on over a dozen albums.
					</p>
			</div>
		</div>
</section>

<section class="teachers-section" id="teacher-5" style="display:none">
		<div class="text-center page-header">
			<h3>NEOLLA MINIMO</h3>
		</div>

		<div class="row">
			<div class="left">
				<img src="assets/img/teachers/neola-desc.png" />
				<span>
					<a href="#"><img src="assets/img/email.png" /></a>
					<a href="#"><img src="assets/img/calendar.png" /></a>
				</span>
			</div>
			<div class="right">
					<p>Neolla has been teaching piano for more than six years, with plenty of experience teaching young children solo or in groups. She is currently working towards her ARCT diploma, and also is a student at Grant MacEwan University studying towards a Bachelor of Commerce degree.
					</p>
			</div>
		</div>
</section>

<section class="teachers-section" id="teacher-6" style="display:none">
		<div class="text-center page-header">
			<h3>TAYLER BUTTON</h3>
		</div>

		<div class="row">
			<div class="left">
				<img src="assets/img/teachers/tayler-desc.png" />
				<span>
					<a href="#"><img src="assets/img/email.png" /></a>
					<a href="#"><img src="assets/img/calendar.png" /></a>
				</span>
			</div>
			<div class="right">
					<p>Tayler has been playing since the age of 10. He has performed in a number of rock groups around both Edmonton and Calgary. He is currently studying at the University of Alberta, working towards an education degree majoring in music studies. Tayler has taught guitar and drums in Edmonton and Whitecourt for 5 years. 
					</p>
			</div>
		</div>
</section>
	

<!-- /TEAM SECTION-->			
<section class="" id="team-section">
		<!-- TEAM HEADER-->
	<div class="container dark-blue">
		<div class="row">
			<div class="text-center page-header blue">
				<h3 class="text-orange">THE TEAM</h3>
			</div>
		</div>
	</div>
	
	<div class="container">	
		<div class="row-fluid team-area">
		
			<div class="teacher-enclosing" id="teacher-icon-1">
				<div class="span4 circle">
					<img class="teacher-circle" src="assets/img/teachers/amy.png" />
					<span class="plus-sign">+</span>
				</div>
				<span>AMY KAO</span>
			</div>
			<div class="teacher-enclosing" id="teacher-icon-2">
				<div class="span4 circle">
					<img class="teacher-circle" src="assets/img/teachers/frankie.png" />
					<span class="plus-sign">+</span>
				</div>
				<span>FRANKIE HIDALGO</span>
			</div>
			<div class="teacher-enclosing" id="teacher-icon-3">
				<div class="span4 circle">
					<img class="teacher-circle" src="assets/img/teachers/freddy.png" />
					<span class="plus-sign">+</span>
				</div>
				<span>FREDDY RUIZ</span>
			</div>
			<div class="teacher-enclosing" id="teacher-icon-4">
				<div class="span4 circle">
					<img class="teacher-circle" src="assets/img/teachers/graeme.png" />
					<span class="plus-sign">+</span>
				</div>
				<span>GRAEME MELLWAY</span>
			</div>
			<div class="teacher-enclosing" id="teacher-icon-5">
				<div class="span4 circle">
					<img class="teacher-circle" src="assets/img/teachers/neola.png" />
					<span class="plus-sign">+</span>
				</div>
				<span>NEOLLA MINIMO</span>
			</div>
			<div class="teacher-enclosing" id="teacher-icon-6">
				<div class="span4 circle">
					<img class="teacher-circle" src="assets/img/teachers/tayler.png" />
					<span class="plus-sign">+</span>
				</div>
				<span>TAYLER BUTTON</span>
			</div>

		</div><!--/ROW FLUID--> 
		
		<div class="row-fluid">
			
		</div>
		
	</div><!--/CONTAINER-->
</section><!-- /TEAM SECTION-->	

<!-- /SLOGAN section-->
<section class="" id="slogan-section-1">
	<div>
	<div class="container">
	
	
	</div><!-- /container-->
	</div><!-- BG-->
</section><!--/SLOGAN section-->

<!-- PORTFOLIO SECTION  -->	
<section id="portfolio-section">
	<div class="container">
		<div class="row">
			<div class="text-center page-header orange">
				<h3 class="text-white">MUSIC LESSONS</h3>
			</div>

		</div><!--/ROW-->
	</div><!--/CONTAINER-->

	<div class="container">
		
		<div class="row" style="width:392px;margin:auto">
			<div class="teacher-enclosing" style="margin-left:0px!important">
				<a href="/private-lessons" class="span4 circle">
					<img class="lessons-circle" src="/assets/img/private-lessons.png" />
					<span class="plus-sign">+</span>
				</a>
				<span style="color:white;margin-left:36px;margin-top:165px;font-size:16px">Private Lessons</span>
			</div>

			<div class="teacher-enclosing" style="margin-right:0px!important">
				<a href="/group-lessons" class="span4 circle">
					<img class="lessons-circle" src="/assets/img/group-lessons.png" />
					<span class="plus-sign">+</span>
				</a>
				<span style="color:white;margin-left:36px;margin-top:165px;font-size:16px">Group Lessons</span>
			</div>
		  
		</div>
	
	</div><!--CONTAINER-->

</section><!--/ portfolio section-->

<!-- /SLOGAN section-->
<section class="" id="register">
<div class="container">
	<div class="row-fluid">
		<div class="text-center page-header">
			<h3>REGISTER</h3>
		</div>
	</div><!-- /row-fluid-->
	<div class="row-fluid" style="width:340px;margin:auto">
		<form method="POST" action="/create">
			<div class="register" style="width:340px;float:left">
				<input type="text" name="name" placeholder="your name*" />
				<input type="text" name='email' placeholder="your email*" />
				<input type="text" name="username" placeholder="your phone number*" />
				<input type="password" name="password" placeholder="your password*" />
				<input type="hidden" name="role" value="2" />

				<input class="button" type="submit" value="SUBMIT" />
			</div>
			<!-- <textarea class="front-register" placeholder="your message"></textarea> -->

		</form>
	</div>
			
	</div><!-- /container-->
</section><!--/SLOGAN section-->

<!-- ###################### FOOTER #######################
    ================================================== -->
<footer class="">
<section id="contact-section" class="arrow_box">
  <div class="container">
	<div class="row-fluid">
   <!-- CONTAC HEADER-->
   <div class="text-center">
	<div id="">
		<div class="span12 text-center page-header blue">
				
					<h3 class="text-orange">
						NEWS
					</h3>

					<p>&nbsp;</p>

					<a href="/articles" class="button" style="display: block;width: 80px!important;padding: 5px 10px!important;color:white!important;margin:auto">MORE NEWS</a>
		</div>
	</div>	
	</div>
</div>
      <!--/ CONTAC HEADER-->
    <div class="row-fluid">
	  
    </div><!-- / ROW-->
    
  </div>
	
	</section>
	<section id="map-section">
		<div class="address-data" style="position:relative;z-index:1;left:20%;top:30px;height:800px;width:300px;">
			<div class="text-center page-header blue dark-blue" style="margin:auto">
				<h4 class="text-orange" style="width:70%;background-size:100%;display:inline-block">CONTACT US</h4>
			</div>
			<div style="background:#ed5a3a;padding:30px;">
					<h4 class="text-white text-center">10627 51 Ave</h4>
					<h4 class="text-white text-center">Edmonton, AB,</h4>
					<h4 class="text-white text-center">T6H 0K8</h4>
				
				<hr style="border-top:1px solid #c22f12" />
					<h4 class="text-white text-center">Phone: (780) 989 0701</h4>
					<h4 class="text-white text-center">Fax: (780) 989 0702</h4>
				
			</div>
		</div>
		<!-- MAP DIV // !Don't remove this !Important -->
			<div id="map" style="margin-top:-800px"></div>
	
	<!-- MAP DIV // !Don't remove this !Important -->
	</section>
</footer>

<!-- END: FOOTER -->

@stop

@section('script')
	<script type="text/javascript">
		$("#teacher-icon-1").click(function(){
			$('#teacher-1').slideToggle();
			$('body').scrollTo('#teacher-1');
			$('#teacher-2').hide();
			$('#teacher-3').hide();
			$('#teacher-4').hide();
			$('#teacher-5').hide();
			$('#teacher-6').hide();
		});

		$("#teacher-icon-2").click(function(){
			$('#teacher-1').hide();
			$('#teacher-2').slideToggle();
			$('body').scrollTo('#teacher-2');
			$('#teacher-3').hide();
			$('#teacher-4').hide();
			$('#teacher-5').hide();
			$('#teacher-6').hide();
		});

		$("#teacher-icon-3").click(function(){
			$('#teacher-1').hide();
			$('#teacher-2').hide();
			$('#teacher-3').slideToggle();
			$('body').scrollTo('#teacher-3');
			$('#teacher-4').hide();
			$('#teacher-5').hide();
			$('#teacher-6').hide();
		});

		$("#teacher-icon-4").click(function(){
			$('#teacher-1').hide();
			$('#teacher-2').hide();
			$('#teacher-3').hide();
			$('#teacher-4').slideToggle();
			$('body').scrollTo('#teacher-4');
			$('#teacher-5').hide();
			$('#teacher-6').hide();
		});

		$("#teacher-icon-5").click(function(){
			$('#teacher-1').hide();
			$('#teacher-2').hide();
			$('#teacher-3').hide();
			$('#teacher-4').hide();
			$('#teacher-5').slideToggle();
			$('body').scrollTo('#teacher-5');
			$('#teacher-6').hide();
		});

		$("#teacher-icon-6").click(function(){
			$('#teacher-1').hide();
			$('#teacher-2').hide();
			$('#teacher-3').hide();
			$('#teacher-4').hide();
			$('#teacher-5').hide();
			$('#teacher-6').slideToggle();
			$('body').scrollTo('#teacher-6');
		});
	</script>
@stop
