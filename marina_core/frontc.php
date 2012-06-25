<?php
require_once('init.php');

$arrRuta=array();
//echo "<pre>";print_r($_SERVER);echo "</pre>";
if (isset($_SERVER["PATH_INFO"])){	
	 $arrRuta=explode('/',$_SERVER["PATH_INFO"]);
}

//require_once;
//print_r($arrRuta);
$app_path= __DIR__.'/../';


include($app_path.'config.php');
//-------------------------------------------------------------------------------  
//echo "<pre>";print_r($_SERVER);echo "</pre>";
//echo "<pre>";print_r($arrRuta);echo "</pre>";

$numRutas=sizeof($arrRuta);
$back='';
for($i=0; $i<$numRutas-1; $i++){
		$back.='../';
}
define ('RESOURCES_PATH',$back.BASE_PATH );
//echo $back; exit;

echo RESOURCES_PATH.'<br>';
echo BASE_PATH;

#===============================================================
if (sizeof($arrRuta)==2){	
	$controladorName='DefaultController';	
	include BASE_PATH.'controladores/'.$controladorName.'.php';
	$controller=new $controladorName;
	$accion='render';
	$controller->$accion($arrRuta[1]);
	return;
}else if( sizeof($arrRuta)> 2 ){
	$controladorName=$arrRuta[1];
	$accion=$arrRuta[2];	
}

include BASE_PATH.'controladores/'.$controladorName.'.php';
$controller=new $controladorName;

$controller->$accion();
?>
