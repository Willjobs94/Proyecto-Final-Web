<?php
	$url = 'http://' . $_SERVER['HTTP_HOST'];            
	$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); 
	$url .= '/layout.php';           
	header('Location: ' . $url, true, 302);
	?>