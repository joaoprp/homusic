@extends('admin::layouts.master')

@section('content-header')
	<h1>
		{{{ $title or 'All Schedules' }}} ({{ $schedules->getTotal() }})
		&middot;
		<small>{{ link_to_route('admin.calendar.createSchedule', 'Add New') }}</small>
	</h1>
@stop

@section('content')

	@if(isset($search))
		@include('admin::schedules.search-form')
	@endif

	<table class="table">
		<thead>
			<th>No</th>
			<th>Weekday</th>
			<th>Teacher</th>
			<th>Class Name</th>
			<th>Created At</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($schedules as $schedule)
			<tr>
				<td>{{ $no }}</td>
				<td>{{ $schedule->weekday}}</td>
				<td>{{ $teachers[$schedule->teacher_id]->first_name }} {{ $teachers[$schedule->teacher_id]->last_name }}</td>
				<td>{{ $schedule->instruments }}</td>
				<td>{{ $schedule->created_at }}</td>
				<td class="text-center">
					<a href="{{ route('admin.calendar.editSchedule', $schedule->id) }}">Edit</a>
					&middot;
					@include('admin::partials.modal', ['data' => $schedule, 'name' => 'schedules'])
				</td>
			</tr>
			<?php $no++ ;?>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		{{ pagination_links($schedules) }}
	</div>
@stop
