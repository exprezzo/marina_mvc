<?php
class OctopusApp{
	function getMenus(){
		$BASE_PATH='../app/octopus_cms/';
		include $BASE_PATH.'modelos/cms_menus.php';
		$menuObj=new CmsMenuModel();
		$menus=$menuObj->getMenus();		
		return $menus;
	}
}
?>