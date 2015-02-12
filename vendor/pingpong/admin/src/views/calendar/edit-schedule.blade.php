@extends('admin::layouts.master')

@section('content-header')	
	<h1>
		Edit
		&middot;
		<small>{{ link_to_route('admin.calendar.schedules', 'Back') }}</small>
	</h1>
@stop

@section('content')
	<div>
		@include('admin::calendar.form-schedule', array('model' => $schedule) + compact('role'))
	</div>

@stop