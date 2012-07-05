<?php


/**
 * @author cbibriesca
 * @version 1.0
 * @created 05-jul-2012 12:57:49 p.m.
 */
class BasicView
{

	function BasicView()
	{
	}

	function __construct($contenido=null,$nombre=null){
		$this->rutaContenido=$contenido;
		$this->nombre= $nombre;
	}
	
	function render($rutaContenido=null){		
		
		if (!empty($rutaContenido)){
			$this->setRutaContenido($rutaContenido);
		}
		
		if ( !empty($this->rutaContenido) ){			
			include BASE_PATH.'vistas/'.$this->rutaContenido;			
		}	
	}

	

	function setContenido()
	{
	}

	function setRutaContenido()
	{
	}

}
?>