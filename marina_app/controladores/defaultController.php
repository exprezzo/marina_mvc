<?php


//class DefaultController extends Controlador{
class DefaultController{
		
	function home($rutaContenido=null ){
		
		$this->renderVista('HOME','home.html.php');				
	}
	
	function ejemplos($rutaContenido=null ){
		$this->renderVista('CONTACT','ejemplos.html.php');				
	}
	
	function download($rutaContenido=null ){
		$this->renderVista('DOWNLOAD','download.html.php');				
	}
	
	function docs($rutaContenido=null ){
		$this->renderVista('DOCS','docs.html.php');				
	}
	
	function contacto($rutaContenido=null ){
		$this->renderVista('CONTACT','contact.html.php');				
	}
	
	//funcion generica para cargar vistas
	public function render($vista){
	
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