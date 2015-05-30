<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ad_images', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('url', 255);
			$table->integer('ad_id');

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
