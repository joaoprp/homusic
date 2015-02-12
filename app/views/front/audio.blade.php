@extends('layouts.internal')

@section('title')
Music | H&O Music Academy
@endsection

@section('content')

	<div class="page-content" style="background:#e2daca">
		<div class="text-center page-header">
			<h3>MUSIC</h3>
		</div>

		<div class="container">
			<div class="player" id="audio1">
				<div class="top">
					<div class="toggle-play" id="audio1"><i class="fa-icon-play fa-icon-white fa-icon-large"></i></div>
					<div class="title">Mr Jones</div>
					<div style="clear:both"></div>
				</div>
				<div class="time-slider"></div>
				<div class="bottom">
					<div class="play-toggle fa-icon-pause fa-icon-large" id="audio1"></div>
					<div class="time">
						<span class="current">1:25</span> / <span class="total">5:25</span>
					</div>
					<div class="volume"><i class="fa-icon-volume-up fa-icon-medium"></i><div class="vol-slider"></div></div>
				</div>
			</div>

			<div class="player" id="audio2">
				<div class="top">
					<div class="toggle-play" id="audio2"><i class="fa-icon-play fa-icon-white fa-icon-large"></i></div>
					<div class="title">Roar</div>
					<div style="clear:both"></div>
				</div>
				<div class="time-slider"></div>
				<div class="bottom">
					<div class="play-toggle fa-icon-pause fa-icon-large" id="audio2"></div>
					<div class="time">
						<span class="current">1:25</span> / <span class="total">5:25</span>
					</div>
					<div class="volume"><i class="fa-icon-volume-up fa-icon-medium"></i><div class="vol-slider"></div></div>
				</div>
			</div>

			<div class="player" id="audio3">
				<div class="top">
					<div class="toggle-play" id="audio3"><i class="fa-icon-play fa-icon-white fa-icon-large"></i></div>
					<div class="title">Vittoria</div>
					<div style="clear:both"></div>
				</div>
				<div class="time-slider"></div>
				<div class="bottom">
					<div class="play-toggle fa-icon-pause fa-icon-large" id="audio3"></div>
					<div class="time">
						<span class="current">1:25</span> / <span class="total">5:25</span>
					</div>
					<div class="volume"><i class="fa-icon-volume-up fa-icon-medium"></i><div class="vol-slider"></div></div>
				</div>
			</div>

			<div class="player" id="audio4">
				<div class="top">
					<div class="toggle-play" id="audio4"><i class="fa-icon-play fa-icon-white fa-icon-large"></i></div>
					<div class="title">Autumn Leaves</div>
					<div style="clear:both"></div>
				</div>
				<div class="time-slider"></div>
				<div class="bottom">
					<div class="play-toggle fa-icon-pause fa-icon-large" id="audio4"></div>
					<div class="time">
						<span class="current">1:25</span> / <span class="total">5:25</span>
					</div>
					<div class="volume"><i class="fa-icon-volume-up fa-icon-medium"></i><div class="vol-slider"></div></div>
				</div>
			</div>

			<div class="player" id="audio5">
				<div class="top">
					<div class="toggle-play" id="audio5"><i class="fa-icon-play fa-icon-white fa-icon-large"></i></div>
					<div class="title">Misty</div>
					<div style="clear:both"></div>
				</div>
				<div class="time-slider"></div>
				<div class="bottom">
					<div class="play-toggle fa-icon-pause fa-icon-large" id="audio5"></div>
					<div class="time">
						<span class="current">1:25</span> / <span class="total">5:25</span>
					</div>
					<div class="volume"><i class="fa-icon-volume-up fa-icon-medium"></i><div class="vol-slider"></div></div>
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

		.fa-icon-medium {
			float: left;
			color: white;
			margin-left: 20px;
			margin-top: 13px;
			font-size: 160%;
		}

		.container hr {
			border-style: solid;
			border-color: #ed5a3a;
		}
	</style>
	
@endsection

