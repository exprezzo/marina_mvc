<?php
class Menus{
	function getList(){
		include BASE_PATH.'modelos/cms_menus.php';
		$menuObj=new CmsMenuModel();
		$menus=$menuObj->getMenus(APP_NAME);
		
		$resp= json_encode(array(
			'success'=>true,
			'data'=>$menus
		));
		echo $resp;
	}
	
	function getById(){
		$menuId= $_POST['menuId'];
		include BASE_PATH.'modelos/cms_menus.php';
		$menuObj=new CmsMenuModel();
		$menu=$menuObj->getById($menuId);
		
		echo json_encode(array(
			'success'=>true,
			'data'=>$menu
		));
	}
	
	function save(){
		$id=$_POST['id'];
		$texto=$_POST['texto'];
		$target=$_POST['target'];
		
		include BASE_PATH.'modelos/cms_menus.php';
		$menuObj=new CmsMenuModel();
		$menu=$menuObj->save($id, $texto, $target);
	}
}

?>