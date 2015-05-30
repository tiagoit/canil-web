@extends('layouts.default') 
@section('content')

@include('includes.navbar-adm')

<h1>Todos os cães</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<a class="btn btn-small btn-success" href="{{ URL::to(Dog::$restRoute.'/create') }}">Cadastrar novo cachorro</a><br><br>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Nome</td>
            <td>Raça</td>
            <td>Tipo</td>
            <td>Ativo</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($dogs as $key => $value)
        <tr>
            <td>{{ $value->name }}</td>
            <td>{{ $value->breed->name }}</td>
            <td>{{ $value->type }}</td>
            <td>{{ ($value->active) ? 'Sim' : 'Não' }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => Dog::$restRoute . '/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Remover cachorro', array('class' => 'btn btn-warning btn-sm')) }}
                {{ Form::close() }}

                <!-- show the dog (uses the show method found at GET /dogs/{id} -->
                <a class="btn btn-small btn-success btn-sm" href="{{ URL::to(Dog::$restRoute . '/' . $value->id) }}">Mostrar cachorro</a>

                <!-- edit this dog (uses the edit method found at GET /dogs/{id}/edit -->
                <a class="btn btn-small btn-info btn-sm" href="{{ URL::to(Dog::$restRoute . '/' . $value->id . '/edit') }}">Editar cachorro</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>


@stop