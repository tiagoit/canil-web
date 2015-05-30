@extends('layouts.default') 
@section('content')

@include('includes.navbar-adm')

<h1>Todas as raças</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<a class="btn btn-small btn-success" href="{{ URL::to(Breed::$restRoute . '/create') }}">Cadastrar nova raça</a><br><br>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Nome</td>
            <td>Ativo</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($breeds as $key => $value)
        <tr>
            <td>{{ $value->name }}</td>
            <td>{{ ($value->active) ? 'Sim' : 'Não' }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => Breed::$restRoute .'/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Remover raça', array('class' => 'btn btn-warning btn-sm')) }}
                {{ Form::close() }}

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success btn-sm" href="{{ URL::to(Breed::$restRoute . '/' . $value->id) }}">Mostrar raça</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info btn-sm" href="{{ URL::to(Breed::$restRoute . '/' . $value->id . '/edit') }}">Editar raça</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>


@stop