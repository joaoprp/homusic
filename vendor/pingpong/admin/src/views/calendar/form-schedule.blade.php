@if(isset($model))
{{ Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.calendar.updateSchedule', $model->id]]) }}
@else
{{ Form::open(['files' => true, 'route' => 'admin.calendar.storeSchedule']) }}
@endif
	<div class="form-group">
		{{ Form::label('weekday', 'Weekday:') }}
		{{ Form::text('weekday', null, ['class' => 'form-control']) }}
		{{ $errors->first('weekday', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::label('hour_start', 'Starting Hour (hh:mm:ss):') }}
		{{ Form::text('hour_start', null, ['class' => 'form-control']) }}
		{{ $errors->first('hour_start', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::label('hour_finish', 'Finishing Hour (hh:mm:ss):') }}
		{{ Form::text('hour_finish', null, ['class' => 'form-control']) }}
		{{ $errors->first('hour_finish', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::label('instruments', 'Class Name:') }}
		{{ Form::text('instruments', null, ['class' => 'form-control']) }}
		{{ $errors->first('instruments', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::label('teacher_id', 'Teacher:') }}
		{{ Form::select('teacher_id', $role, isset($model->teacher_id) ? $model->teacher_id : null, ['class' => 'form-control']) }}
		{{ $errors->first('teacher_id', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) }}
	</div>
{{ Form::close() }}