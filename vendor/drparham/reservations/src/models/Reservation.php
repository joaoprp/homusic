<?php
use \Illuminate\Database\Eloquent\Model as Eloquent;

Class Reservation extends Eloquent {
	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	protected $fillable = array('user_id', 'reserved');

}