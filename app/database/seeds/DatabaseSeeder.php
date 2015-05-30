<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->command->info('User seeds finished.');

		$this->call('BreedSeeder');
		$this->command->info('Breed seeds finished.');
		
		$this->call('DogSeeder');
		$this->command->info('Dog seeds finished.');


	}

}
