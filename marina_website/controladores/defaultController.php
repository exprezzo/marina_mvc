<?php
//class DefaultController extends Controlador{
class DefaultController{			
	//funcion generica para cargar vistas
	
	public function home(){
		$vista='home.html.php';
		//$vista=APP_PATH.'/vistas/'.$vista.'html.php';
		//echo $vista;
		$this->renderVista($vista);
	}
	
	public function render($vista){
		$vista=$vista.'.html.php';
		//$vista=APP_PATH.'/vistas/'.$vista.'html.php';
		//echo $vista;
		$this->renderVista($vista);
	}
	
	public function crear_app(){
		if ( empty($_REQUEST['nombre'] ) ){
			//echo "Escriba el nombre de la aplicacion";
			return;
		}
		include ('funciones/crear_app.php');
		$nombreApp=$_REQUEST['nombre'];		
		crear_app('../app',$nombreApp);		
		header('Location: /aplicaciones');
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