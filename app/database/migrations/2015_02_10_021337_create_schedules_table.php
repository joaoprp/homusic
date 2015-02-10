<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('schedules',function($table){
			$table->increments('id');
			$table->string('weekday');
			$table->time('hour_start');
			$table->time('hour_finish');
			$table->integer('teacher_id');
			$table->integer('max_allowed');
			$table->string('instruments');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::dropIfExists('schedules');
	}

}
