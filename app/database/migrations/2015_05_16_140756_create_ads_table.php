<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ads', function(Blueprint $table)
		{
			$table->increments('id');

      $table->string('title', 255);
      $table->integer('breed_id');
      $table->string('type');
      $table->date('birth_date')->nullable();
      $table->text('description');
      $table->float('price')->nullable();
      $table->string('url', 255)->nullable();
      $table->boolean('active');

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
		Schema::table('ads', function(Blueprint $table)
		{
			Schema::drop('ads');
		});
	}

}
