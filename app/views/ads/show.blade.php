@extends('layouts.default') 
@section('content')

@include('includes.navbar-adm')


<h1>Mostrando anúncio {{ $ad->title }}</h1>

<!-- <div class="jumbotron text-center"> -->
    <p>
        <strong>Título:</strong> {{ $ad->title }}<br>
        <strong>Raça:</strong> {{ $ad->breed->name }}<br>
        <strong>Tipo:</strong> {{ $ad->type }}<br>
        <strong>Data de Nascimento:</strong> {{ $ad->birth_date }}<br>
        <strong>Descrição:</strong> {{ $ad->description }}<br>
        <strong>Preço:</strong> {{ $ad->price }}<br>
        <strong>Ativo:</strong> {{ ($ad->active) ? 'Sim' : 'Não' }}<br>
        <strong>Imagens:</strong><br>
        <div class="container-fluid">
			<div class="row-fluid">
		        @foreach($ad->adImages as $adImage)
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="/uploads/ads/thumb_{{ $adImage->url }}" alt="foto do {{$ad->title}}">
						</a>
					</div>
				@endforeach
			</div>
		</div>

    </p>
<!--     </div> -->
<br>
<a class="btn btn-small btn-info" href="{{ URL::to(Ad::$restRoute) }}">Voltar</a>
@stop