@extends('layouts.default') @section('content')

<h1 class="head title-center">Bulldog Francês</h1>
<div class="clear"></div>

<!-- http://en.wikipedia.org/wiki/French_Bulldog -->

<h2 class="head">Origem da raça</h2>
<p class="text">O foco do nosso canil é a criação de raças pequenas que
	se adequam perfeitamente à qualquer ambiente.</p>
<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Donec nec iaculis ipsum. Aenean in nisi malesuada, dapibus massa ut,
	faucibus est. Aliquam nisl nisi, tincidunt et consectetur vitae, rutrum
	ut est. Donec cursus risus et velit rhoncus scelerisque. Sed nisl
	augue, aliquet sit amet vehicula at, vehicula sed arcu. Nunc ultricies
	lacinia velit eu tincidunt. Duis dui est, consectetur ac posuere in,
	consequat et tortor.</p>

<div class="clearout"></div>
<h2 class="head">Padrão da raça</h2>
<p class="text">Integer odio ex, varius quis est at, aliquam facilisis
	felis. Duis eget congue tellus, eu tincidunt nulla. Nam mollis faucibus
	est id laoreet. Fusce mollis velit vitae interdum egestas. Proin leo
	arcu, convallis sit amet nibh ac, fermentum tristique arcu. Aenean
	ultricies, tortor sed porta tempus, mi magna pulvinar magna, ut
	pellentesque ante nisi quis metus. Phasellus ultricies tempus massa.
	Maecenas quam mauris, aliquam vitae sem sed, tristique bibendum ex.
	Pellentesque hendrerit suscipit libero, ac sodales nisl semper vitae.
	Mauris maximus ipsum erat, a lobortis nisi bibendum ac. Ut volutpat leo
	quis ex mattis feugiat. Donec ornare dui sit amet pretium commodo.
	Etiam vitae odio eu metus efficitur molestie pharetra vel orci. Aliquam
	enim dui, tempor vitae ornare et, molestie porta dolor. Pellentesque
	vel arcu eget purus dictum efficitur.</p>
<p class="text">Mauris nec eleifend ipsum. Donec mattis, nisi sed ornare
	venenatis, felis velit egestas tellus, at tempor purus urna a quam.
	Etiam maximus, ligula vitae congue gravida, ipsum purus consequat
	velit, non elementum dolor nisi quis eros. Integer pharetra consectetur
	hendrerit. Nam sit amet nulla eget lacus finibus ornare ut non elit.
	Praesent at lectus non lorem eleifend luctus. Donec fermentum, orci sit
	amet faucibus semper, purus est tincidunt arcu, sed auctor massa ipsum
	id mauris. Ut tincidunt nibh nec hendrerit accumsan. Nunc elit eros,
	lobortis posuere velit sit amet, volutpat blandit quam. Praesent
	tristique lectus nulla.</p>
<div class="clearout"></div>


<h2 class="head">Temperamento</h2>
<p class="text">Integer odio ex, varius quis est at, aliquam facilisis
	felis. Duis eget congue tellus, eu tincidunt nulla. Nam mollis faucibus
	est id laoreet. Fusce mollis velit vitae interdum egestas. Proin leo
	arcu, convallis sit amet nibh ac, fermentum tristique arcu. Aenean
	ultricies, tortor sed porta tempus, mi magna pulvinar magna, ut
	pellentesque ante nisi quis metus. Phasellus ultricies tempus massa.
	Maecenas quam mauris, aliquam vitae sem sed, tristique bibendum ex.
	Pellentesque hendrerit suscipit libero, ac sodales nisl semper vitae.
	Mauris maximus ipsum erat, a lobortis nisi bibendum ac. Ut volutpat leo
	quis ex mattis feugiat. Donec ornare dui sit amet pretium commodo.
	Etiam vitae odio eu metus efficitur molestie pharetra vel orci. Aliquam
	enim dui, tempor vitae ornare et, molestie porta dolor. Pellentesque
	vel arcu eget purus dictum efficitur.</p>
