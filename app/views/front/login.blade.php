@extends('layouts.internal')

@section('title')
Login | H&O Music Academy
@endsection

@section('content')


<section class="" id="register">
<div class="container">
	<div class="row-fluid">
		<div class="text-center page-header">
			<h3>LOGIN</h3>
		</div>
	</div><!-- /row-fluid-->
	<div class="row-fluid" style="width:340px;margin:auto">
		{{ Form::open(['route' => 'admin.login.store', 'id' => 'login-form']) }}
			<div class="register" style="width:340px;float:left">
				<input type="text" name='email' placeholder="your email" />
				<input type="password" name="password" placeholder="your password" />
				<input type="hidden" name="role" value="2" />

				<input class="button" type="submit" value="SIGN IN" />
				<a class="button" style="padding:7px 20px;display:block;width:51px!important;" href="/#register">REGISTER</a>
			</div>
			<!-- <textarea class="front-register" placeholder="your message"></textarea> -->

		{{ Form::close() }}
	</div>
			
	</div><!-- /container-->
</section>

@endsection