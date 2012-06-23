<?php 
class AdministracionView extends Vista{
	var $nombre="Administracion";
	function render($rutaContenido=null){		
		include ('administracion/administracion.html.php');
	}
	
}

?>