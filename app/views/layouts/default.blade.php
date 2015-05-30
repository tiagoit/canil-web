<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		@include('includes.head')
	</head>
<body>
	
	<!-- HEADER -->
	<header>
		@include('includes.header')
		@yield('slider')
	</header>
	
	<!-- CONTENT -->
	<div class="container">		
		<div class="main">
			<!-- <div class="wrap"> -->
			@yield('content')
			<!-- </div> -->
		</div>
	</div>

	<!-- FOOTER -->
	<footer>
		@include('includes.footer')
	</footer>

	@yield('scripts')

</body>
</html>
