@extends('layouts.default') @section('content')

<h1 class="head title-center">{{ $breed->name }}</h1>
<div class="clear"></div>


<h2 class="head">Origem da raça</h2>
<p class="text">{{ $breed->source }}</p>
<div class="clearout"></div>


<h2 class="head">Padrão da raça</h2>
<p class="text">{{ $breed->standard }}</p>
<div class="clearout"></div>


<h2 class="head">Temperamento</h2>
<p class="text">{{ $breed->temperament }}</p>
<div class="clearout"></div>


<h2 class="head">Matrizes do Canil</h2>
<div class="top-box">

	@foreach($breed->dogs as $dog)
		@if($dog->type == "Matriz")
			<div class="col_1_of_3 span_1_of_3">
					<a href="">
						<div class="inner_content clearfix">
							<p class="title title-center">{{ $dog->name }}</p>
							<div class="clear"></div>
							<div class="product_image">
								<?php
									foreach ($dog->dogImages as $dogImage) {
										echo "<img src='{$dogImage->url}' alt='' />";	
										break;
									}
								?>
							</div>
						</div>
					</a>
				</div>
		@endif
	@endforeach
</div>

<div class="clearout"></div>



<h2 class="head">Padreadores do Canil</h2>
<div class="top-box">

	@foreach($breed->dogs as $dog)
		@if($dog->type == "Padreador")
			<div class="col_1_of_3 span_1_of_3">
					<a href="racas/{{$breed->url}}/{{Tools::nameToUrl($dog->name)}}-{{$dog->id}}">
						<div class="inner_content clearfix">
							<p class="title title-center">{{ $dog->name }}</p>
							<div class="clear"></div>
							<div class="product_image">
								<?php
									foreach ($dog->dogImages as $dogImage) {
										echo "<img src='/uploads/dogs/$dogImage->url' alt='' />";	
										break;
									}
								?>
							</div>
						</div>
					</a>
				</div>
		@endif
	@endforeach

</div>
<div class="clearout"></div>

@stop
