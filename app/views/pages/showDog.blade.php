@extends('layouts.default') @section('content')

<h1 class="head title-center">Perfil</h1>

<div class="clear"></div>


<h2 class="head">Informações</h2>
<p class="text"><b>Data de Nascimento:</b> {{$dog->birth_date}}</p>
<p class="text"><b>Tipo:</b> {{$dog->type}} </p>
@if($dog->pedigree != null)
	<p class="text"><b>Pedigree:</b> {{$dog->pedigree}} </p>
@endif
@if($dog->description != null)
	<p class="text"><b>Descrição:</b> {{$dog->description}} </p>
@endif

<h2 class="head">Fotos</h2>
<div class="top-box">
	@foreach($dog->dogImages as $dogImage)
		<div class="col_1_of_3 span_1_of_3">
			<a href="">
				<div class="inner_content clearfix">
					<div class="clear"></div>
					<div class="product_image">
						<img src='/uploads/dogs/{{$dogImage->url}}' alt='' />
					</div>
				</div>
			</a>
		</div>
	@endforeach
</div>
<div class="clearout"></div>

@stop

