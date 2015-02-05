<?php

class SchedulesController extends BaseController {
	
	public function getIndex() {
		$teachers = \Teacher::all();

		return View::make('front.schedules')->with('teachers',$teachers);
	}
}