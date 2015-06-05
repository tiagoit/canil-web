	
	<div class="footer">
		<div class="footer-top">
			<div class="wrap">
				<div class="section group example">
					<div class="col_1_of_2 span_1_of_2">
						<ul class="f-list">
							<li>
								<img src="{{ asset('images/3.png') }}">
								<span class="f-text">
									Ligue para nós! (31) 3275 2957
								</span>
								<div class="clear"></div>
							</li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="footer-middle">
			<div class="wrap">
				<div class="section group example">
					<div class="col_1_of_f_1 span_1_of_f_1">
						<div class="section group example">
							<div class="col_1_of_f_2 span_1_of_f_2">
								<h3>Facebook</h3>
								<script>
									(function(d, s, id) {
										var js, fjs = d.getElementsByTagName(s)[0];
										if (d.getElementById(id))
											return;
										js = d.createElement(s);
										js.id = id;
										js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
										fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));
								</script>
								<div class="like_box">
									<div class="fb-like-box"
										data-href="http://www.facebook.com/CanilAsasDeAguia"
										data-colorscheme="light" data-show-faces="true"
										data-header="true" data-stream="false" data-show-border="true"></div>
								</div>
							</div>
							
							<!-- 
							<div class="col_1_of_f_2 span_1_of_f_2">
								<h3>Twitter canil</h3>
								<div class="recent-tweet">
									<div class="recent-tweet-icon">
										<span> </span>
									</div>
									<div class="recent-tweet-info">
										<p>Texto twitado</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="recent-tweet">
									<div class="recent-tweet-icon">
										<span> </span>
									</div>
									<div class="recent-tweet-info">
										<p>Texto twitado</p>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							 -->
							 
							<div class="clear"></div>
						</div>
					</div>
					<div class="col_1_of_f_1 span_1_of_f_1">
						<div class="section group example">
							<div class="col_1_of_f_2 span_1_of_f_2">
								<h3>Contato</h3>
								<div class="company_address">
									<p>Belo Horizonte - Minas Gerais</p>
									<p>Telefone: (31) 3275 2957</p>
									<p>
										Email: <span>contato@canilasasdeaguia.com</span>
									</p>

								</div>
								<div class="social-media">
									<ul>
										<li>
											<span class="simptip-position-bottom simptip-movable" data-tooltip="Google">
												<a href="#" target="_blank"></a>
											</span>
										</li>
										<li>
											<span class="simptip-position-bottom simptip-movable" data-tooltip="Linked in">
												<a href="#" target="_blank"></a>
											</span>
										</li>
										<li>
											<span class="simptip-position-bottom simptip-movable" data-tooltip="Rss">
												<a href="#" target="_blank"> </a>
											</span>
										</li>
										<li>
											<span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook">
												<a href="#" target="_blank"></a>
											</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="wrap">
				<div class="copy">
					<p><!-- © -->&copy; 2015 Canil Asas de Águia</p>
				</div>
				<div class="f-list2">
					<ul>
						<li class="active">{{ link_to_route('inicio', 'Início') }}</li> |
						<li>{{ link_to_route('racas', 'Raças') }}</li> |
						<li>{{ link_to_route('canil', 'Nosso Canil') }}</li> |
						<li>{{ link_to_route('contato', 'Contato') }}</li> |
						<li>{{ link_to_route('entrar', 'Administração') }}</li> 
						

					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
