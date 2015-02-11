<?php 

/*
|--------------------------------------------------------------------------
| Package Routes
|--------------------------------------------------------------------------
|
| Here are all of the routes for this package.
|
*/

//Pull dates for a user
Route::get('/unavailableDates/{user_id}', function($user_id){
  echo Reservations::unavailableDates($user_id);
});
Route::get('/unavailableDates', function(){	
  echo json_encode(array("status"=>400,"error"=>"Bad Request","error"=>"Your request couldn't be parsed, user id is missing"));
});

//Create a reserved date for a user
// Route::post('/reserveDate/{user_id}/{date}', function($user_id, $date){
  // echo Reservations::reserveDate($user_id, $date);
// });
// Route::post('/reserveDate/{user_id}', function($user_id){
//   echo json_encode(array("status"=>400,"error"=>"Bad Request","error"=>"Your request couldn't be parsed, date is missing"));
// });
// Route::post('/reserveDate', function(){
//   echo json_encode(array("status"=>400,"error"=>"Bad Request","error"=>"Your request couldn't be parsed, date and user id is missing"));
// });
Route::post('/reserveDate',function(){
	$post = Input::all();
	$event = array(
		'user_id'=>$post['user_id'],
		'reserved'=>$post['date'],
		'time'=>$post['time'],
		'name'=>$post['teacher_id']
	);

	$reservation = json_decode(Reservations::reserveDate($event));

	return Redirect::to('/book/success/'.$reservation->id);
});

//delete a reserved date for a user
Route::post('/unreserveDate/{user_id}/{date}', function($user_id, $date){
  echo Reservations::unreserveDate($user_id, $date);
});
Route::post('/unreserveDate/{user_id}', function($user_id){
  echo json_encode(array("status"=>400,"error"=>"Bad Request","error"=>"Your request couldn't be parsed, date is missing"));
});
Route::post('/unreserveDate', function(){
  echo json_encode(array("status"=>400,"error"=>"Bad Request","error"=>"Your request couldn't be parsed, date and user id is missing"));
});