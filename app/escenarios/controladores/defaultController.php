<?php
class DefaultController extends Controlador{
	/*function getNumeros(){
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
	}*/
	function cargarEscena(){		
		$this->renderVista('home.html.php');
	}
	function renderVista($contenido){		
		
		$vistaContenido=new View($contenido);
		#===============================================================================================================================
		$model=new Model();
		$db=$model->getDb();
		#===============================================================================================================================
		#Obtener los datos de la escena
		$escena_id=(empty($_POST['escena_id']) )? 1 : $_POST['escena_id'] ;
		
		$sql='select id,nombre,ruta_imagen FROM panorama_panorama WHERE id=:escena_id';		
		$sth=$db->prepare($sql);		
		$sth->bindParam(':escena_id',$escena_id);
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
		$vistaContenido->escena=$objetos[0];
		#===============================================================================================================================
		#			Obtener los objetos de la base de datos
		#===============================================================================================================================
		$sql='select obj.id,x,y,ruta_imagen,sub_p.subtitulo sub_p, sub_s.subtitulo sub_s, trad_p.ruta_trad trad_p,  trad_s.ruta_trad trad_s
FROM panorama_objetos obj
LEFT JOIN panorama_subtitulos sub_p ON sub_p.fk_objeto = obj.id AND sub_p.fk_idioma=1
LEFT JOIN panorama_subtitulos sub_s ON sub_s.fk_objeto = obj.id AND sub_s.fk_idioma=2
LEFT JOIN panorama_traducciones trad_p ON trad_p.fk_objeto = obj.id AND trad_p.fk_idioma=1
LEFT JOIN panorama_traducciones trad_s ON trad_s.fk_objeto = obj.id AND trad_s.fk_idioma=2
WHERE fk_escena=:escena_id';		
		
		$sth=$db->prepare($sql);		
		$sth->bindParam('escena_id',$escena_id);
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
		#===============================================================================================================================
		#Obtener los datos de la escena
		$escena_id=(empty($_POST['escena_id']) )? 1 : $_POST['escena_id'] ;
		
		$sql='select id,nombre,ruta_imagen FROM panorama_panorama';		
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
		$escenas= $sth->fetchAll(PDO::FETCH_ASSOC);			            #   <--eL CONTENIDO ESTA ALMACENADO EN PAGINAS
		#---------------------------------------------------------------------------------------------------		
		$paginaObj->escena_id=$escena_id;
		$paginaObj->escenas=$escenas;
		#===============================================================================================================================
		
		
		
		$vistaContenido->objetos=$objetos;		
		$paginaObj->asignarSeccion('contenido', $vistaContenido);
		$paginaObj->render();				
	}
}
?>
	