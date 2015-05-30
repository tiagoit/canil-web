@extends('layouts.default') 
@section('content')

@include('includes.navbar-adm')


<h1>Mostrando cachorro {{ $dog->name }}</h1>

<!-- <div class="jumbotron text-center"> -->
    <p>
        <strong>Nome:</strong> {{ $dog->name }}<br>
        <strong>Raça:</strong> {{ $dog->breed->name }}<br>
        <strong>Data de Nascimento:</strong> {{ $dog->birth_date }}<br>
        <strong>Tipo:</strong> {{ $dog->type }}<br>
        <strong>Pedigree:</strong> {{ $dog->pedigree }}<br>
        <strong>Descrição:</strong> {{ $dog->description }}<br>
        <strong>Ativo:</strong> {{ ($dog->active) ? 'Sim' : 'Não' }}<br>
        <strong>Imagens:</strong><br>
        <div class="container-fluid">
			<div class="row-fluid">
		        @foreach($dog->dogImages as $dogImage)
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="/uploads/dogs/thumb_{{ $dogImage->url }}" alt="foto do {{$dog->name}}">
						</a>
					</div>
				@endforeach
			</div>
		</div>

    </p>
<!--     </div> -->
<br>
<a class="btn btn-small btn-info" href="{{ URL::to(Dog::$restRoute) }}">Voltar</a>
@stop