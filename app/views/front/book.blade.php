@extends('layouts.internal')

@section('title')
Book | H&O Music Academy
@endsection

@section('content')
	<div class="page-content" style="background:#e2daca">
		<div class="text-center page-header">
			<h3>BOOKINGS</h3>
		</div>

		<div class="container">
			<h4 class="text-center"><i class="fa fa-calendar"></i> H & O Music Academy Online Scheduler</h4>

			<dl>
				<span class="text-center" style="display:block"><b>Class:</b> <span style="color:#ed5a3a;font-style:italic">{{ $className }}</span>
				<span class="text-center" style="display:block"><b>Teacher:</b> <span style="color:#ed5a3a;font-style:italic">{{ $teacherName }}</span>
				<span class="text-center" style="display:block"><b>Class:</b> <span style="color:#ed5a3a;font-style:italic">{{ $formattedDate }}</span>
			</dl>
			@if(\Auth::id())

			<form action="charge.php" method="post">
				
			</form>

			<form method="POST" action="/reserveDate" class="text-center">
				<input type="hidden" value="{{ $teacher_id }}" name="teacher_id" />
				<input type="hidden" value="{{ $date }}" name="date" />
				<input type="hidden" value="{{ $time }}" name="time" />
				<input type="hidden" value="{{ \Auth::id() }}" name="user_id" />

				<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
				      data-key="{{ \Config::get('app.stripe_publishable_key') }}"
				      data-email="{{ \Auth::user()->email }}"
				      data-image="/assets/img/logo-big.png"
				      data-allow-remember-me="false"
				      data-amount="2400" data-description="One Class Subscription"></script>
			</form>
			@else
				<div class="login-register-box">
					Please <a class="open-login">Log in</a> or <a href="/#register">Register</a> to continue
				</div>
			@endif
		</div>
	</div>
@endsection

@section('css')
	<style type="text/css">
		.open-login {
			cursor: pointer;
		}

		.login-register-box {
			text-align: center;
			width: 380px;
			margin: auto;
			padding-bottom: 40px;
			padding-top: 40px;
			border: 2px solid #ed5a3a;
			margin-bottom: 20px;
			border-radius: 7px;
		}
	</style>
@endsection

@section('script')
	<script type="text/javascript">
		$('.open-login').on('click',function(){
			$('.menu-button.dropdown-toggle').trigger('click');
			return false;
		});
	</script>
@endsection
