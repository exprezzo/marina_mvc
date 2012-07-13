<?php
//require_once ('View.php');

/**
 * @author cbibriesca
 * @version 1.0
 * @created 05-jul-2012 12:40:48 p.m.
 */
class Menu extends View
{
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