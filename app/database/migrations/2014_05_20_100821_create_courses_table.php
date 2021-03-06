<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('num');
            $table->integer('section');
            $table->string('name');
            $table->integer('hours');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('days');
            $table->integer('prereq');
            $table->string('room');
            $table->string('type');
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
		Schema::drop('courses');
	}

}
