<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dogs', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('name', 255);
            $table->integer('breed_id'); // o id da raça do cachorro (FK)
            $table->date('birth_date')->nullable();
            $table->string('type', 255);
            $table->string('size', 255)->nullable();
            $table->string('color', 255)->nullable();
            $table->string('pedigree', 255)->nullable();
            $table->text('description')->nullable();
            $table->boolean('active');
            // $table->integer('litter_id'); // o id da ninhada do filhote

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
			Schema::drop('dogs');
		});
	}

}
