<?php


class Controlador{

	public function render($vista){
		$vista=$vista.'.html.php';
		//$vista=APP_PATH.'/vistas/'.$vista.'html.php';
		//echo $vista;
		$this->renderVista($vista);
	}

	function getModelObject(){
		if ( !isset($this->model) ){
			$this->model = new Model();
		}
		return $this->model;
	}	
}
?>