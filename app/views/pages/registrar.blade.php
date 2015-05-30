@extends('layouts.default')

@section('content')

          <div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">Cadastro</h4>
    		   <form>
    			 <div class="col_1_of_2 span_1_of_2">
		   			 <div><input type="text" value="Nome" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nome';}"></div>
		    			<div><input type="text" value="Sobremome" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Sobrenome';}"></div>
		    			<div><input type="text" value="E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}"></div>
		    			<div><input type="text" value="Senha" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Senha';}"></div>
		    	 </div>
		    	  <div class="col_1_of_2 span_1_of_2">	
		    		<div><input type="text" value="Endereco" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Endereço';}"></div>
		    		
		          <div><input type="text" value="Cidade" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Cidade';}"></div>
		          <div><input type="text" value="Estado" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Estado';}"></div>
		           <div>
		          </div>
		          	<div><input type="text" value="Telefone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telefone';}"></div>
		           
		          </div>
		      <button class="grey">Enviar</button>		    
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>

@stop