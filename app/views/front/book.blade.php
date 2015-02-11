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
			<h4 class="text-center"><i class="fa-icon-calendar"></i> H & O Music Academy Online Scheduler</h4>

			<dl>
				<span class="text-center" style="display:block"><b>Class:</b> <span style="color:#f05931;font-style:italic">{{ $className }}</span>
				<span class="text-center" style="display:block"><b>Teacher:</b> <span style="color:#f05931;font-style:italic">{{ $teacherName }}</span>
				<span class="text-center" style="display:block"><b>Class:</b> <span style="color:#f05931;font-style:italic">{{ $formattedDate }}</span>
			</dl>

			<form method="POST" action="/reserveDate" class="text-center">
				<input type="hidden" value="{{ $teacher_id }}" name="teacher_id" />
				<input type="hidden" value="{{ $date }}" name="date" />
				<input type="hidden" value="{{ $time }}" name="time" />
				<input type="hidden" value="2" name="user_id" />

				<input type="submit" class="button" value="CONFIRM" />
			</form>

		</div>
	</div>
@endsection