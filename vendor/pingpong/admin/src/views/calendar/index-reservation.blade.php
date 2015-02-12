@extends('admin::layouts.master')

@section('content-header')
	<h1>
		{{{ $title or 'All Reservations' }}} ({{ $reservations->getTotal() }})
		&middot;
		<small>{{ link_to_route('admin.calendar.createReservation', 'Add New') }}</small>
	</h1>
@stop

@section('content')

	@if(isset($search))
		@include('admin::reservations.search-form')
	@endif

	<table class="table">
		<thead>
			<th>No</th>
			<th>Student</th>
			<th>Reservation Date</th>
			<th>Teacher</th>
			<th>Created At</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($reservations as $reservation)
			<tr>
				<td>{{ $no }}</td>
				<td>{{ $users[$reservation->user_id]->name }}</td>
				<td>{{ $reservation->reserved }}  {{ $reservation->time }}</td>
				<td>{{ $teachers[$reservation->name]->first_name }} {{ $teachers[$reservation->name]->last_name }}</td>
				<td>{{ $reservation->created_at }}</td>
				<td class="text-center">
					<a href="{{ route('admin.calendar.editReservation', $reservation->id) }}">Edit</a>
					&middot;
					@include('admin::partials.modal', ['data' => $reservation, 'name' => 'reservations'])
				</td>
			</tr>
			<?php $no++ ;?>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		{{ pagination_links($reservations) }}
	</div>
@stop
