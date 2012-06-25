<?php 
if (!isset($_SESSION))session_start();

require_once('composite_view/vista.php');
require_once('composite_view/menu.php');
require_once('composite_view/pagina.php');
require_once('modelo.php');
require_once('controlador.php');

spl_autoload_register(function ($clase) {
	echo "Cargar ". $clase . '.php';
	include $clase . '.php';
});
?>