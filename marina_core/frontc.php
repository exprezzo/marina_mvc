<?php
require_once('init.php');

$arrRuta=array();
//echo "<pre>";print_r($_SERVER);echo "</pre>";
if (isset($_SERVER["PATH_INFO"])){	
	 $arrRuta=explode('/',$_SERVER["PATH_INFO"]);
}

//print_r($arrRuta);
$app_path='../';


include($app_path.'config.php');
//-------------------------------------------------------------------------------  
//echo "<pre>";print_r($arrRuta);echo "</pre>";
if (sizeof($arrRuta)==2){	
	$controladorName='DefaultController';
	include APP_PATH.'controladores/'.$controladorName.'.php';
	$controller=new $controladorName;
	$accion='render';
	$controller->$accion($arrRuta[1]);
	return;
}else if( sizeof($arrRuta)==3 ){
	$controladorName=$arrRuta[1];
	$accion=$arrRuta[2];
}


include APP_PATH.'controladores/'.$controladorName.'.php';
$controller=new $controladorName;




$controller->$accion();

?>
