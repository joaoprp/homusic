<?php

class SchedulesController extends BaseController {
	
	public function getIndex() {
		$teachers = \Teacher::all();

		$schedules = \Schedule::all()->toArray();

		$start = new DateTime();
		$end = new DateTime();

		$start->modify('this week');
		$end->modify('this week +6 days');

		$reservations = \Reservation::where('reserved','>=',$start->format('Y-m-d'))
			->where('reserved','<=',$end->format('Y-m-d'))->get();

		return View::make('front.schedules')
			->with('teachers',$teachers)
			->with('schedules',$schedules)
			->with('reservations',$reservations);
	}

	public function book($teacher,$hour,$date) {
		$formattedHour = implode(':', str_split($hour,2));

		$classname = \Schedule::where('teacher_id','=',$teacher)
			->where('weekday','=',date('l',$date))
			->where('hour_start','<=',$formattedHour)
			->where('hour_finish','>=',$formattedHour)
			->first();

		$teachername = \Teacher::where('id','=',$teacher)->first();

		$formattedDate = date('l, F d, Y',$date). ", ".$formattedHour;

		return View::make('front.book')
			->with('className',$classname->instruments)
			->with('teacherName',$teachername->first_name." ".$teachername->last_name)
			->with('formattedDate',$formattedDate)
			->with('teacher_id',$teacher)
			->with('time',$formattedHour)
			->with('date',date('Y-m-d',$date));
	}

	public function success($id) {
		$reservation = \Reservation::find($id);

		if ($reservation) {
			return View::make('front.book-result')->with('title','SUCCESS')->with('description','show');
		} else {
			return View::make('front.book-result')->with('title','SORRY, NO BOOKINGS')->with('description','hide');
		}
	}
}