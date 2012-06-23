<?php

require_once('init.php');
$arrRuta=array();
$absPath=$_SERVER["REQUEST_URI"];

if (isset($_SERVER["REQUEST_URI"])){
	 $arrRuta=explode('/',$_SERVER["REQUEST_URI"]);
}else{
	echo "APP_HOME";exit;
}

define("APP_PATH",'../'.$arrRuta[1].'/'.$arrRuta[2].'/');	//<-----------

unset( $arrRuta[0] );
unset( $arrRuta[1] );
unset( $arrRuta[2] );
$arrRutabkp=array();
foreach($arrRuta as $ruta){
	$arrRutabkp[]=$ruta;
}
$arrRuta=$arrRutabkp;
//===================================================
include(APP_PATH.'config.php');

if (sizeof($arrRuta)==1){
	$arrRuta=array('DefaultController',$arrRuta[0]);
}

//------------------------------
$controladorName=$arrRuta[0];
$accion=$arrRuta[1];
//------------------------------
include APP_PATH.'controladores/'.$controladorName.'.php';
$controller=new $controladorName;
$controller->$accion();

?>
