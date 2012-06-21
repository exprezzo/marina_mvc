<?php 

class LoginView extends Vista{
	var $nombre="Login";
	function render($rutaContenido=null){
		include ('login/login.html.php');
	}
	
}

?>