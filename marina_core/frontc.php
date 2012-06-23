<?php
require_once('init.php');

$arrRuta=array();
if (isset($_SERVER["REQUEST_URI"])){	
	 $arrRuta=explode('/',$_SERVER["REQUEST_URI"]);
}

//print_r($arrRuta);
$app_path='../';


include($app_path.'config.php');
//-------------------------------------------------------------------------------  
if (sizeof($arrRuta)==2){	
	$controladorName='DefaultController';
	include APP_PATH.'controladores/'.$controladorName.'.php';
	$controller=new $controladorName;
	$accion='render';
	$controller->$accion($arrRuta[1]);
	return;
}

$controladorName=$arrRuta[0];
include APP_PATH.'controladores/'.$controladorName.'.php';
$controller=new $controladorName;

$accion=$arrRuta[2];


$controller->$accion();

?>
