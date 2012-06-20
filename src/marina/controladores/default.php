<?php

class DefaultController extends Controlador{
		
	function home($rutaContenido=null ){
		$this->renderVista('HOME','default/home.html.php');				
	}
	
	function download($rutaContenido=null ){
		$this->renderVista('DOWNLOAD','default/download.html.php');				
	}
	
	function docs($rutaContenido=null ){
		$this->renderVista('DOCS','default/docs.html.php');				
	}
	
	function contact($rutaContenido=null ){
		$this->renderVista('CONTACT','default/contact.html.php');				
	}
	
	//funcion generica para cargar vistas
	function render(){
	
	}
		
	private function renderVista($menuText,$contenido){		
		#===============================================================================================================================
		#			Preparar las vistas
		#===============================================================================================================================
		$paginaObj= new Pagina('layout.html.php');								
		$paginaObj->render();
	}
}
?>