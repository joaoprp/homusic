@extends('admin::layouts.master')

@section('content-header')	
	<h1>
		Edit
		&middot;
		<small>{{ link_to_route('admin.calendar.reservations', 'Back') }}</small>
	</h1>
@stop

@section('content')
	<div>
		@include('admin::calendar.form-reservation', array('model' => $reservations) + compact('role','roleUser'))
	</div>

@stop