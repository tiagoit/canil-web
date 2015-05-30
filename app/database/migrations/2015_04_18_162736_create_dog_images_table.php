<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dog_images', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('url', 255);
			$table->integer('dog_id');

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
		Schema::table('dogs', function(Blueprint $table)
		{
			Schema::drop('dog_images');
		});
	}

}
