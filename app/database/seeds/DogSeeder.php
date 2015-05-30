<?php
class DogSeeder extends Seeder {
    
    public function run() {

        // clear our database ------------------------------------------
        DB::table('dogs')->delete();

        // seed our dogs table -----------------------
        // we'll create three different dogs

        $dogNenem = Dog::create(array(            
            'id' => 1,
            'name' => 'Dylan',
            'breed_id' => 1 /*Breed::all()->first()->id*/,
            'birth_date' => '1987/12/12',
            'type' => 'Padreador',
            'size' => 'Pequeno',
            'color' => 'Branco',
            'pedigree' => '',
            'description' => '',
            'active' => 1,
        ));

        $dogBelinha = Dog::create(array(
            'id' => 2,
            'name' => 'Belinha',
            'breed_id' => 1/*Breed::all()->first()->id*/,
            'birth_date' => '1987/12/01',
            'type' => 'Matriz',
            'size' => 'Pequeno',
            'color' => 'Branco',
            'pedigree' => 'CBKC/10/2233',
            'description' => '',
            'active' => 1,
        ));

        $this->command->info('Dogs created!');

    }
}