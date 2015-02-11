<?php 

namespace Drparham\Reservations;

class Reservations {
 

	public static function unavailableDates($user_id){
		return \Reservation::where("user_id","=",$user_id)->get();
	}

	public static function reserveDate($event){
		
		return \Reservation::create($event);
	}

	public static function unreserveDate($user_id, $date){
		
		$event = \Reservation::where("user_id","=",$user_id)->where("reserved","=",$date)->first();
		return \Reservation::destroy($event->id);
	}
 

}