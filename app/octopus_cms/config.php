<?php
#=================================================================
#
#=================================================================

define ('BASE_PATH','../app/octopus_cms/');
define("APP_NAME","octopus_cms");


define("MZ_TEMA","/index.html.php");
define("HOST","localhost");



if ( isset( $_SESSION['DB_NAME'] )){
	define("DB_NAME",$_SESSION['DB_NAME']);
}
//define("DB_NAME","mazatleca");
//
?>