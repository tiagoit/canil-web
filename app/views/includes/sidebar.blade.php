<div class="rsidebar span_1_of_left">
	<div class="top-border"></div>
	<div class="border">
		<link href="{{ asset('css/default.css') }}" rel="stylesheet" type="text/css" media="all" />
		<link href="{{ asset('css/nivo-slider.css') }}" rel="stylesheet" type="text/css" media="all" />
		<script src="{{ asset('js/jquery.nivo.slider.js') }}"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider();
			});
		</script>
		<div class="slider-wrapper theme-default">
			<div id="slider" class="nivoSlider">
				<img src="{{ asset('images/divulgacao/pitbull1.jpg') }}" alt="" />
				<img src="{{ asset('images/divulgacao/rottweiler1.jpg') }}" alt="" />
				<img src="{{ asset('images/divulgacao/pastorbranco1.jpg') }}" alt="" />
			</div>
		</div>
		<div class="btn">
			<a href="#">Confira</a>
		</div>
	</div>
</div>
<div class="clear"></div>