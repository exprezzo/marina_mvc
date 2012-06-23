<?php
require_once('init.php');
#http://pear.php.net/manual/en/package.networking.net-url-mapper.php
/* 					Front controller 

Analiza la url de la peticion y redirecciona a una funcion de un controlador

El controlador esta dentro de una aplicacion, encontes el asunto es conocer esa ruta.

 hay varios casos posibles:
 
 1.- Que no hayan enviado parametros: lanzaremos un error
 2.- Que hayan mandado solo el nombre del controlador
 3.- Que hayan mandado el controlador y la accion
 4.- Que hayan mandado mas parametros
 
 /home 
	hacia el controlador default, accion home
	
/default/nosotros
	controlador default, accion nosotros
 
*/

$arrRuta=array();
if (isset($_SERVER["PATH_INFO"])){
	 $arrRuta=explode('/',$_SERVER["PATH_INFO"]);
}

//-------------------------------------------------------------------------------
# encontrar la ruta de la aplicacion
//-------------------------------------------------------------------------------

if ($arrRuta[1]=='app'){	
	# encontrar la ruta de la aplicacion
	$app_path='../'.$arrRuta[2].'/';
	$namespace=$arrRuta[2];
	unset($arrRuta[1]);
	unset($arrRuta[2]);
	$arrRutabkp=array();
	foreach($arrRuta as $ruta){
		$arrRutabkp[]=$ruta;
	}
	$arrRuta=$arrRutabkp;
}else{
	$app_path='../';
}

include($app_path.'config.php');
//-------------------------------------------------------------------------------  
if (sizeof($arrRuta)==2){
	$arrRuta=array('','DefaultController',$arrRuta[1]);
}

$controladorName=$arrRuta[1];

include APP_PATH.'controladores/'.$controladorName.'.php';

$className=$controladorName;
$controller=new $className;

$accion=$arrRuta[2];


$controller->$accion();

?>
