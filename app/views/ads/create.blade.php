@extends('layouts.default') @section('content')

@include('includes.navbar-adm')

{{ HTML::style('vendor/dropzone/dropzone.css') }}
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<div class="container">
<div class="page-header">
    <h1>Cadastrar novo anúncio</h1>
    <p class="lead"></p>
</div>
<!-- if there are creation errors, they will show here -->
@if ($errors->has())
<div class="alert alert-danger">{{ HTML::ul($errors->all()) }}</div>
@endif
<div class="row">
<div class="col-md-6">
{{ Form::open(array('url' => Ad::$restRoute, 'id' => 'adRegister')) }}

    <!-- TÍTULO DO ANÚNCIO -->
    <div class="form-group @if ($errors->has('title')) has-error @endif">
        {{ Form::label('title', 'Título') }}
        {{ Form::text('title', Input::old('title'), ['class' => 'form-control']) }}
    </div>

    <!-- RAÇA -->
    <div class="form-group">
        {{ Form::label('breed_id', 'Raça') }}
        {{ Form::select('breed_id', Tools::withEmpty($breeds), null, ['class' => 'form-control']) }}
    </div>

    <!-- TIPO -->
    <div class="form-group">
        {{ Form::label('type', 'Tipo') }}
        {{ Form::select('type', $types, null, ['class' => 'form-control']) }}
    </div>

    <!-- NASCIMENTO -->
    <div class="form-group">
        {{ Form::label('birth_date', 'Data de nascimento') }}
        {{ Form::text('birth_date', Input::old('birth_date'), ['class' => 'form-control']) }}
    </div>
</div>
<div class="col-md-6">
    <!-- DESCRIÇÃO -->
    <div class="form-group">
        {{ Form::label('description', 'Descrição') }}
        {{ Form::textarea('description', Input::old('description'), ['class' => 'form-control', 'size' => '30x6']) }}
    </div>

    <!-- PREÇO -->
    <div class="form-group">
        {{ Form::label('price', 'Preço (Apenas números, sem vírgula nem casa decimais)') }}
        {{ Form::text('price', Input::old('price'), ['class' => 'form-control']) }}
    </div>

    <!-- O ANÚNCIO ESTÁ ATIVO NO SISTEMA? -->
    <div class="form-group">
        {{ Form::label('active', 'Anúncio ativo no sistema? ') }}
        &nbsp;&nbsp;&nbsp; 
        {{ Form::radio('active', 1, Input::old('active'), ['id' => 'active-yes']) }} Sim 
        &nbsp;&nbsp;&nbsp; 
        {{ Form::radio('active', 0, Input::old('active'), ['id' => 'active-no']) }}  Não
    </div>
</div>

</div>
<div class="row">
    <div class="col-md-12">
        <!-- AJAX MULTIPLE IMAGE UPLOAD -->
        <div class="form-group">
            {{ Form::label('imagens', 'Imagens') }}
            <div id="dropzone-box" class="dropzone"></div>
        </div>

        {{ Form::hidden('images-list', null, ['id' => 'images-list']) }}

        <div class="btn btn-primary" id="btnSubmit">Cadastrar o anúncio</div>
    </div>
</div>
</div>
{{ Form::close() }}
<br><br>
<div id="dialog" title="Validação">
  <p></p>
</div>

@stop

@section('scripts')

{{ HTML::script('js/jquery.maskedinput.js') }}
{{ HTML::script('vendor/dropzone/dropzone.js') }}
{{ HTML::script('js/jquery-ui.min.js') }}

<script type="text/javascript">

    Dropzone.autoDiscover = false;

    $(function(){
        /* Máscara para data de nascimento - digitalbush.com/projects/masked-input-plugin/*/
        $('#birth_date').mask("99/99/9999",{placeholder:"__/__/____"});


        /* AJAX MULTIPLE IMAGE UPLOAD - dropzonejs.com */
        $('#dropzone-box').dropzone({
            url: "/ad/imageUpload",
            acceptedFiles: "image/*",
            parallelUploads: 1,
            dictDefaultMessage: "Arraste as imagens ou clique aqui",
            dictInvalidFileType: "Apenas imagens podem ser recebidas",
        });

        // Validação do formulário
        $('#btnSubmit').on('click', function() {
            if($('#title').val() == "") myDialog('Digite o título.');
            else if($('#breed_id').val() == "") myDialog('Selecione a raça.');
            else if($('#type').val() == "") myDialog('Selecione o tipo.');
            else if(!$('input[name=active]').is(':checked')) myDialog('O cachorro está ativo?');
            else $('#adRegister').submit();
        });
        

    });

    function myDialog(msg){
        $("#dialog p").html(msg);
        $( "#dialog" ).dialog();
    }

</script>

@stop
