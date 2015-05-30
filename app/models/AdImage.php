<?php

class AdImage extends Eloquent {

  protected $table = 'ad_images';

  // cada imagem pertence a um cachorros
  public function ad() {
        return $this->belongsTo('Ad');
    }
}