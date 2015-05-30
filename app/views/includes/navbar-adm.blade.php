<nav class="navbar navbar-inverse navbar-adm">
	<div class="container-fluid">
	    <div class="navbar-header">
	        <a class="navbar-brand" href="{{ URL::to('adm') }}">ADMINISTRAÇÃO</a>
	    </div>
	    
	    <ul class="nav navbar-nav">
	        <li><a href="{{ URL::to('admracas') }}">RAÇAS</a></li>
	        <li><a href="{{ URL::to('admcaes') }}">CACHORROS</a></li>
	        <li><a href="{{ URL::to('admanucios') }}">ANÚNCIOS</a></li>
	    </ul>

	    <div class="collapse navbar-collapse navbar-right">
	        <ul class="nav navbar-nav">
	      	    <li class="active"><a href="#">{{ Auth::user()->name }} </a></li>
	      	    <li><a href="{{ URL::to('sair') }}">Sair</a></li>
	        </ul>
	    </div>
	</div>
</nav>