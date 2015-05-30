<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showLogin() {
		// show the form to login
		return View::make('login');
	}

	public function doLogin() {
		// process the form

		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:5'); // password can only be alphanumeric and has to be greater than 3 characters

		$messages = array(
			'required' => 'O campo :attribute deve ser preenchido.',
			'email' 	 => 'Email inválido',
			'alphaNum' => 'A senha deve conter letras e números',
			'min'			 => 'A senha deve ter no mínimo 5 caracteres');

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules, $messages);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		    return Redirect::to('entrar')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {
		    // create our user data for the authentication
		    $userdata = array(
		        'email'     => Input::get('email'),
		        'password'  => Input::get('password')
		    );

		    // attempt to do the login
		    if (Auth::attempt($userdata)) {

		        // validation successful!
		        // redirect them to the secure section or whatever
		        return Redirect::to('adm');
		        // for now we'll just echo success (even though echoing in a controller is bad)
		        //echo 'SUCCESS!';

		    } else {        
		        // validation not successful, send back to form 
		        return Redirect::to('entrar')
		        ->with('loginError', 'Email ou senha inválidos.'); // send back all errors to the login form
		    }

		}
	}

	public function doLogout() {
		    Auth::logout(); // log the user out of our application
    		return Redirect::to('entrar'); // redirect the user to the login screen
	}

}
