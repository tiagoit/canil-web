@extends('layouts.default') 

@section('content')

  <div class="main">
		<div class="wrap">

      <!-- BREADCRUMBS -->
			<ul class="breadcrumb">
				<a class="home" href="/">Início</a> / Contato
			</ul>

      <!-- FORMULÁRIO DE CONTATO -->
      <div class="content-top">
        <div id="errors" class="alert alert-warning"></div> 
        <input type="text" id="name" value="Nome" class="form-control"><br>
        <input type="text" id="email" value="Email" class="form-control"><br>
        <textarea id="mensagem" value="Mensagem" class="form-control">Mensagem</textarea>
        <br>
        <div id="sucesso" class="alert alert-success">Mensagem enviada com sucesso, em breve entraremos em contato.</div>
        <div class="submit">
          <input id="enviarContato" type="submit" value="Enviar">
        </div>
      </div>

      <!-- MAPA -->
      <div class="map">
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d240059.21597727353!2d-43.921859501562494!3d-19.92755457874656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2s!4v1406662148770"
        width="100%" height="175" frameborder="0" style="border: 0"></iframe>
      </div>
    </div>
  </div>


@stop 


@section('scripts')
  <script type="text/javascript">

    function validaForm(){
      console.log('validando formulário');
      if($('#name').val() == 'Nome'){
        $('#errors').html('Digite o nome');
        $('#errors').show();
        return false;
      }

      if($('#email').val() == 'Email'){
        $('#errors').html('Digite o email');
        $('#errors').show();
        return false;
      }

      if($('#message').val() == 'Mensagem'){
        $('#errors').html('Digite a mensagem');
        $('#errors').show();
        return false;
      }

    	// form válido - envia por ajax
      ajaxContact();
    }

    function ajaxContact(){
      console.log('enviando msg por ajax');
      $.ajax({
        url: "/contato",
        method: "post",
        data: {
          name: $('#name').val(),
          email: $('#email').val(),
          message: $('#mensagem').val() 
        }
      }).done(function(data) {
        $('#sucesso').show();
        console.log('sucesso: ' + data);
      });
    }
  			
    $(document).ready(function(){

      $("input, textarea").on('focus', function(){
        $("#errors").hide();
      });

      $("#name").on('focus', function(){
        if(this.value == 'Nome') this.value = '';
      });
      $("#email").on('focus', function(){
        if(this.value == 'Email') this.value = '';
      });
      $("#mensagem").on('focus', function(){
        if(this.value == 'Mensagem') this.value = '';
      });

      $("#name").on('blur', function(){
        if(this.value == '') this.value = 'Nome';
      });
      $("#email").on('blur', function(){
        if(this.value == '') this.value = 'Email';
      });
      $("#mensagem").on('blur', function(){
        if(this.value == '') this.value = 'Mensagem';
      });

      $("#errors").hide();
      $("#sucesso").hide();

    	$('#enviarContato').on('click', function(){
    		validaForm();	
    	});
    });
  </script>
@stop