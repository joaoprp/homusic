@extends('layouts.internal')

@section('title')
Gallery | H&O Music Academy
@endsection

@section('content')

	<div class="page-content" style="background:#e2daca">
		<div class="text-center page-header">
			<h3>GALLERY</h3>
		</div>

		<div class="container">
			<div class="row">
				<div class="span3">
					<img src="/assets/img/hover-pic.png" class="hover" />
					<img src="http://lorempixel.com/200/200/" />
				</div>
				<div class="span3">
					<img src="/assets/img/hover-pic.png" class="hover" />
					<img src="http://lorempixel.com/200/200/" />
				</div>
				<div class="span3">
					<img src="/assets/img/hover-pic.png" class="hover" />
					<img src="http://lorempixel.com/200/200/" />
				</div>
				<div class="span3">
					<img src="/assets/img/hover-pic.png" class="hover" />
					<img src="http://lorempixel.com/200/200/" />
				</div>
			</div>

			<div class="row">
				<div class="span3">
					<img src="/assets/img/hover-pic.png" class="hover" />
					<img src="http://lorempixel.com/200/200/" />
				</div>
				<div class="span3">
					<img src="/assets/img/hover-pic.png" class="hover" />
					<img src="http://lorempixel.com/200/200/" />
				</div>
				<div class="span3">
					<img src="/assets/img/hover-pic.png" class="hover" />
					<img src="http://lorempixel.com/200/200/" />
				</div>
				<div class="span3">
					<img src="/assets/img/hover-pic.png" class="hover" />
					<img src="http://lorempixel.com/200/200/" />
				</div>
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
						<div class="row-fluid sub-container">

							<a href="/videos" class="span4 circle">
								<div>VIDEOS</div>
								<img src="assets/img/icon-video-orange.png" />
								<span class="plus-sign">+</span>
							</a>

							<a href="/audios" class="span4 circle">
								<div>MUSIC</div>
								<img src="assets/img/icon-music-orange.png" />
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
			color:#f05931;
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
			color:#f05931;
			font-size: 16px;
			font-family: Rockwell;
		}

		.schedule-table a {
			font-weight: bold;
			color: #F05931;
		}

		.fa-icon-medium {
			float: left;
			color: white;
			margin-left: 20px;
			margin-top: 13px;
			font-size: 160%;
		}

		.span3 {
			width: 21%;
			margin-left: 20px;
		}

		.span3 .hover {
			position: absolute;
			opacity: 0;
		}

		.span3 .hover:hover{
			opacity: 1;
		}

		.row {
			margin-bottom: 20px;
		}

		.container hr {
			border-style: solid;
			border-color: #f05931;
		}
	</style>
	
@endsection

@section('script')
	<script type="text/javascript">

		

	</script>
@endsection