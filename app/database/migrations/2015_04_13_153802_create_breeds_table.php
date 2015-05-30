<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreedsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('breeds', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('name', 255);
            $table->text('source')->nullable();
            $table->text('standard')->nullable();
            $table->text('temperament')->nullable();
            $table->string('image', 255);
            $table->string('url', 255);
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
		Schema::drop('breeds');
	}

}
