@extends('layouts.internal')

@section('title')
Book | H&O Music Academy
@endsection

@section('content')
	<div class="page-content" style="background:#e2daca">
		<div class="text-center page-header">
			<h3>{{ $title }}</h3>
		</div>

		<div class="container">
			<p class="text-center" style="padding:0px 20%;">Your reservation was made successfully, although, it is not yet confirmed.</p>
			<p class="text-center" style="padding:0px 20%;">All the bookings are manually reviewed by one of our staff so we kindly ask you to wait a call or an e-mail confirming your booking</p>
			<p class="text-center" style="padding:0px 20%;">Thank you,</p>
		</div>
	</div>
@endsection