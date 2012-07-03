<?php
class DefaultController extends Controlador{
	function getNumeros(){
		#===============================================================================================================================
		#			Obtener los objetos de la base de datos
		#===============================================================================================================================
		$sql='SELECT * FROM panorama_subtitulos ORDER BY fk_idioma';		
		$model=new Model();
		$db=$model->getDb();
		$sth=$db->prepare($sql);		
		$res=$sth->execute();	
		#--------------------------------------------------------------------------------------------------------------------------------
		#				REVISAR ERROR TODO: pasar este bloque al nucleo, todavia no se si al modelo o al controlador, ¿o a la vista?
		#--------------------------------------------------------------------------------------------------------------------------------
		if (!$res){
			throw new Exception("Error: sql=".$sql.' .'.$sth->errorInfo());						
			return false;
		}	
		#---------------------------------------------------------------------------------------------------
		$numeros= $sth->fetchAll(PDO::FETCH_ASSOC);			            #   <--eL CONTENIDO ESTA ALMACENADO EN PAGINAS
		#---------------------------------------------------------------------------------------------------		
		return $numeros;
	}
	
	function renderVista($contenido){		
		#===============================================================================================================================
		#			Obtener los objetos de la base de datos
		#===============================================================================================================================
		$sql='SELECT * FROM panorama_objetos';		
		$model=new Model();
		$db=$model->getDb();
		$sth=$db->prepare($sql);		
		$res=$sth->execute();	
		#--------------------------------------------------------------------------------------------------------------------------------
		#				REVISAR ERROR TODO: pasar este bloque al nucleo, todavia no se si al modelo o al controlador, ¿o a la vista?
		#--------------------------------------------------------------------------------------------------------------------------------
		if (!$res){
			throw new Exception("Error: sql=".$sql.' .'.$sth->errorInfo());						
			return false;
		}	
		#---------------------------------------------------------------------------------------------------
		$objetos= $sth->fetchAll(PDO::FETCH_ASSOC);			            #   <--eL CONTENIDO ESTA ALMACENADO EN PAGINAS
		#---------------------------------------------------------------------------------------------------		
		#===============================================================================================================================
		#			Preparar las vistas
		#===============================================================================================================================
		$paginaObj= new Pagina('index.html.php');													
		
		$vistaContenido=new Vista($contenido);
		$vistaContenido->objetos=$objetos;
		$vistaContenido->numeros = $this->getNumeros();
		/*echo "<pre>";
		print_r($this->getNumeros());exit;
		echo "</pre>";*/
		$paginaObj->asignarSeccion('contenido', $vistaContenido);
		$paginaObj->render();				
	}
}
?>
	