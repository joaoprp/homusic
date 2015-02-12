@if(isset($model))
{{ Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.calendar.updateReservation', $model->id]]) }}
@else
{{ Form::open(['files' => true, 'route' => 'admin.calendar.storeReservation']) }}
@endif
	<div class="form-group">
		{{ Form::label('user_id', 'Student:') }}
		{{ Form::select('user_id', $roleUser, isset($model->user_id) ? $model->user_id : null, ['class' => 'form-control']) }}
		{{ $errors->first('teacher_id', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::label('reserved', 'Reservation Date (yyyy-mm-dd):') }}
		{{ Form::text('reserved', null, ['class' => 'form-control']) }}
		{{ $errors->first('reserved', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::label('time', 'Scheduled Class (hh:mm:ss):') }}
		{{ Form::text('time', null, ['class' => 'form-control']) }}
		{{ $errors->first('time', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::label('name', 'Teacher:') }}
		{{ Form::select('name', $role, isset($model->name) ? $model->name : null, ['class' => 'form-control']) }}
		{{ $errors->first('name', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) }}
	</div>
{{ Form::close() }}