<?php 
class Layout extends Pagina{
	
	function renderVista(){
		if ( isset($this->vista)){
			$this->vista->render();
		}
	}
	
	function setFooter($footer){
		$this->footer=$footer;
	}
	
	function renderFooter(){
		if ( isset($this->footer)){
			$this->footer->render();
		}else{
			//$this->renderDefaultFooter();
		}
	}
	
	function render($rutaContenido=null){
		include ('main/main.html.php');
	}
}

?>