<?php

class Ad extends Eloquent {
    protected $fillable = [
        'title', 
        'breed_id', 
        'type', 
        'birth_date',
        'description', 
        'price', 
        'active'];

    protected $guarded = ['id'];

    public static $restRoute = 'admanuncios';

    public static $rules = array(
        'title'    => 'required',
        'type'     => 'required',
        'breed_id' => 'required',
        'description' => 'required',
        'active'   => 'required'
    );

    public static $messages = array(
        'required'          => 'O preenchimento do campo :attribute não é opcional.',
        'breed_id:required' => 'O preenchimento do campo raça não é opcional.',
    );

    public function breed() {
        return $this->belongsTo('Breed');
    }

    public function adImages() {
        return $this->hasMany('AdImage');
    }
}