<?php namespace Pingpong\Admin\Validation\Reservation;

use Pingpong\Validator\Validator;
use Illuminate\Support\Facades\Request;

class Update extends Validator {

	public function rules()
	{
		$id = Request::segment(3);

		return [
			'user_id' => 'required',
	        'name' => 'required',
	        'time' => 'required',
	        'reserved' => 'required'
	    ];
	}

}