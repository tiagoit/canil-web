@extends('layouts.default') 
@section('content')

@include('includes.navbar-adm')

{{ HTML::style('vendor/dropzone/dropzone.css') }}

<h1>Editando {{ $dog->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($dog, array('route' => array(Dog::$restRoute . '.update', $dog->id), 'method' => 'PUT')) }}

    <!-- ID -->
    {{ Form::hidden('dog_id', $dog->id) }}

    <!-- NOME -->
    <div class="form-group">
        {{ Form::label('name', 'Nome') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <!-- RAÇA -->
    <div class="form-group">
        {{ Form::label('breed', 'Raça') }}
        {{ Form::select('breed', $breeds, null, ['class' => 'form-control']) }}
    </div>

    <!-- NASCIMENTO -->
    <div class="form-group">
        {{ Form::label('birth_date', 'Data de nascimento') }}
        {{ Form::text('birth_date', Carbon::createFromFormat('Y-m-d', $dog->birth_date)->format('d/m/Y'), ['class' => 'form-control']) }}
    </div>

    <!-- TIPO -->
    <div class="form-group">
        {{ Form::label('type', 'Tipo') }}
        {{ Form::select('type', Tools::withempty(Dog::$type), null, ['class' => 'form-control']) }}
    </div>

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

    <!-- ATIVO -->
    <div class="form-group">
        {{ Form::label('active', 'Cachorro ativo no sistema? ') }}
        &nbsp;&nbsp;&nbsp; 
        {{ Form::radio('active', 1) }} Sim 
        &nbsp;&nbsp;&nbsp; 
        {{ Form::radio('active', 0) }}  Não
    </div>

    <!-- IMAGENS -->
    {{ Form::label('images', 'Imagens ') }}
    <div class="form-group">
        <div id="dropzone-box" class="dropzone"></div>
    </div>
    <div class="container-fluid">
       <div class="row">
            @foreach($dog->dogImages as $dogImage)
                <div class="col-xs-6 col-md-3" id="img-{{$dogImage->id}}">
                    <img src="/uploads/dogs/thumb_{{ $dogImage->url }}" alt="Foto do cachorro {{$dog->name}}." class="img-thumbnail">
                    <div class="btn btn-xs btn-warning remove-image center-block">Remover</div>
                    <data value="{{$dogImage->id}}"></data>
                </div>
            @endforeach
        </div>
    </div>
    
    <br>

    {{ Form::submit('Salvar edição', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop

@section('scripts')

{{ HTML::script('js/jquery.maskedinput.js') }}
{{ HTML::script('vendor/dropzone/dropzone.js') }}

<script type="text/javascript">

    Dropzone.autoDiscover = false;

    $(document).ready(function(){
        $('#birth_date').mask("99/99/9999",{placeholder:"__/__/____"});

        /* AJAX MULTIPLE IMAGE UPLOAD - dropzonejs.com */
        $('#dropzone-box').dropzone({
            url: "/dog/imageUpload",
            acceptedFiles: "image/*",
            parallelUploads: 1,
            dictDefaultMessage: "Arraste as imagens ou clique aqui",
            dictInvalidFileType: "Apenas imagens podem ser recebidas",
            sending: function(file, xhr, formData) {
                formData.append("id", $('input[name="dog_id"]').val());
            }
        });

        $('.remove-image').on('click', function(){
            deleteImage($(this).siblings('data').val());
        });
    });

    function deleteImage(image_id){
        $.ajax({
            type: "POST",
            url: '/dog/imageDelete',
            data: {
                id: image_id
            },
            success: function( data ){
                $('#img-'+image_id).hide();
            }
        });
    }

</script>

@stop