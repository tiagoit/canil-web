@extends('layouts.default')

@section('content')
	<div class="main">
    <div class="wrap">

      <!-- BREADCRUMBS -->
      <ul class="breadcrumb">
        <a class="home" href="/">Início</a> / Nosso Canil
      </ul>
      
      <h1 class="text-left">Canil Asas de Águia <br><small>Filhotes de qualidade</small></h1>
      <br>

      <div class="row">
        <div class="col-md-7">
        <h2>Quem somos</h2>
          <p class="text-justify">
            O Canil Asas de Águia foi fundado com o objetivo oferecer uma opção completa em 
            venda segura de cães, vacinados, vermifugados e com pedigree. 
          </p>        
          <p class="text-justify">
            Nossa missão é garantir a certeza de que está levando para casa um filhote saudável, 
            pronto para proporcionar toda a alegria para você e sua família. 
          </p>
          <p class="text-justify">
            Além da venda de filhotes, o Canil Asas de Águia tem como objetivo proporcionar um 
            portal online com informações, dicas e notícias atualizadas, a respeito do universo canino.
          </p>
          <p class="text-justify">
            Oferecemos a melhor qualidade de filhotes em Belo Horizonte. <a href="/contato">Clique aqui para entrar em contato.</a>
          </p>
        </div>
        <div class="col-md-5">
          <br><br><br>
          <div class="thumbnail inner-border text-center">
            <img src="/images/estaticas/chloe.jpg">
            <!-- <span>Segurança e qualidade</span> -->
          </div>
        </div>
      </div>
      <hr>


      <div class="row">

        <div class="col-md-5"><br>
          <div href="#" class="thumbnail inner-border text-center">
            <img src="/images/estaticas/bela.jpg">
            <!-- <span>Profissionais comprometidos</span> -->
          </div>
        </div>
        <div class="col-md-7">
          <h2>Valores</h2>
          <p class="text-justify">
            O Canil Asas de Águia é norteado por uma conduta de responsabilidade e amor aos cães, 
            dispensando a cada um o tratamento individual de qualidade com profissionais comprometidos 
            e bem informados que amam os animais e respeitam a natureza.
          </p>
        </div>
      </div>
      <hr>


      <div class="row">
        <div class="col-md-7">
          <h2>Cuidado Especial</h2>
          <p class="text-justify">
            Nossos filhotes são tratados com muito carinho e amor, pois acreditamos que estes são os ingredientes 
            fundamentais para um bom desenvolvimento.
          </p>
          <p class="text-justify">
            A alimentação é controlada por profissionais qualificados e com produtos da melhor qualidade, garantindo
            um desenvolvimento saudável de cada cãozinho.
          </p>
          <p class="text-justify">
            Nosso maior objetivo é garantir a satisfação daqueles que adquirem nossos filhotes,  pois temos certeza, 
            que os mesmos, irão proporcionar inúmeros momentos de alegria e descontração.
          </p>
        </div>
        <div class="col-md-5"><br>
          <div class="thumbnail inner-border text-center">
            <img src="/images/estaticas/sisi.jpg">  
            <!-- <span>Tratamento cinco estrelas</span> -->
          </div>
        </div>
      </div>
      

      <!-- FORMULÁRIO DE CONTATO -->
      <!-- <div class="content-top">
        <div id="errors" class="alert alert-warning"></div> 
        <input type="text" id="name" value="Nome" class="form-control"><br>
        <input type="text" id="email" value="Email" class="form-control"><br>
        <textarea id="mensagem" value="Mensagem" class="form-control">Mensagem</textarea>
        <br>
        <div id="sucesso" class="alert alert-success">Mensagem enviada com sucesso, em breve entraremos em contato.</div>
        <div class="submit">
          <input id="enviarContato" type="submit" value="Enviar">
        </div>
      </div> -->

      <!-- MAPA -->
<!--       <div class="map">
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d240059.21597727353!2d-43.921859501562494!3d-19.92755457874656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2s!4v1406662148770"
        width="100%" height="175" frameborder="0" style="border: 0"></iframe>
      </div> -->


    </div>
  </div>

@stop