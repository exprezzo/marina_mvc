<?php 


class Vista{
	/*
	$nombre: Es el identificador de la vista, deberia ser unico, usamos un nombre como Home, Index, Nosotros, Contacto. Al mostrarse dentro de una pagina,
	la pagina podria usar esta variable para mostrar el titulo en el navegador u otras acciones...
	*/
	var  $nombre="";	
	
	/*Ruta al archivo php que contiene el codigo para pintar la vista*/
	var $rutaContenido='';
	
	//Hojas de estilo que se incluir�n en el header
	var $styleSheets=array();
	
	//Archivos javascript que se incluir�n en el header
	var $javascripts=array();
	
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
	
	
	
	function setRutaContenido($ruta){
		if (!empty($contenido) ) $this->rutaContenido=$contenido;
		
		/*
		//Verificar que el archivo existe;
		//if (file_exists($ruta) ){
		
		}
		else{
		
		}
		
		*/
		
		$this->rutaContenido=$ruta;
	}
	
	function getRutaContenido(){
		return $this->rutaContenido;
	}
	
}
?>