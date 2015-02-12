<?php namespace Pingpong\Admin\Validation\Schedule;

use Pingpong\Validator\Validator;
use Illuminate\Support\Facades\Request;

class Update extends Validator {

	public function rules()
	{
		$id = Request::segment(3);

		return [
			'weekday' => 'required',
	        'hour_start' => 'required',
	        'hour_finish' => 'required',
	        'instruments' => 'required',
	        'teacher_id' => 'required'
	    ];
	}

}