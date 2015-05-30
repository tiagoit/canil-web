@extends('layouts.default') @section('content')

@include('includes.navbar-adm')

<h1>Cadastrar nova raça</h1>

<!-- if there are creation errors, they will show here -->
@if ($errors->has())
<div class="alert alert-danger">{{ HTML::ul($errors->all()) }}</div>
@endif

{{ Form::open(array('url' => Breed::$restRoute, 'files' => true)) }}

    <!-- NOME DA RAÇA -->
    <div class="form-group @if ($errors->has('name')) has-error @endif">
        {{ Form::label('name', 'Nome') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <!-- ORIGEM DA RAÇA -->
    <div class="form-group">
        {{ Form::label('source', 'Origem da raça') }}
        {{ Form::textarea('source', Input::old('source'), ['class' => 'form-control', 'size' => '30x5']) }}
    </div>

    <!-- PADRÃO DA RAÇA -->
    <div class="form-group">
        {{ Form::label('standard', 'Padrão da raça') }}
        {{ Form::textarea('standard', Input::old('standard'), ['class' => 'form-control', 'size' => '30x5']) }}
    </div>

    <!-- TEMPERAMENTO -->
    <div class="form-group">
        {{ Form::label('temperament', 'Temperamento') }}
        {{ Form::textarea('temperament', Input::old('temperament'), ['class' => 'form-control', 'size' => '30x5']) }}
    </div>

    <!-- IMAGEM -->
    <div class="form-group">
        {{ Form::label('image', 'Imagem') }}
        {{ Form::file('image', Input::old('image'), array('class' => 'form-control')) }}
    </div>
 
    <!-- A RAÇA ESTÁ ATIVA NO SISTEMA? -->
    <div class="form-group  ">
        {{ Form::label('active', 'Raça ativa no sistema? ') }}
        &nbsp;&nbsp;&nbsp; 
        {{ Form::radio('active', 1, Input::old('active')) }} Sim 
        &nbsp;&nbsp;&nbsp; 
        {{ Form::radio('active', 0, Input::old('active')) }}  Não
    </div>

    {{ Form::submit('Cadastrar raça', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


@stop