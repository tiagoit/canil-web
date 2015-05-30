@extends('layouts.default') @section('content')

@include('includes.navbar-adm')

{{ HTML::style('vendor/dropzone/dropzone.css') }}
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<h1>Cadastrar novo cachorro</h1>

<!-- if there are creation errors, they will show here -->
@if ($errors->has())
<div class="alert alert-danger">{{ HTML::ul($errors->all()) }}</div>
@endif

{{ Form::open(array('url' => Dog::$restRoute, 'id' => 'dogRegister')) }}

    <!-- NOME DO CACHORRO -->
    <div class="form-group @if ($errors->has('name')) has-error @endif">
        {{ Form::label('name', 'Nome') }}
        {{ Form::text('name', Input::old('name'), ['class' => 'form-control']) }}
    </div>

    <!-- RAÇA -->
    <div class="form-group">
        {{ Form::label('breed', 'Raça') }}
        {{ Form::select('breed', Tools::withEmpty($breeds), null, ['class' => 'form-control']) }}
    </div>

    <!-- NASCIMENTO -->
    <div class="form-group">
        {{ Form::label('birth_date', 'Data de nascimento') }}
        {{ Form::text('birth_date', Input::old('birth_date'), ['class' => 'form-control']) }}
    </div>

    <!-- TIPO -->
    <div class="form-group">
        {{ Form::label('type', 'Tipo') }}
        {{ Form::select('type', Tools::withempty(Dog::$type), null, ['class' => 'form-control']) }}
    </div>

    <!-- TAMANHO -->
<!--     <div class="form-group">
        {{ Form::label('size', 'Tamanho') }}
        {{ Form::select('size', Dog::$size, null, ['class' => 'form-control']) }}
    </div> -->

    <!-- COR -->
<!--     <div class="form-group">
        {{ Form::label('color', 'Cor') }}
        {{ Form::select('color', Dog::$color, null, ['class' => 'form-control']) }}
    </div> -->

    <!-- PEDIGREE -->
    <div class="form-group">
        {{ Form::label('pedigree', 'Pedigree') }}
        {{ Form::text('pedigree', Input::old('pedigree'), ['class' => 'form-control']) }}
    </div>

    <!-- DESCRIÇÃO -->
    <div class="form-group">
        {{ Form::label('description', 'Descrição') }}
        {{ Form::textarea('description', Input::old('description'), ['class' => 'form-control', 'size' => '30x5']) }}
    </div>

    <!-- A RAÇA ESTÁ ATIVA NO SISTEMA? -->
    <div class="form-group">
        {{ Form::label('active', 'Cachorro ativo no sistema? ') }}
        &nbsp;&nbsp;&nbsp; 
        {{ Form::radio('active', 1, Input::old('active'), ['id' => 'active-yes']) }} Sim 
        &nbsp;&nbsp;&nbsp; 
        {{ Form::radio('active', 0, Input::old('active'), ['id' => 'active-no']) }}  Não
    </div>

    <!-- AJAX MULTIPLE IMAGE UPLOAD -->
    <div class="form-group">
        {{ Form::label('imagens', 'Imagens') }}
        <div id="dropzone-box" class="dropzone"></div>
    </div>

    {{ Form::hidden('images-list', null, ['id' => 'images-list']) }}

    <div class="btn btn-primary" id="btnSubmit">Cadastrar cachorro</div>

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
            url: "/dog/imageUpload",
            acceptedFiles: "image/*",
            parallelUploads: 1,
            dictDefaultMessage: "Arraste as imagens ou clique aqui",
            dictInvalidFileType: "Apenas imagens podem ser recebidas",
        });

        // Validação do formulário
        $('#btnSubmit').on('click', function() {
            if($('#name').val() == "") myDialog('Digite o nome.');
            else if($('#breed').val() == "") myDialog('Selecione a raça.');
            else if($('#type').val() == "") myDialog('Selecione o tipo.');
            else if(!$('input[name=active]').is(':checked')) myDialog('O cachorro está ativo?');
            else $('#dogRegister').submit();
        });
        

    });

    function myDialog(msg){
        $("#dialog p").html(msg);
        $( "#dialog" ).dialog();
    }

</script>

@stop
