<?php namespace Pingpong\Admin\Validation\Reservation;

use Pingpong\Validator\Validator;

class Create extends Validator {

	public function rules()
	{
		return [
	        'user_id' => 'required',
	        'name' => 'required',
	        'time' => 'required',
	        'reserved' => 'required'
	    ];
	}

}