<?php

class DogImage extends Eloquent {

	protected $table = 'dog_images';

	// cada imagem pertence a um cachorros
	public function dog() {
        return $this->belongsTo('Dog');
    }
}