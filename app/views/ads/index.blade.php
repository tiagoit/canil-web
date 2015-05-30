@extends('layouts.default') 
@section('content')

@include('includes.navbar-adm')

<h1>Todos os anúncios</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<a class="btn btn-small btn-success" 
    href="{{ URL::to(Ad::$restRoute.'/create') }}">Cadastrar novo anúncio</a><br><br>

@if($ads->isEmpty())
    Sem anúncios cadastrados
@else
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Título</td>
                <td>Raça</td>
                <td>Tipo</td>
                <td>Ativo</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
        @foreach($ads as $key => $value)
            <tr>
                <td>{{ $value->title }}</td>
                <td>{{ $value->breed->name }}</td>
                <td>{{ $value->type }}</td>
                <td>{{ ($value->active) ? 'Sim' : 'Não' }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the ad (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => Ad::$restRoute . '/' . $value->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Remover anúncio', array('class' => 'btn btn-warning btn-sm')) }}
                    {{ Form::close() }}

                    <!-- show the ad (uses the show method found at GET /ads/{id} -->
                    <a class="btn btn-small btn-success btn-sm" href="{{ URL::to(Ad::$restRoute . '/' . $value->id) }}">Mostrar anúncio</a>

                    <!-- edit this ad (uses the edit method found at GET /ads/{id}/edit -->
                    <a class="btn btn-small btn-info btn-sm" href="{{ URL::to(Ad::$restRoute . '/' . $value->id . '/edit') }}">Editar anúncio</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif

@stop