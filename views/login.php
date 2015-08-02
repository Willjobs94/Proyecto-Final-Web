<?php 
	
	include ("layout.php");
	?>
  
        <div class="row">
        <div class="col s6 m6 offset-m3">
          <div class="card">
            
				<center>
					<label class="card-title grey-text text-darken-4">Iniciar Session</label>
				</center>	
    			<form class="col s12 " method="post">
        			<div class="input-field col s10 offset-s1">
         				<i class="prefix zmdi zmdi-account-circle"></i>
          				<label for="iconUserName" >Nombre de Usuario</label>
          				<input id="iconUserName" type="text" class="validate" name="UserName" required>
					</div>
	        		<div class="input-field col s10 offset-s1">
	          			<i class=" prefix zmdi zmdi-key"></i>
			          	<input id="iconPassword" type="password" class="validate" name="UserPassowrd" required>
			         	<label for="iconPassword" data-error="wrong" data-success="right">Contraseña</label>
      				</div>  	
            	<div class="row">
					<div class="col s10 offset-s2">
     					<button class="btn blue waves-effect waves-light" type="submit">Enviar <i class="zmdi zmdi-mail-send"></i></button>
     					<button class="btn red waves-effect waves-light" type="reset">Limpiar <i class="zmdi zmdi-format-clear-all"></i></button>
					 </div>
				</div>
    			</form>
          </div>
        </div>
      </div>
