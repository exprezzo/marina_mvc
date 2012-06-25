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
$app_path= __DIR__.'/../'.$arrRuta[1].'/'.$arrRuta[2].'/';

unset( $arrRuta[0] );
unset( $arrRuta[1] );
unset( $arrRuta[2] );
$arrRutabkp=array();
foreach($arrRuta as $ruta){
	$arrRutabkp[]=$ruta;
}
$arrRuta=$arrRutabkp;
//===================================================
include($app_path.'config.php');

#================
$numRutas=sizeof($arrRuta);
$back='';
for($i=0; $i<$numRutas; $i++){
		$back.='../';
}
define ('RESOURCES_PATH',$back.BASE_PATH );
//echo BASE_PATH; exit;

#===============================================================
if (sizeof($arrRuta)==1){
	$arrRuta=array('DefaultController',$arrRuta[0]);
	
	$controladorName='DefaultController';	
	include BASE_PATH.'controladores/'.$controladorName.'.php';
	$controller=new $controladorName;
	$accion='render';
	$controller->$accion($arrRuta[1]);
	return;
}

//------------------------------
$controladorName=$arrRuta[0];
$accion=$arrRuta[1];
//------------------------------
include $app_path.'controladores/'.$controladorName.'.php';
$controller=new $controladorName;
$controller->$accion();

?>
