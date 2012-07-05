<?php 
if (!isset($_SESSION))session_start();

require_once('vista/composite_view/old/vista.php');
require_once('vista/composite_view/old/menu.php');
require_once('vista/composite_view/old/pagina.php');
require_once('modelo.php');
require_once('controlador.php');

spl_autoload_register(function ($clase) {
	echo "Cargar ". $clase . '.php';
	include $clase . '.php';
});
?>