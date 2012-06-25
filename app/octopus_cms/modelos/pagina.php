<?php
class PaginasManager extends Modelo{
	function getPagina($paginaId){
		$sql='SELECT * FROM cms_paginas WHERE id=:paginaId';		
		$db=$this->getDb();
		$sth=$db->prepare($sql);
		$sth->bindValue(':paginaId', $paginaId);
		$res=$sth->execute();	
		#--------------------------------------------------------------------------------------------------------------------------------
		#				REVISAR ERROR TODO: pasar este bloque al nucleo, todavia no se si al modelo o al controlador, ¿o a la vista?
		#--------------------------------------------------------------------------------------------------------------------------------
		if (!$res){
			throw new Exception("Error: sql=".$sql.' .'.$sth->errorInfo());						
			return false;
		}	
		#---------------------------------------------------------------------------------------------------
		$paginas= $sth->fetchAll(PDO::FETCH_ASSOC);			            #   <--eL CONTENIDO ESTA ALMACENADO EN PAGINAS
		#---------------------------------------------------------------------------------------------------
		return $paginas[0];		
	}
}
?>