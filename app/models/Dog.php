<?php

class Dog extends Eloquent {
    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    protected $fillable = array(
        'name',
        'breed_id',
        'birth_date',
        'type',
        'size',
        'color',
        'pedigree', 
        'description', 
        'active'
    );

    public static $restRoute = 'admcaes';

    public static $type = array(
        "Matriz" => "Matriz", 
        "Padreador" => "Padreador",
        "Filhote" => "Filhote");

    public static $rules = array(
        'name'      => 'required',
        'breed'     => 'required',
        // 'birth_date'=> 'required|date_format:d/m/Y',
        'type'      => 'required',
        'active'    => 'required',
    );

    public static $messages = array(
        'required'          => 'O preenchimento do campo :attribute é obrigatório.',
        'name.required'     => 'Precisamos saber o nome do cachorro.',
        'breed.required'    => 'Qual a raça?',
        'birth_date.date_format' => 'Data de nascimento inválida.',
        'type.required'     => 'Precisamos saber o tipo?',
        'active.required'   => 'Este cachorro estará ativo no sistema?',
    );

    // DEFINE RELATIONSHIPS --------------------------------------------------
    // cada cão pertence a uma raça
    public function breed() {
        return $this->belongsTo('Breed');
    }

    // cada cachorro possui várias imagens
    public function dogImages() {
        return $this->hasMany('DogImage');
    }
}
