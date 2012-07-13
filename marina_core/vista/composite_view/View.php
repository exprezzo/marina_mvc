<?php
require_once ('BasicView.php');

/**
 * @author cbibriesca
 * @version 1.0
 * @created 05-jul-2012 12:57:49 p.m.
 */
class View extends BasicView
{
	
	function getNombre(){
		return $this->nombre;
	}
	
	function setNombre($nombre){
		//verificar que el nombre sea una cadena
		if (is_string($nombre)){
			$this->nombre=$nombre;
		}else{
			throw new Exception("Debe establecer una cadena para el nombre");
		}		
	}

}
?>