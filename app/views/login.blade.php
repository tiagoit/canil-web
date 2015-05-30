@extends('layouts.default') 

@section('content')

<h1>Entrar</h1>

<p>Faça login para acessar a área administartiva</p>

<!-- if there are creation errors, they will show here -->
@if ($errors->has())
<div class="alert alert-danger">{{ HTML::ul($errors->all()) }}</div>
@endif

@if (Session::get('loginError', false))
<div class="alert alert-danger">{{ Session::get('loginError') }}</div>
@endif


{{ Form::open(array('url' => 'entrar')) }}
    <!-- EMAIL -->
    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', Input::old('email'), ['class' => 'form-control']) }}
    </div>

    <!-- PASSWORD -->
    <div class="form-group">
        {{ Form::label('password', 'Senha') }}
        {{ Form::password('password', ['class' => 'form-control']) }}
    </div>

	{{ Form::submit('Entrar', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop