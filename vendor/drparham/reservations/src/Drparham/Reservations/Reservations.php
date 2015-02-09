<?php 

namespace Drparham\Reservations;

class Reservations {
 

	public static function unavailableDates($user_id){
		return \Reservation::where("user_id","=",$user_id)->get();
	}

	public static function reserveDate($user_id, $date){
		$event = array(
			'user_id'=>$user_id,
			'reserved'=>$date
			);
		return \Reservation::create($event);
	}

	public static function unreserveDate($user_id, $date){
		
		$event = \Reservation::where("user_id","=",$user_id)->where("reserved","=",$date)->first();
		return \Reservation::destroy($event->id);
	}
 

}