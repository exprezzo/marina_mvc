<?php
class CmsMenuModel extends Model{
	function getMenus(){
		$sql='SELECT * FROM cms_menus';
		$db=$this->getDb();
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
		$menus= $sth->fetchAll(PDO::FETCH_ASSOC);			            #   <--eL CONTENIDO ESTA ALMACENADO EN PAGINAS
		#---------------------------------------------------------------------------------------------------
		return $menus;		
	}
	
	function getById($menuId){
		$sql='SELECT * FROM cms_menus WHERE id=:menuId';
		$db=$this->getDb();
		$sth=$db->prepare($sql);
		$sth->bindValue(':menuId', $menuId);
		$res=$sth->execute();	
		#--------------------------------------------------------------------------------------------------------------------------------
		#				REVISAR ERROR TODO: pasar este bloque al nucleo, todavia no se si al modelo o al controlador, ¿o a la vista?
		#--------------------------------------------------------------------------------------------------------------------------------
		if (!$res){
			throw new Exception("Error: sql=".$sql.' .'.$sth->errorInfo());						
			return false;
		}	
		#---------------------------------------------------------------------------------------------------
		$menus= $sth->fetchAll(PDO::FETCH_ASSOC);			            #   <--eL CONTENIDO ESTA ALMACENADO EN PAGINAS
		#---------------------------------------------------------------------------------------------------
		return $menus[0];		
	}
	
	function save($id, $texto, $target){
		if ( empty($id) ){
			$sql='INSERT INTO cms_menus SET id=:menuId, texto=:texto, target=:target';
		}else {
			$sql='UPDATE cms_menus SET texto=:texto, target=:target WHERE id=:menuId';
		}
		
		$db=$this->getDb();
		$sth=$db->prepare($sql);
		$sth->bindValue(':menuId', $id);
		$sth->bindValue(':texto', $texto);
		$sth->bindValue(':target', $target);
		$res=$sth->execute();	
		#--------------------------------------------------------------------------------------------------------------------------------
		#				REVISAR ERROR TODO: pasar este bloque al nucleo, todavia no se si al modelo o al controlador, ¿o a la vista?
		#--------------------------------------------------------------------------------------------------------------------------------
		if (!$res){
			throw new Exception("Error: sql=".$sql.' .'.$sth->errorInfo());						
			return false;
		}	
		#---------------------------------------------------------------------------------------------------
		$menus= $sth->fetchAll(PDO::FETCH_ASSOC);			            #   <--eL CONTENIDO ESTA ALMACENADO EN PAGINAS
		#---------------------------------------------------------------------------------------------------
		return $menus[0];		
	}

}
?>
