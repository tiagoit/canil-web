@extends('layouts.default')

@section('content')
        <div class="login">
          	<div class="wrap">				
				<div class="col_1_of_login span_1_of_login">
					<div class="button1">
					  <a href="#"><input type="submit" name="Submit" value="Criar nova conta"></a>
					 	</div>
					 <div class="clear"></div>
				<div class="login-title">
	           		<h4 class="title">faça seu login</h4>
					<div id="loginbox" class="loginbox">
						<form action="" method="post" name="login" id="login-form">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">Email</label>
						      <input id="modlgn_username" type="text" name="email" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">Senha</label>
						      <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <div class="remember">
							    <p id="login-form-remember">
							      <label for="modlgn_remember"><a href="#">Esqueceu sua senha ? </a></label>
							   </p>
							    <input type="submit" name="Submit" class="button" value="Entrar">
							    <div class="clear"></div>
							 </div>
						  </fieldset>
						 </form>
					</div>
			    </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
@stop