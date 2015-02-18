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
			<div class="row gallery">
				@foreach($gallery as $picture)
				<div class="width-1-4">
					<span class="width-1-4 hover"></span>
					<img src="/assets/gallery/{{$picture->filename}}-thumbnail.{{$picture->filetype}}" />
					<a class="image" data-lightbox="image-1" href="/assets/gallery/{{$picture->filename}}.{{$picture->filetype}}"></a>
				</div>
				@endforeach
			</div>

			<div class="text-center">
				{{ $gallery->links() }}
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

		.width-1-4 .hover {
			position: absolute;
			opacity: 0;
			background:url(/assets/img/hover-pic.png) center;
			height: 200px;
			width: 100.5%;
			left:-2px;
		}

		.width-1-4 .hover:hover{
			opacity: 1;
		}

		.row {
			margin-bottom: 20px;
		}

		.row.gallery img {
			height: 200px;
			display: block;
			margin: auto;
		}

		.container hr {
			border-style: solid;
			border-color: #ed5a3a;
		}

		@media (min-width: 980px) {
			.width-1-4 {
				width: 24%;
				float: left;
				position: relative;
				margin-left: 0.5%;
				margin-right: 0.5%;
			}
		}

		@media (max-width: 979px) {
			.width-1-4 {
				display: block;
				position: relative;
				margin:auto;
				max-width: 300px;
				margin-bottom: 10px;
			}

			.width-1-4 .hover {
				width: 100%;
				left:0px;
			}
		}

		
	</style>

	<link href="/assets/lib/lightbox/css/lightbox.css" rel="stylesheet" />
	
@endsection

@section('script')
	
	<script src="/assets/lib/lightbox/js/lightbox.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$('.hover').on('click',function(){
			$(this).parent().find('.image').click();
		})
	</script>
@endsection