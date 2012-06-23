<?php 
class MonitoreoView extends Vista{
	
	var $nombre="Monitoreo";	//Usado por primera en el menu principal, para marcar el elemento del menu que pertenece a la pagina activa
	var $rutaContenido='monitoreo/monitoreo.html.php';
	
	function getNombre(){
		return $this->nombre;
	}
	
	#================================================================================================================================================================
	#	imprime_tarjeta_de_dispostivo: Imprime el html que muestra la tarjeta con el estado del dispositivo y botones de accion sobre el dispositivo.
	#	Paámetros:
	#   $id_dispositivo: identificador del dispositivo a mostrar.
	#================================================================================================================================================================
	private function render_tarjeta_de_dispositivo($id_dispositivo){
		include('monitoreo/tarjeta_de_dispositivo.html.php'); 
	}
	
	#================================================================================================================================================================
	#	render: Incluye el html que forma a la página de monitoreo.
	#================================================================================================================================================================	
	function render($rutaContenido=null){		
		include('monitoreo/monitoreo.html.php'); 
	}	
}
?>