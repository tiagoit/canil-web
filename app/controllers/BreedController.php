<?php

class BreedController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the breeds
		$breeds = Breed::all();
		// $breeds = array_merge([0 => ''], $breeds);

		// load the view and pass the breeds
		return View::make('breeds.index')
			->with('breeds', $breeds);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/breeds/create.blade.php)
    return View::make('breeds.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
    // read more on validation at http://laravel.com/docs/validation
    // validation rules went to the Model
    /*$rules = array(
        'name'      => 'required',
        'active'	 => 'required',
    );*/

		// create custom validation messages
    /*$messages = array(
	    'required' => 'O preenchimento do campo :attribute é obrigatório.',
	  );*/

    $validator = Validator::make(Input::all(), Breed::$rules, Breed::$messages);

    // process the login
    if ($validator->fails()) {
      return Redirect::to(Breed::$restRoute . '/create')
        ->withErrors($validator)
        ->withInput(Input::all());
    } else {
      // store
      $breed 		   		    = new Breed;
      $breed->name   		  = Input::get('name');
      $breed->source 		  = Input::get('source', null);
      $breed->standard	  = Input::get('standard', null);
      $breed->temperament = Input::get('temperament', null);
      $breed->url 		    = Tools::nameToUrl(Input::get('name'));
	    $breed->active 		  = Input::get('active');

      // imagem
      $extension       = Input::file('image')->getClientOriginalExtension(); 
      $destinationPath = 'uploads/breeds/';
      $filename        = $breed->url.".".$extension;
    
      $breed->image = $destinationPath.$filename;

      $uploadResult = Input::file('image')->move($destinationPath, $filename);
    
      // Redimensiona a imagem para uma altura máxima de 480 pixels.
      Image::make($destinationPath . $filename)
        ->heighten(480, function ($constraint) {
          $constraint->upsize();
        })
        ->save();

        // Salva o novo objeto da raça
        $breed->save();

        
        // Retorna com mensagem setada na Session
        Session::flash('message', 'Raça cadastrada com sucesso!');
        return Redirect::to('admracas');
    }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the breed
        $breed = Breed::find($id);

        // show the view and pass the nerd to it
        return View::make('breeds.show')
            ->with('breed', $breed);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the breed
		$breed = Breed::find($id);

		// show the edit form and pass the breed
		return View::make('breeds.edit')
			->with('breed', $breed);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $validator = Validator::make(Input::all(), Breed::$rules, Breed::$messages);

        // process the login
        if ($validator->fails()) {
            return Redirect::to(Breed::$restRoute . '/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $breed = Breed::find($id);
            $breed->name        = Input::get('name');            
            $breed->source 		= Input::get('source', null);
            $breed->standard	= Input::get('standard', null);
            $breed->temperament = Input::get('temperament', null);
            $breed->url 		= Tools::nameToUrl(Input::get('name'));
			$breed->active 	    = Input::get('active');

            $breed->save();

            // redirect
            Session::flash('message', 'Raça editada com sucesso!');
            return Redirect::to(Breed::$restRoute);
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
        $breed = Breed::find($id);
        $breed->delete();

        // redirect
        Session::flash('message', 'Raça removida com sucesso!');
        return Redirect::to(Breed::$restRoute);
	}


}
