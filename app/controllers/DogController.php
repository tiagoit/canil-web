<?php

class DogController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$dogs = Dog::all();

		return View::make('dogs.index')
			->with('dogs', $dogs);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// Limpa a variável de sessão que armazena as urls de imagens
		Session::forget('createDog.images');

		$breeds = Breed::all()->lists('name', 'id');

		return View::make('dogs.create')
			->with('breeds', $breeds);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Dog::$rules, Dog::$messages);

		if($validator->fails())	{
			return Redirect::to(Dog::$restRoute . '/create')
				->withErrors($validator)
                ->withInput(Input::all());
        } else {
            $dog 		   		= new Dog;
            $dog->name   		= Input::get('name');
            $dog->breed_id     	= Input::get('breed');

			if($birth_date = Input::get('birth_date', null))
            	$birth_date = Carbon::createFromFormat('d/m/Y', $birth_date)->toDateString();
            
            $dog->birth_date 	= $birth_date;
            $dog->type 			= Input::get('type');
            $dog->pedigree		= Input::get('pedigree', null);
            $dog->description 	= Input::get('description', null);
            $dog->active 		= Input::get('active');

            $dog->save();

            // Url das imagens dos caes que já foram salvas
            if($imagens = Session::pull('createDog.images', null)) {
            	foreach ($imagens as $value) {
            		$dogImage 		= new DogImage;
            		$dogImage->url 	= $value;
            		$dogImage->dog_id = $dog->id;

            		$dogImage->save();
            	}
            }

            // redirect
            Session::flash('message', 'Cachorro cadastrado com sucesso!');
            return Redirect::to(Dog::$restRoute);
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
		$dog = Dog::find($id);

		return View::make('dogs.show')
			->with('dog', $dog);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$dog = Dog::find($id);
		$breeds = Breed::all()->lists('name', 'id');

		return View::make('dogs.edit')
			->with('dog', $dog)
			->with('breeds', $breeds);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Dog::$rules, Dog::$messages);

		if($validator->fails())	{
			return Redirect::to(Dog::$restRoute . '/' . $id . '/edit')
				->withErrors($validator)
                ->withInput(Input::all());
        } else {
            $dog 		   		= Dog::find($id);
            $dog->name   		= Input::get('name');
            $dog->breed_id     	= Input::get('breed');

            if($birth_date = Input::get('birth_date', null))
            	$birth_date = Carbon::createFromFormat('d/m/Y', $birth_date)->toDateString();

            $dog->birth_date    = $birth_date;
            $dog->type 			= Input::get('type');
            $dog->pedigree		= Input::get('pedigree', null);
            $dog->description 	= Input::get('description', null);
            $dog->active 		= Input::get('active');

            $dog->save();

            // redirect
            Session::flash('message', 'Cachorro editado com sucesso!');
            return Redirect::to(Dog::$restRoute);
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
    $dog = Dog::find($id);

		// delete dog images
		foreach ($dog->dogImages as $dogImage) {
			// delete images and thumbs on disk
			unlink(sprintf('uploads/dogs/%s', $dogImage->url));
			unlink(sprintf('uploads/dogs/thumb_%s', $dogImage->url));

			// delete image on db
		 	$dogImage->delete();
    }

		// delete the dog on db
		$dog->delete();

    // redirect
    Session::flash('message', 'Cachorro removido com sucesso!');
    return Redirect::to(Dog::$restRoute);
	}


	public function post_upload(){

		$input = Input::all();
		$rules = array(
		    'file' => 'image|max:5000',
		);

		$validation = Validator::make($input, $rules);

		if ($validation->fails()) {
			return Response::make($validation->errors->first(), 400);
		}

		$file 				   = Input::file('file');
		$extension 			 = $file->getClientOriginalExtension(); 
		$destinationPath = 'uploads/dogs/';
		$filename 			 = 'dog_image_' . sha1(time().time().$file->getClientOriginalName()).".$extension";

		// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
		//$filename = $file->getClientOriginalName();
		$upload_success = Input::file('file')->move($destinationPath, $filename);

		Image::make(sprintf('uploads/dogs/%s', $filename))
			->heighten(720, function ($constraint) {
			    $constraint->upsize();
			})
			->save();

		Image::make(sprintf('uploads/dogs/%s', $filename))
			->heighten(240)
			->save(sprintf('uploads/dogs/thumb_%s', $filename));

		
	 	if($dog_id = Input::get('id', null)) {
	   		// Grava nova imagem no banco
  			$dogImage 		= new DogImage;
    		$dogImage->url 	= $filename;
    		$dogImage->dog_id = $dog_id;

    		$dogImage->save();
		} else {
			// Adiciona path da imagem à session
			Session::push('createDog.images', $filename);
		}
		

        if( $upload_success ) {
        	return Response::json(['img' => $filename], 200);
        } else {
        	return Response::json('error', 400);
        }
	}

	public function ajax_delete_image(){
		$dogImage = DogImage::find(Input::get('id'));

		// Remove image files from server
		unlink(sprintf('uploads/dogs/%s', $dogImage->url));
		unlink(sprintf('uploads/dogs/thumb_%s', $dogImage->url));

		// Remove image from database
		$dogImage->delete();

		return Response::json(['status' => 'success']);
	}

}

