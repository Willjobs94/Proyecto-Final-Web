<?php
	$layout = new layout();
	class layout 
	{
		function __construct()
		{
			?>
			<!doctype html>
			<html>
				<head>
					<link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
					<link rel="stylesheet" href="../css/material-design-iconic-font.min.css">
					<link rel="stylesheet" href="../css/style.css">
				    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
			      	<script type="text/javascript" src="../js/materialize.min.js"></script>
					 <script type="text/javascript" src="../js/app.js"></script>
			      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			    </head>
			    <body>
					<div class="navbar-fixed">
						<nav class="light-blue ">
			    			<div class="nav-wrapper container">
				      				<a href="index.php" class="brand-logo waves-effect">Portal de Empleo</a>
				      				<a href="#" data-activates="mobile-nav" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				  				<ul class="right hide-on-med-and-down">
								 	<li class="waves-effect"><a href="/views/login.php"><i class="zmdi zmdi-account-circle"><label class="navbar-button"> Iniciar Sesión</label></i></a></li>
								 	<li class="waves-effect">
										 <a href="/views/registerCandidate.php"><i class="zmdi zmdi-plus-circle-o"><label class="navbar-button"> Registrar</label></i></a>
										 <div class="input-field col s10 offset-s1">			  
		          				<select name="tipo_documento" id="documentType">
							      <option value="cedula">Cédula</option>
							      <option value="pasaporte">Pasaporte</option>
							   	</select>
								<label for="documentType"><i class="zmdi zmdi-file-text zmdi-hc-1-5x" style="color: black;"></i> Tipo de Documento</label>	
							</div>
									 </li>
										 
								</ul>
						      	<ul class="side-nav" id="mobile-nav">
						        	<li><a href="/views/login.php"><i class="zmdi zmdi-account-circle"></i>Iniciar Sesi&oacute;n</a></li>
						        	<li><a href="/views/registerCandidate.php"><i class="zmdi zmdi-account-circle"></i> Registrar</a></li>
						      	</ul>
			    			</div>
			  			</nav>
					 </div>
					<div class ="container">
			<?php	
			  function __destruct(){
			?>
			  
			  
					<div>
				</body>
			</html>
			<?php
			 }
		}
	}
	?>