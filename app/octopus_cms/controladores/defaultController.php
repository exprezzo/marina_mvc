<?php
class DefaultController extends Controlador{
	
	function render($vista){
		
		if ( !isset($_SESSION['DB_NAME']) ){
			$this->renderVista('login.html.php');		
			return;
		}
		
		$this->renderVista('home.html.php');		
		include BASE_PATH.'modelos/cms_menus.php';
		$menuObj=new CmsMenuModel();
		$menus=$menuObj->getMenus(APP_NAME);
		//print_r($menus);W		
	}
	
	function seleccionarEmpresa(){
		$appName=$_POST['app_name'];
		$_SESSION['DB_NAME']=$appName;
		
		
		header('Location: /app/octopus_cms');
	}
	
	function renderVista($contenido){		
		#===============================================================================================================================
		#			Preparar las vistas
		#===============================================================================================================================
		$paginaObj= new Pagina('layout.html.php');											
		$paginaObj->asignarSeccion('contenido', $contenido);
		
		$menu=new Menu('menu.html.php');
		
		$menu->setMenuActivo( $contenido );		
		
		$paginaObj->asignarSeccion('menu', $menu);		 
		
		$paginaObj->render();				
	}
}
?>
	