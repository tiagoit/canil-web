<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Páginas estáticas
Route::get('/', 		['as' => 'inicio', 	'uses' => 'PageController@inicio']);
Route::get('canil', 	['as' => 'canil', 		'uses' => 'PageController@canil']);
Route::get('contato', 	['as' => 'contato', 	'uses' => 'PageController@contato']);
Route::post('contato', 'PageController@enviarContato');
Route::get('entrar', 	['as' => 'entrar', 	'uses' => 'PageController@entrar']);

// Racas
Route::get('racas', 		['as' => 'racas', 			'uses' => 'PageController@breeds']);
Route::get('racas/{raca}', 	'PageController@showBreed');
Route::get('racas/{raca}/{cao}', 	'PageController@showDog');

// Autenticação
Route::get('entrar', ['uses' => 'HomeController@showLogin']);
Route::post('entrar', ['uses' => 'HomeController@doLogin']);
Route::get('sair', ['uses' => 'HomeController@doLogout']);



###############################################################################
#### Administração
###############################################################################

Route::group(array('before' => 'auth'), function()
{
	Route::get('adm', ['uses' => 'PageController@showAdm']);

	// Breeds
	Route::resource('admracas', 'BreedController');

	// Dogs
	Route::resource('admcaes', 'DogController');
	Route::post('dog/imageUpload', ['uses' => 'DogController@post_upload']);
	Route::post('dog/imageDelete', ['uses' => 'DogController@ajax_delete_image']);

	// Ad
	Route::resource('admanuncios', 'AdController');
	Route::post('ad/imageUpload', ['uses' => 'AdController@post_upload']);
	Route::post('ad/imageDelete', ['uses' => 'AdController@ajax_delete_image']);

});

// Rota temporária de teste (TODO: apagar)
Route::get('teste', function(){
	// foreach(Breed::find('active', '1') as $breed) {
	// 	echo $breed->name . '<br>';
	// }
	$breed = Breed::where(['url' => 'spitz-alemao'])->first();
	echo $breed->name;
});