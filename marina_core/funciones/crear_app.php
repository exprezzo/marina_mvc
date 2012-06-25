<?php
//revisar que la carpeta no exista.
function crear_app($rutaBase, $nombre_app){
	$filename=$rutaBase.'/'.$nombre_app;

	if ( !file_exists ( $rutaBase) ){				
		mkdir ($rutaBase);
	}

	if ( file_exists ( $filename ) ){
		//echo "La carpeta ya existe, proceso abortado.\n";
		return false;
		exit;
	}else{
		
		mkdir ($filename);
		crearConfig($filename);
		crearIndex($filename);
		crearHtaccess($filename);
		
		mkdir($filename.'\controladores');
		file_put_contents($filename.'\controladores\readme.txt', '');
		crearControladorDefault($filename.'\controladores',$nombre_app);
		
		mkdir($filename.'\modelos');
		file_put_contents($filename.'\modelos\readme.txt', '');
		
		mkdir($filename.'\vistas');
		file_put_contents($filename.'\vistas\readme.txt', '');		
		crearHome($filename.'\vistas');
		
		mkdir($filename.'\css');
		crearLayout($filename.'/vistas/',$nombre_app);
		
		file_put_contents($filename.'\css\readme.txt', '');
		mkdir($filename.'\js');
		file_put_contents($filename.'\js\readme.txt', '');
		mkdir($filename.'\imagenes');
		file_put_contents($filename.'\imagenes\readme.txt', '');
		mkdir($filename.'\dev_docs');
		file_put_contents($filename.'\dev_docs\readme.txt', '');
		
		return true;
	}
}

function crearConfig($ruta){
	$contenido='<?php
#=================================================================
#
#=================================================================

define("BASE_PATH","'.$ruta.'/");
define("MZ_TEMA","/index.html.php");

define("HOST","localhost");
define("DB_NAME","marina_db");
?>';
	file_put_contents($ruta.'\config.php', $contenido);

}

function crearHtaccess($ruta){
	$contenido="<IfModule mod_rewrite.c>
	
	# Enrutamiento mediante htacces de apache	
	# ¿Se podran agrupar rutas por archivos e incluir esos archivos aqiu?
	
    RewriteEngine On
	  	
	RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ ../marina_core/frontc.php/app/".$ruta."/$1 [L]
	ErrorDocument 500 error500.html
</IfModule>";
	file_put_contents($ruta.'\.htaccess', $contenido);
}

function crearControladorDefault($ruta,$proyectName){
	$contenido='<?php
class DefaultController extends Controlador{
	
	function home(){
		$this->renderVista(\'HOME\',\'home.html.php\');				
	}
}
?>
	';
	file_put_contents($ruta.'\defaultController.php', $contenido);
}

function crearIndex($ruta){
	$contenido='<?php
header("Location: home");		
?>';
	file_put_contents($ruta.'\index.php', $contenido);
}

function crearLayout($ruta,$proyectName){
	$contenido='<html>
	<head></head>
	<body>
		<h1>'.$proyectName.'</h1>
		<?php $this->renderSeccion(\'contenido\'); ?>
		<a href="/">Ir al Home</a>
	</body>
</html>';
	file_put_contents($ruta.'index.html.php', $contenido);
}

function crearHome($ruta){
	$contenido='<h1>Este es el contenido del home</h1>';
	file_put_contents($ruta.'/home.html.php', $contenido);
}

?>