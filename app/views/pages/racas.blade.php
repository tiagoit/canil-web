@extends('layouts.default')

@section('content')
<div class="section group">
	<div class="cont span_2_of_3">
		<h1 class="head title-center">Raças</h1>
		<p class="text">
			A especialidade do nosso canil é a criação
			 de raças pequenas que se adequam perfeitamente à qualquer ambiente.
		</p>
		<p class="text">
			Escolha uma das raças abaixo para saber uma pouco mais sobre sua origem, 
			temperamento e conheçer as nossas matrizes e padreadores
		</p>

		
		<h2 class="head title-center"></h2>
		<div class="top-box">
			@foreach($breeds as $breed)
			<div class="col_1_of_3 span_1_of_3">
				<div class="inner_content clearfix">
					<p class="title title-center">{{ $breed->name }}</p>
					<div class="product_image">
						<img src='{{$breed->image}}' alt='{{$breed->name}}' />
					</div>
				</div>
			</div>
			@endforeach
		</div>
		

		<div class="clear"></div>
	</div> 

	

	<div class="rsidebar span_1_of_left">
		<div class="top-border"></div>
		<div class="border">
			<link href="css/default.css" rel="stylesheet" type="text/css"
				media="all" />
			<link href="css/nivo-slider.css" rel="stylesheet" type="text/css"
				media="all" />
			<script src="js/jquery.nivo.slider.js"></script>
			<script type="text/javascript">
				$(window).load(function() {
					$('#slider').nivoSlider();
				});
			</script>
			<div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
					<img src="images/divulgacao/pitbull1.jpg" alt="" /> <img
						src="images/divulgacao/rottweiler1.jpg" alt="" /> <img
						src="images/divulgacao/pastorbranco1.jpg" alt="" />
				</div>
			</div>
			<div class="btn">
				<a href="#">Confira</a>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>

@stop

@section('script')

$(document).ready(function(){
	var $container = $('#container');
	// initialize
	$container.masonry({
		columnWidth: 200,
		itemSelector: '.item'
	});	
});


@stop