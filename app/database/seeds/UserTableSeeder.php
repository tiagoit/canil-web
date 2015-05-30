<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
	    DB::table('users')->delete();
	    User::create(array(
	        'name'     => 'Sandra Baracho',
	        'username' => 'sandra',
	        'email'    => 'sandrafdb1@hotmail.com',
	        'password' => Hash::make('131415'),
	    ));

	    User::create(array(
	        'name'     => 'Alessandra Baracho',
	        'username' => 'alessandra',
	        'email'    => 'alebaracho6@gmail.com',
	        'password' => Hash::make('alessandra20anos'),
	    ));
	}

}