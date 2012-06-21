<?php 

class DefaultView extends Vista{
	var $nombre="Home";
	var $styleSheets;
	
	
	function DefaultView($menuText,$rutaContenido){
		parent::__construct();
		$this->nombre=$menuText;
		$this->rutaContenido=$rutaContenido;		
	}
		
	function render($rutaContenido=null){
		include ($this->rutaContenido);
	}
	
}

?>