<?php
require_once('init.php');
#http://pear.php.net/manual/en/package.networking.net-url-mapper.php
/* 					Front controller 

Analiza la url de la peticion y redirecciona a una funcion de un controlador

 hay varios casos posibles:
 
 1.- Que no hayan enviado parametros: lanzaremos un error
 2.- Que hayan mandado solo el nombre del controlador
 3.- Que hayan mandado el controlador y la accion
 4.- Que hayan mandado mas parametros
 
*/

$arrRuta=array();
if (isset($_SERVER["PATH_INFO"])){
	 $arrRuta=explode('/',$_SERVER["PATH_INFO"]);
}
 
if (sizeof($arrRuta)==2){
	$arrRuta=array('','Default',$arrRuta[1]);
}

$controladorName=$arrRuta[1];
include APP_PATH.'controladores/'.$controladorName.'.php';
$className=$controladorName.'Controller';
$controller=new $className;

$accion=$arrRuta[2];
$controller->$accion();

?>
