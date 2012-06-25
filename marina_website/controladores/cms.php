<?php
class Cms{
	function paginas(){
		global $arrRuta;
		echo "Imprimir pagina: ".$arrRuta[3];
		
	}
	
	function getPagina(){
	
	}
	
	function mostrarPagina($paginaId = null ){
		if ( empty($paginaId) ){
			global $arrRuta;
			$paginaId=$arrRuta[3];
		}
		
	//	echo "Mostrar Pagina: $paginaId.";
		/*		
		las aplicaciones pueden comunicarse entre si a modo de servicio web, 
		pero como están en el mismo servidor, talvez podamos evitar una capa extra. 				
		*/
		//include '../octopus_cms/octopus.php';
		//$octopus= new OctopusCMS();
		//$octopus->getPagina($paginaId);
		$this->renderVista('','home.html.php');
	}
	function renderVista($menuText,$contenido){		
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