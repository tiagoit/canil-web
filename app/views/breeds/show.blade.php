@extends('layouts.default') 
@section('content')

@include('includes.navbar-adm')


<h1>Mostrando raça {{ $breed->name }}</h1>

<!-- <div class="jumbotron text-center"> -->
    <!-- <h2>{{ $breed->name }}</h2> -->
    <p>
        <strong>Nome:</strong> {{ $breed->name }}<br>
        <strong>Ativo:</strong> {{ ($breed->active) ? 'Sim' : 'Não' }}<br>
        <strong>Origem da raça:</strong> {{ $breed->source }}<br>
        <strong>Padrão da raça:</strong> {{ $breed->standard }}<br>
        <strong>Temperamento:</strong> {{ $breed->temperament }}<br>
    </p>
<!--     </div> -->


@stop