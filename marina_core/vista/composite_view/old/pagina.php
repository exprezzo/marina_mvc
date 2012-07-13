<?php 


class Pagina extends View{
	var $nombre="Main";
	var $vistas=array();
	var $nombreVistaActiva=''; //Esta variable la usaremos para marcar el menu activo y para el titulo de la pagina (el tag <title> dentro del <head> )
	var $tema;
	
	function __construct($contenido=null){		
		if (isset($contenido)){
			$this->rutaContenido=$contenido;
		}else{
			$this->rutaContenido=MZ_TEMA;
		}
	}
	
	function asignarSeccion($seccion, $vista){
			return $this->setSeccion($seccion, $vista);
	}
	/* Como la página está compuesta por diferentes secciones, aqui se agrega cada sección  */
	function setSeccion($seccion, $vista){
		
		if ( $vista instanceof View){	
			//Si la vista es válida, se agrega
			$this->vistas[$seccion]=$vista;					
		}else if( is_string( $vista ) ){
			//verificar que exista el archivo que correspone a la vista.
			
			$vista = new View( $vista );
			
			$this->vistas[$seccion] = $vista;
		}else{
			
			/* en caso de que la vista sea incorrecta, ¿Que haremos?
			en modo development, mostramos mensaje de error, en modo produccion solo un return false y log del error		*/
			throw new Exception("La vista que intenta agregar es incorrecta");
			return false;
		}
				
		if ($seccion=='contenido'){
			$this->nombreVistaActiva=$vista->getNombre();
		}
		
		/*
			En la funcion render() de la pagina, se deben incluir en el header, los archivos js y css incluidos por la vista.
			¿Que estrategia usaremos?	
			Leer el arreglo styleSheets y agregar cada elemento a $this->styleSheets
			Leer el arreglo javascripts y agregar cada elemento a $this->styleSheets
			en el template de la pagina, en el header invocar la funcion incluirHojasDeEstilos y incluirJavascripts. volalá
		*/
		return true;
	}

	function mostrarSeccion($seccion){
		return $this->renderSeccion($seccion);
	}
	
	function renderSeccion($seccion){		
		if ( isset($this->vistas[$seccion]) && $this->vistas[$seccion] instanceof View){	
			//Si la vista es válida, se muestra			
			$this->vistas[$seccion]->render();
			return true;
		}
		/*	¿Que haremos en caso de que la vista no sea válida?
		en modo development, mostramos mensaje de error, en modo produccion solo un return false y log del error		
		*/
		echo "<div style='color:red;'>La Seccion <strong>$seccion</strong> no puede mostrarse.</div>";	//Mostraremos un mensaje de error en esa seccion 
		return false;
	}

	/**/
	private function incluirHojasDeEstilos(){
		foreach($this->javascripts as $js){
			echo $js;
		}
	}
	
	private function incluirJavascripts(){
		foreach($this->styleSheets as $estilo){
			echo $estilo;
		}
	}
	
	#================================================================================
	#				MENU
	#================================================================================
	function setMenuActivo($menu){
		$this->menuActivo=$menu;
	}
	function getMenuActivo(){
		return $this->menuActivo;
	}
	
	function getMenuState($nombreMenu){
	
		if ( $this->getMenuActivo() == $nombreMenu ){			
			echo "selected";			
		}else{
			echo "unselected";
		}
	}
}

?>