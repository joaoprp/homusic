<?php

class SchedulesController extends BaseController {
	
	public function getIndex() {
		$teachers = \Teacher::all();

		$schedules = \Schedule::all()->toArray();

		return View::make('front.schedules')->with('teachers',$teachers)->with('schedules',$schedules);
	}
}