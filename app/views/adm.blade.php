@extends('layouts.default') @section('content')

@include('includes.navbar-adm')

<h1>Administração do sistema <br><small>Configurações e conteúdo</small></h1>
<br>

<p><button type="button" class="btn btn-primary btn-lg" onclick="location.href='admracas'">RAÇAS</button></p>

<p><button type="button" class="btn btn-primary btn-lg" onclick="location.href='admcaes'">CACHORROS</button></p>

<p><button type="button" class="btn btn-primary btn-lg" onclick="location.href='admanuncios'">ANÚNCIOS</button></p>

<br>  
@stop