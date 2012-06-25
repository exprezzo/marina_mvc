<?php
class Cms extends Controlador{

	function mostrarPagina($codPagina){
		$this->renderVistaCms($codPagina);
	}
	
	function renderVistaCms($contenido){
		#===============================================================================================================================
		#			Preparar las vistas
		#===============================================================================================================================
		include '../app/octopus_cms/octopus_app.php';
		$octopus=new OctopusApp();								
		$vista=$octopus->getVista($codPagina);		
		
		$paginaObj= new Pagina('index.html.php');
		$paginaObj->asignarSeccion('contenido', $vista);
	
		//-----------------------------------------------------
		$menu=new Menu('menu.cms.html.php');		 		
		$menus=$octopus->getMenus();
		$menu->menus=$menus;
		//--
		$menu->setMenuActivo( $contenido.'.html.php' );				
		$paginaObj->asignarSeccion('menu', $menu);		 
		//-----------------------------------------------------
		$paginaObj->render();				
	}
}
?>