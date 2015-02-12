<?php namespace Pingpong\Admin\Validation\Schedule;

use Pingpong\Validator\Validator;

class Create extends Validator {

	public function rules()
	{
		return [
	        'weekday' => 'required',
	        'hour_start' => 'required',
	        'hour_finish' => 'required',
	        'instruments' => 'required',
	        'teacher_id' => 'required'
	    ];
	}

}