<?php

class Schedule extends Eloquent {
	protected $table = 'schedules';

	protected $fillable = ['weekday','hour_start','hour_finish','teacher_id','instruments'];
}