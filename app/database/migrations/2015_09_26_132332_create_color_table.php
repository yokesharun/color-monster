<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('color', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('color_1');
			$table->string('color_2');
			$table->string('color_3');
			$table->string('color_4');
			$table->string('code');
			$table->integer('likes');
			$table->integer('approved');
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
		Schema::drop('color');
	}

}
