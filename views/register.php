<?php 
	include("layout.php");
	
?>
      <div class="row">
        <div class="col s6 m6 offset-m3">
          <div class="card">
            
				<center>
					<label class="card-title grey-text text-darken-4">Registrar Candidato</label>
				</center>	
    			<form class="col s12 " method="post">
        			<div class="input-field col s10 offset-s1">
         				<i class="prefix zmdi zmdi-account-circle"></i>
          				<input id="firstName" type="text" class="validate" name="firstName" required>
          				<label for="firstName" data-error="wrong" data-success="right">Primer Nombre</label>
					</div>
					<div class="input-field col s10 offset-s1">
         				<i class="prefix zmdi zmdi-account-circle"></i>
          				<input id="middleName" type="text" class="validate" name="middleName">
          				<label for="middleName" data-error="wrong" data-success="right">Segundo Nombre</label>
					</div>
					<div class="input-field col s10 offset-s1">
         				<i class="prefix zmdi zmdi-account-circle"></i>
          				<input id="lastName" type="text" class="validate" name="lastName" required>
          				<label for="lastName" data-error="wrong" data-success="right">Primer Apellido</label>
					</div>
					<div class="input-field col s10 offset-s1">
         				<i class="prefix zmdi zmdi-account-circle"></i>
          				<input id="secondLastName" type="text" class="validate" name="secondLastName">
          				<label for="secondLastName" data-error="wrong" data-success="right">Segundo Apellido</label>
					</div>
					<div class="input-field col s10 offset-s1">
         				<i class="prefix zmdi zmdi-email"></i>
          				<input id="email" type="email" class="validate" name="email" required>
          				<label for="email" data-error="wrong" data-success="right">Email</label>
					</div>
					<div class="input-field col s10 offset-s1">
         				<i class="prefix zmdi zmdi-email"></i>
          				<input id="confirmedEmail" type="email" class="validate" name="email" required>
          				<label for="confirmedEmail" data-error="wrong" data-success="right">Confirmar Email</label>
					</div>
	        		<div class="input-field col s10 offset-s1">
	          			<i class=" prefix zmdi zmdi-key"></i>
			          	<input id="password" type="password" class="validate" name="passowrd" required>
			         	<label for="password" data-error="wrong" data-success="right">Contraseña</label>
      				</div>		
					<div class="col s12">
						<div class="input-field col s10 offset-s1">			  
	          				<select>
						      <option value="cedula">Cédula</option>
						      <option value="passport">Pasaporte</option>
						    </select>
							<label><i class="zmdi zmdi-file-text zmdi-hc-1-5x" style="color: black;"></i> Tipo de Documento</label>	
						</div>
					</div>
					<div class="input-field col s10 offset-s1">
	          			<i class="prefix zmdi zmdi-account-box-mail"></i>
			          	<input id="identificationDocument" type="text" class="validate" name="identificationDocumnet" required>
			         	<label for="identificationDocument" data-error="wrong" data-success="right">Documento de Identificacón</label>
      				</div> 
					
					<div class="input-field col s10 offset-s1">
	          			<i class="prefix zmdi zmdi-account-box-mail"></i>
			          	<input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
      					<label for="filled-in-box">Filled in</label>
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