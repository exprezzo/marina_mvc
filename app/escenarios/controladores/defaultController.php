<?php
class DefaultController extends Controlador{
	
	function renderVista($contenido){		
		#===============================================================================================================================
		#			Obtener los objetos de la base de datos
		#===============================================================================================================================
		$sql='SELECT * FROM esc_objecto';		
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
		$paginaObj->asignarSeccion('contenido', $vistaContenido);
		$paginaObj->render();				
	}
}
?>
	