@section('script')
	<script type="text/javascript">

		var music = {
			'audio1': new Audio('/assets/audio/mr-jones-dylan-kremp.mp3'),
			'audio2': new Audio('/assets/audio/roar-shyanne-nguyen.mp3'),
			'audio3': new Audio('/assets/audio/vittoria-vittoria-annalisa-covelli.mp3'),
			'audio4': new Audio('/assets/audio/autumn-leaves-chuck-hanson.mp3'),
			'audio5': new Audio('/assets/audio/misty-neolla-minimo.mp3'),
		};

		$('.toggle-play').click(function(){
			music[$(this).attr('id')].play();
		});

		$('.play-toggle').click(function(){
			music[$(this).attr('id')].pause();
		});

		music['audio1'].addEventListener('loadedmetadata',function(){
			var minutes = Math.floor(music['audio1'].duration/60);
			var seconds = Math.floor(music['audio1'].duration - minutes * 60);

			$('.player#audio1 .total').html(minutes+':'+seconds);
			$('.player#audio1 .current').html('0:00');

			$('.player#audio1 .time-slider').slider({
				max:music['audio1'].duration,
				value:0.0
			});
		});

		music['audio1'].addEventListener('timeupdate',function(){
			var currentMinutes = Math.floor(music['audio1'].currentTime/60);
			var currentSeconds = Math.floor(music['audio1'].currentTime - currentMinutes * 60);

			$('.player#audio1 .current').html(currentMinutes+':'+currentSeconds);

			$('.player#audio1 .time-slider').slider('setValue',music['audio1'].currentTime);
		});

		$('.player#audio1 .time-slider').on('slide',function(e){
			music['audio1'].currentTime = e.value;
		});

		$('.player#audio1 .vol-slider').slider({
			min:0,
			max:1.0,
			step:0.1
		}).on('slide',function(e){
			music['audio1'].volume = e.value;
		});



		music['audio2'].addEventListener('loadedmetadata',function(){
			var minutes = Math.floor(music['audio2'].duration/60);
			var seconds = Math.floor(music['audio2'].duration - minutes * 60);

			$('.player#audio2 .total').html(minutes+':'+seconds);
			$('.player#audio2 .current').html('0:00');

			$('.player#audio2 .time-slider').slider({
				max:music['audio2'].duration,
				value:0.0
			});
		});

		music['audio2'].addEventListener('timeupdate',function(){
			var currentMinutes = Math.floor(music['audio2'].currentTime/60);
			var currentSeconds = Math.floor(music['audio2'].currentTime - currentMinutes * 60);

			$('.player#audio2 .current').html(currentMinutes+':'+currentSeconds);

			$('.player#audio2 .time-slider').slider('setValue',music['audio2'].currentTime);
		});

		$('.player#audio2 .time-slider').on('slide',function(e){
			music['audio2'].currentTime = e.value;
		});

		$('.player#audio2 .vol-slider').slider({
			min:0,
			max:1.0,
			step:0.1
		}).on('slide',function(e){
			music['audio2'].volume = e.value;
		});



		music['audio3'].addEventListener('loadedmetadata',function(){
			var minutes = Math.floor(music['audio3'].duration/60);
			var seconds = Math.floor(music['audio3'].duration - minutes * 60);

			$('.player#audio3 .total').html(minutes+':'+seconds);
			$('.player#audio3 .current').html('0:00');

			$('.player#audio3 .time-slider').slider({
				max:music['audio3'].duration,
				value:0.0
			});
		});

		music['audio3'].addEventListener('timeupdate',function(){
			var currentMinutes = Math.floor(music['audio3'].currentTime/60);
			var currentSeconds = Math.floor(music['audio3'].currentTime - currentMinutes * 60);

			$('.player#audio3 .current').html(currentMinutes+':'+currentSeconds);

			$('.player#audio3 .time-slider').slider('setValue',music['audio3'].currentTime);
		});

		$('.player#audio3 .time-slider').on('slide',function(e){
			music['audio3'].currentTime = e.value;
		});

		$('.player#audio3 .vol-slider').slider({
			min:0,
			max:1.0,
			step:0.1
		}).on('slide',function(e){
			music['audio3'].volume = e.value;
		});



		music['audio4'].addEventListener('loadedmetadata',function(){
			var minutes = Math.floor(music['audio4'].duration/60);
			var seconds = Math.floor(music['audio4'].duration - minutes * 60);

			$('.player#audio4 .total').html(minutes+':'+seconds);
			$('.player#audio4 .current').html('0:00');

			$('.player#audio4 .time-slider').slider({
				max:music['audio4'].duration,
				value:0.0
			});
		});

		music['audio4'].addEventListener('timeupdate',function(){
			var currentMinutes = Math.floor(music['audio4'].currentTime/60);
			var currentSeconds = Math.floor(music['audio4'].currentTime - currentMinutes * 60);

			$('.player#audio4 .current').html(currentMinutes+':'+currentSeconds);

			$('.player#audio4 .time-slider').slider('setValue',music['audio4'].currentTime);
		});

		$('.player#audio4 .time-slider').on('slide',function(e){
			music['audio4'].currentTime = e.value;
		});

		$('.player#audio4 .vol-slider').slider({
			min:0,
			max:1.0,
			step:0.1
		}).on('slide',function(e){
			music['audio4'].volume = e.value;
		});



		music['audio5'].addEventListener('loadedmetadata',function(){
			var minutes = Math.floor(music['audio5'].duration/60);
			var seconds = Math.floor(music['audio5'].duration - minutes * 60);

			$('.player#audio5 .total').html(minutes+':'+seconds);
			$('.player#audio5 .current').html('0:00');

			$('.player#audio5 .time-slider').slider({
				max:music['audio5'].duration,
				value:0.0
			});
		});

		music['audio5'].addEventListener('timeupdate',function(){
			var currentMinutes = Math.floor(music['audio5'].currentTime/60);
			var currentSeconds = Math.floor(music['audio5'].currentTime - currentMinutes * 60);

			$('.player#audio5 .current').html(currentMinutes+':'+currentSeconds);

			$('.player#audio5 .time-slider').slider('setValue',music['audio5'].currentTime);
		});

		$('.player#audio5 .time-slider').on('slide',function(e){
			music['audio5'].currentTime = e.value;
		});

		$('.player#audio5 .vol-slider').slider({
			min:0,
			max:1.0,
			step:0.1
		}).on('slide',function(e){
			music['audio5'].volume = e.value;
		});

	</script>
@endsection