<p class="text">Mauris nec eleifend ipsum. Donec mattis, nisi sed ornare
	venenatis, felis velit egestas tellus, at tempor purus urna a quam.
	Etiam maximus, ligula vitae congue gravida, ipsum purus consequat
	velit, non elementum dolor nisi quis eros. Integer pharetra consectetur
	hendrerit. Nam sit amet nulla eget lacus finibus ornare ut non elit.
	Praesent at lectus non lorem eleifend luctus. Donec fermentum, orci sit
	amet faucibus semper, purus est tincidunt arcu, sed auctor massa ipsum
	id mauris. Ut tincidunt nibh nec hendrerit accumsan. Nunc elit eros,
	lobortis posuere velit sit amet, volutpat blandit quam. Praesent
	tristique lectus nulla.</p>
<div class="clearout"></div>

<h2 class="head">Matrizes do Canil</h2>
<div class="top-box">
	<div class="col_1_of_3 span_1_of_3">
		<a href="{{ route('racas/bulldog-frances') }}">
			<div class="inner_content clearfix">
				<p class="title title-center">Clara</p>
				<div class="clear"></div>
				<div class="product_image">
					<img src="{{ asset('images/divulgacao/poodle.jpg') }}" alt="" />
				</div>
			</div>
		</a>
	</div>

	<div class="col_1_of_3 span_1_of_3">
		<a href="">
			<div class="inner_content clearfix">
				<p class="title title-center">Belinha</p>
				<div class="clear"></div>
				<div class="product_image">
					<img src="{{ asset('images/divulgacao/poodle.jpg') }}" alt="" />
				</div>
			</div>
		</a>
	</div>

	<div class="col_1_of_3 span_1_of_3">
		<a href="">
			<div class="inner_content clearfix">
				<p class="title title-center">Spitz Alemão (Lulu)</p>
				<div class="clear"></div>
				<div class="product_image">
					<img src="{{ asset('images/divulgacao/poodle.jpg') }}" alt="" />
				</div>
			</div>
		</a>
	</div>
</div>
<div class="clearout"></div>

<h2 class="head">Padreadores do Canil</h2>
<div class="top-box">
	<div class="col_1_of_3 span_1_of_3">
		<a href="">
			<div class="inner_content clearfix">
				<p class="title title-center">Bulldog Francês</p>
				<div class="clear"></div>
				<div class="product_image">
					<img src="{{ asset('images/divulgacao/poodle.jpg') }}" alt="" />
				</div>
			</div>
		</a>
	</div>

	<div class="col_1_of_3 span_1_of_3">
		<a href="">
			<div class="inner_content clearfix">
				<p class="title title-center">Maltês</p>
				<div class="clear"></div>
				<div class="product_image">
					<img src="{{ asset('images/divulgacao/poodle.jpg') }}" alt="" />
				</div>
			</div>
		</a>
	</div>

	<div class="col_1_of_3 span_1_of_3">
		<a href="">
			<div class="inner_content clearfix">
				<p class="title title-center">Spitz Alemão (Lulu)</p>
				<div class="clear"></div>
				<div class="product_image">
					<img src="{{ asset('images/divulgacao/poodle.jpg') }}" alt="" />
				</div>
			</div>
		</a>
	</div>
</div>
<div class="clearout"></div>


<h2 class="head">Filhotes disponíveis</h2>
<div class="top-box">
	<div class="col_1_of_3 span_1_of_3">
		<a href="">
			<div class="inner_content clearfix">
				<p class="title title-center">Bulldog Francês</p>
				<div class="clear"></div>
				<div class="product_image">
					<img src="{{ asset('images/divulgacao/poodle.jpg') }}" alt="" />
				</div>
			</div>
		</a>
	</div>

	<div class="col_1_of_3 span_1_of_3">
		<a href="">
			<div class="inner_content clearfix">
				<p class="title title-center">Maltês</p>
				<div class="clear"></div>
				<div class="product_image">
					<img src="{{ asset('images/divulgacao/poodle.jpg') }}" alt="" />
				</div>
			</div>
		</a>
	</div>

	<div class="col_1_of_3 span_1_of_3">
		<a href="">
			<div class="inner_content clearfix">
				<p class="title title-center">Spitz Alemão (Lulu)</p>
				<div class="clear"></div>
				<div class="product_image">
					<img src="{{ asset('images/divulgacao/poodle.jpg') }}" alt="" />
				</div>
			</div>
		</a>
	</div>
</div>
<div class="clearout"></div>




@stop
