<?php

class Gallery extends Eloquent {
	protected $table = 'galleries';

	protected $fillable = ['filename','filetype'];
}