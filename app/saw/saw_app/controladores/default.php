<?php
class DefaultController extends Controlador{
	
	function nosotros(){					
		$this->renderVista('Nosotros','default/nosotros.html.php');
	}
			
	function home($rutaContenido=null ){				
		$this->renderVista('Home','default/home.html.php');				
	}
	
	function contacto(){							
		$this->renderVista('Contacto','default/contacto.html.php');		
	}
	
	private function renderVista($menuText,$contenido){
		require_once('../saw_app/vistas/default_view.php');		
		$pagina= new Layout();
		$vista=new DefaultView($menuText,$contenido);
		
		$pagina->setSeccion('contenido',$vista);		
		$pagina->render();
	}
}
?>