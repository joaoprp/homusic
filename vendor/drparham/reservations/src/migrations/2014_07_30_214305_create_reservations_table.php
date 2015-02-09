<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservations', function($t)
        {
        		//Auto increment id primary key
                $t->increments('id');
                $t->integer('user_id');
				$t->date('reserved')->nullable();
				$t->boolean('active')->default(1);
				$t->timestamp('deleted_at')->nullable();
				
				// created_at, updated_at DATETIME
				$t->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reservations');
	}

}
