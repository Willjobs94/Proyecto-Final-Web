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
					<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
			      	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
				    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
			      	<script type="text/javascript" src="js/materialize.min.js"></script>
			      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			    </head>
			    <body>
				<div class="navbar-fixed">
			    <nav>
			      <div class="nav-wrapper">
			        <a href="#!" class="brand-logo">Logo</a>
			        <ul class="right hide-on-med-and-down">
			          <li><a href="sass.html">Sass</a></li>
			          <li><a href="badges.html">Components</a></li>
			        </ul>
			      </div>
			    </nav>
			  </div>
			 
			    </body>
			  </html>
			 <?php 
		}
	}
	?>