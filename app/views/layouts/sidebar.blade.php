<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<div class="container">

		<header class="row">
			@include('includes.header')
		</header>

		<div id="main" class="row">

			<!-- main content -->
			<div id="content" class="col-md-8">
				<div class="section group">
					<div class="cont span_2_of_3">	
						
						@yield('content')
						
						@include('includes.sidebar')
						
					</div>
				</div>
			</div>

		</div>

		<footer class="row">
			@include('includes.footer')
		</footer>

	</div>
</body>
</html>
