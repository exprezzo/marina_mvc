<?php 



class Menu extends Vista{
	var $menuActivo;
	function setMenuActivo($menu){
		$this->menuActivo=$menu;
	}
	function getMenuActivo(){
		return $this->menuActivo;
	}
	
	function getMenuState($nombreMenu){
		
		if ( strtoupper($this->getMenuActivo()) == strtoupper($nombreMenu) ){			
			echo MENU_ACTIVE_CLASS;			
		}else{
			echo MENU_INACTIVE_CLASS;
		}
	}
}
?>