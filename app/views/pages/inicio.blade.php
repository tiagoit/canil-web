@extends('layouts.default') 

@section('slider')
	@include('includes.slider')
@stop

@section('content')
	<link href="css/default.css" rel="stylesheet" type="text/css"	media="all" />
	<link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
	<style type="text/css">
		.grid-item {
			width: 30%;
		}
	</style>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<br>
				<div class="button-group filter-button-group">
				  <button class="btn btn-info" data-filter="*">Mostrar todos</button>
				  <button class="btn btn-primary" data-filter=".maltes">Maltês</button>
				  <button class="btn btn-warning" data-filter=".shih-tzu">Shih-Tzu</button>
				  <button class="btn btn-danger" data-filter=".spitz-alemao">Spitz Alemão</button>
				</div>
				<br>
				<div class="grid">
		    @foreach($ads as $ad)
		    	<div class="grid-item {{ $ad->breed->url }}">
		    		<img src="/uploads/ads/thumb_{{AdController::getRandomAdImage($ad)}}" 
		    			alt="anúncio {{$ad->title}}">
		    		<div class="sale-box">
							<span class="on_sale">{{ $ad->breed->name }}</span>
						</div>
						<p class="title">{{ $ad->title }}</p>
						<div class="price">
							<div class="cart-left">
								<div class="price1">
									<span class="actual">R$ {{$ad->price}}</span>
								</div>
							</div>
							<div class="cart-right"></div>
						</div>
		    	</div>
				@endforeach
				</div>
			</div>


			<!-- <div class="col-md-3 sidebar-canil">
				<div class="top-border"></div>
				<div class="border">
					<div class="slider-wrapper theme-default">
						<div id="slider" class="nivoSlider">
							<img src="images/divulgacao/pitbull1.jpg" alt="" />
							<img src="images/divulgacao/rottweiler1.jpg" alt="" />
							<img src="images/divulgacao/pastorbranco1.jpg" alt="" />
						</div>
					</div>
					<div class="btn">
						<a href="#">Confira</a>
					</div>
				</div>
			</div> -->
		</div>
	</div>

@stop

@section('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js"></script>
<script src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#slider').nivoSlider();

		var grid = $('.grid').isotope({
		  // options
		  itemSelector: '.grid-item',
		  layoutMode: 'fitRows'
		});
		// filter items on button click
		$('.filter-button-group').on( 'click', 'button', function() {
			console.log('ok');
		  var filterValue = $(this).attr('data-filter');
		  grid.isotope({ filter: filterValue });
		});
	});	
</script>

@stop


