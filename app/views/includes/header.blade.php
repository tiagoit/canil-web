<div class="header-top"></div>
	<div class="header-bottom">
		<div class="wrap">
<!-- 			<div class="header-bottom-left"> -->
			<div class="row header-canil">
				<div class="logo col-md-3">
					<a href="{{ route('inicio') }}">
						<img src="{{ asset('images/logo_canil.png') }}" alt="" />
					</a>
				</div>
				<div class="menu col-md-9">
					<ul class="megamenu skyblue">
						@if(Request::segment(1) == '')
						<li class="active">{{ link_to_route('inicio', 'Início') }}</li>
						@else
						<li>{{ link_to_route('inicio', 'Início') }}</li>
						@endif
						
						@if(Request::segment(1) == 'racas')
						<li class="active">{{ link_to_route('racas', 'Raças') }}
						@else
						<li>{{ link_to_route('racas', 'Raças') }}
						@endif
							<div class="megapanel">
								<div class="row">
									<div class="col1">
										<div class="h_nav">
											<h4>{{ link_to_route('racas', 'Raças') }}</h4>
											<ul>
												@foreach(Breed::where('active', '1')->get() as $breed)
													<li><a href="racas/{{ $breed->url }}">{{ $breed->name }}</a></li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						
						@if(Request::segment(1) == 'canil')
						<li class="active">{{ link_to_route('canil', 'Nosso Canil') }}</li>
						@else
						<li>{{ link_to_route('canil', 'Nosso Canil') }}</li>
						@endif						
						
						@if(Request::segment(1) == 'contato')
						<li class="active">{{ link_to_route('contato', 'Contato') }}</li>
						@else
						<li>{{ link_to_route('contato', 'Contato') }}</li>
						@endif
						
					</ul>
				</div>
			</div>
			<!-- </div> -->
			<!--
			<div class="header-bottom-right">
				<div class="search">
					<input type="text" name="s" class="textbox" value="Pesquisar"
						onfocus="this.value = '';"
						onblur="if (this.value == '') {this.value = 'Persquisar';}">
					<input type="submit" value="Subscribe" id="submit" name="submit">
					<div id="response"></div>
				</div>
				<div class="tag-list">
					<ul class="icon1 sub-icon1 profile_img">
						<li><a class="active-icon c1" href="#"> </a>
						</li>
					</ul> 
					<ul class="icon1 sub-icon1 profile_img">
						<li><a class="active-icon c2" href="#"> </a>
							<ul class="sub-icon1 list">
								<li><h3>Carrinho vazio</h3>
									<a href=""></a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="last">
						<li><a href="#">Carrinho(0)</a></li>
					</ul>
				</div>
			</div>
			-->
			<div class="clear"></div>
		</div>
	</div>
    