<?php

class Breed extends Eloquent {
	protected $fillable = ['name', 'source', 'standard', 'temperament', 'image', 'active'];
	protected $guarded = ['id'];

	public static $restRoute = 'admracas';

	public static $rules = array(
        'name'      => 'required',
        'active'	=> 'required',
        'image'     => 'required|image|max:5000'
    );

    public static $messages = array(
        'required'       => 'O preenchimento do campo :attribute é obrigatório.',
        'image.required' => 'Escolha uma imagem para a raça',
        'image.image'    => 'O arquivo deve ser uma imagem (jpeg, png, bmp, or gif).',
        'image.max'      => 'A imagem deve ter no máximo 5MB.'
    );

	// cada raça tem vários cachorros
    public function dogs() {
        return $this->hasMany('Dog');
    }

    // cada raça tem vários anúncios
    public function ads() {
        return $this->hasMany('Ad');
    }

    // public function toString() {
        
    // }
}