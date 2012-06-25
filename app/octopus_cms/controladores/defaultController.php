<?php
class DefaultController extends Controlador{
	
	function render($vista){	
		$this->renderVista('HOME','home.html.php');		
		include BASE_PATH.'modelos/cms_menus.php';
		$menuObj=new CmsMenuModel();
		$menus=$menuObj->getMenus(APP_NAME);
		//print_r($menus);W		
	}
	function renderVista($menuText,$contenido){		
		#===============================================================================================================================
		#			Preparar las vistas
		#===============================================================================================================================
		$paginaObj= new Pagina('index.html.php');											
		$paginaObj->asignarSeccion('contenido', $contenido);
		
		$menu=new Menu('menu.html.php');
		
		$menu->setMenuActivo( $contenido );		
		
		$paginaObj->asignarSeccion('menu', $menu);		 
		
		$paginaObj->render();				
	}
}
?>
	