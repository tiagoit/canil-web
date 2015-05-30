<?php
class PageController extends \BaseController {
	
	public function inicio() {
		$ads = Ad::all();
		return View::make('pages.inicio')
			->with("ads", $ads);
	}
	public function canil() {
		return View::make('pages.canil');
	}
	public function contato() {
		return View::make('pages.contato');
	}
	public function enviarContato() {
		print_r(Input::all());
	}
	public function entrar() {
		return View::make('pages.entrar');
	}
	public function registrar() {
		return View::make('pages.registrar');
	}
	
	
	// RACAS
	public function breeds() {
		$breeds = Breed::where(['active' => 1])->get();
		
		return View::make('pages.racas')
			->with('breeds', $breeds);
	}
	public function showBreed($raca) {
		$breed = Breed::where(['url' => $raca])->first();

		return View::make('pages.showBreed')
			->with('breed', $breed);
	}
	public function showDog($raca, $cao) {
		$dog = Dog::where(['id' => substr($cao, strrpos($cao, '-')+1)])->first();

		return View::make('pages.showDog')
			->with('dog', $dog)
			->with('breed', $dog->breed);
	}

	// Administração
	public function showAdm() {
		return View::make('adm');
	}
	
}