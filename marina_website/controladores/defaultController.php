<?php


//class DefaultController extends Controlador{
class DefaultController{			
	//funcion generica para cargar vistas
	public function render($vista){
		$vista=$vista.'.html.php';
		//$vista=APP_PATH.'/vistas/'.$vista.'html.php';
		//echo $vista;
		$this->renderVista('',$vista);
	}
		
	function renderVista($menuText,$contenido){		
		#===============================================================================================================================
		#			Preparar las vistas
		#===============================================================================================================================
		$paginaObj= new Pagina('layout.html.php');								
		
		
		$paginaObj->asignarSeccion('contenido', $contenido);
		
		$paginaObj->render();
		
		
	}
}
?>