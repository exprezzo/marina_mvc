<?php
class DefaultController extends Controlador{

	function renderVista($contenido){		
		#===============================================================================================================================
		#			Preparar las vistas
		#===============================================================================================================================
		$paginaObj= new Pagina('index.html.php');											
		$paginaObj->asignarSeccion('contenido', $contenido);
		
		$paginaObj->render();				
	}
}
?>
	