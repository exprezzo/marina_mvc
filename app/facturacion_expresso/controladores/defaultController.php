<?php
class DefaultController extends Controlador{
	
	function home(){
		$this->renderVista('HOME','home.html.php');				
	}
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
		$paginaObj= new Pagina('index.html.php');											
		$paginaObj->asignarSeccion('contenido', $contenido);
	
		//-----------------------------------------------------
		$menu=new Menu('menu.cms.html.php');		 
		include '../app/octopus_cms/octopus_app.php';
		$octopus=new OctopusApp();
		$menus=$octopus->getMenus();
		$menu->menus=$menus;
		//--
		$menu->setMenuActivo( $contenido );				
		$paginaObj->asignarSeccion('menu', $menu);		 
		//-----------------------------------------------------
		$paginaObj->render();				
	}	
}
?>

	