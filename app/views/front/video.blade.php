@extends('layouts.internal')

@section('title')
Video | H&O Music Academy
@endsection

@section('content')

	<div class="page-content" style="background:#e2daca">
		<div class="text-center page-header">
			<h3>VIDEO</h3>
		</div>

		<div class="container">
			<div class="span6">
				<iframe src="//player.vimeo.com/video/114273504?title=0&byline=0&portrait=0" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></iframe>
			</div> 
			<div class="span6">
				<iframe src="//player.vimeo.com/video/114273508?title=0&byline=0&portrait=0" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			<div class="span6">
				<iframe src="//player.vimeo.com/video/114273510?title=0&byline=0&portrait=0" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			<div class="span6">
				<iframe src="//player.vimeo.com/video/114273511?title=0&byline=0&portrait=0" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			<div class="span6">
				<iframe src="//player.vimeo.com/video/114273505?title=0&byline=0&portrait=0" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>

			<div style="clear:both"></div>

			<br />
			<br />
			<br />
			<hr />
		</div>

		<div class="container">
			<section class="internal">
				<div class="parallax-point-event">
					<div class="container">
						<div class="row-fluid sub-container video">

							<a href="/audios" class="span4 circle">
								<div>MUSIC</div>
								<img src="assets/img/icon-music-orange.png" />
								<span class="plus-sign">+</span>
							</a>

							<a href="/gallery" class="span4 circle">
								<div>GALLERY</div>
								<img src="assets/img/icon-camera-orange.png" />
								<span class="plus-sign">+</span>
							</a>
						</div>
						
					</div><!-- /container-->
				</div><!-- /row-->

			</section>

		</div>

	</div>

	

@endsection

@section('css')

	<style type="text/css">
		.hour {
			color:#ed5a3a;
			border-right:1px solid #B9B1A7;
		}

		.schedule-table td, .schedule-table tr {
			border-top: none;
			text-align: center;
		}

		.schedule-table {
			width: 60%;
			margin: auto;
			margin-bottom: 40px;
		}

		.schedule-table thead td {
			color:#ed5a3a;
			font-size: 16px;
			font-family: Rockwell;
		}

		.schedule-table a {
			font-weight: bold;
			color: #ed5a3a;
		}

		.fa-medium {
			float: left;
			color: white;
			margin-left: 20px;
			margin-top: 13px;
			font-size: 160%;
		}

		.span6 {
			width: 440px;
			margin-left: 20px;
			margin-bottom: 20px;
		}

		.container hr {
			border-style: solid;
			border-color: #ed5a3a;
		}
	</style>
	
@endsection

@section('script')
	<script type="text/javascript">

		

	</script>
@endsection