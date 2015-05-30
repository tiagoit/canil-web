@extends('layouts.default') 
@section('content')

@include('includes.navbar-adm')

<h1>Edit {{ $breed->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($breed, array('route' => array('admracas.update', $breed->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Raça') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

 	<!-- ORIGEM DA RAÇA -->
    <div class="form-group">
        {{ Form::label('source', 'Origem da raça') }}
        {{ Form::textarea('source', null, ['class' => 'form-control', 'size' => '30x5']) }}
    </div>

    <!-- PADRÃO DA RAÇA -->
    <div class="form-group">
        {{ Form::label('standard', 'Padrão da raça') }}
        {{ Form::textarea('standard', null, ['class' => 'form-control', 'size' => '30x5']) }}
    </div>

    <!-- TEMPERAMENTO -->
    <div class="form-group">
        {{ Form::label('temperament', 'Temperamento') }}
        {{ Form::textarea('temperament', null, ['class' => 'form-control', 'size' => '30x5']) }}
    </div>

    <div class="form-group">
        {{ Form::label('active', 'Raça ativa no sistema? ') }}
        &nbsp;&nbsp;&nbsp; 
        {{ Form::radio('active', 1) }} Sim 
        &nbsp;&nbsp;&nbsp; 
        {{ Form::radio('active', 0) }}  Não
    </div>	

    {{ Form::submit('Salvar edição', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop