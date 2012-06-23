<?php 
class MonitoreoModel extends Model{

	public function getEstadoDeDispositivos(){		
		$sql = 'SELECT *,now() as fecha FROM dispositivos';
		$dbh=$this->getDb();
		$sth = $dbh->prepare($sql);
		$sth->execute();
		$dispositivos = $sth->fetchAll(PDO::FETCH_ASSOC);
		return $dispositivos;		
	}	
	
	public function getHorariosDelDia($idDispositivo, $fecha){
		
		$dbh=$this->getDb();
		
		$sql = 'SELECT  idEvento,DATE_FORMAT(fechaInicio, "%H:%i:%s" ) as horaInicio,DATE_FORMAT(fechaFin, "%H:%i:%s" )  as horaFin,estado,cancelado as evento
		FROM programacion_del_dia where dispositivoId =:idDispositivo';			
		$sth = $dbh->prepare($sql);
		$sth->bindValue(":idDispositivo",$idDispositivo);				
		$sth->execute();
		
		$horarios = $sth->fetchAll(PDO::FETCH_ASSOC);
		
		
		/**/
		
		return $horarios;			
	}
	 
	/*Esta funcion es invocada por el switch */
	public function cancelarEventoActivo($dispositivoId,$estado='APAGADO'){
		$dbh=$this->getDb();
		
		$sql = 'UPDATE programacion_del_dia SET cancelado=1, estado=:estado where dispositivoId = :dispositivoId AND now() BETWEEN fechaInicio AND  fechaFin ';		
		$sth = $dbh->prepare($sql);	
		$sth->bindValue(":dispositivoId",$dispositivoId);						
		$sth->bindValue(":estado",$estado);
		$res=$sth->execute();
		
		if (!$res){
			echo "Error: sql=".$sql; //TODO: RESPONDER EN JSON, succes=false y eso;
			print_r($sth->errorInfo() );
			return false;
		}
		
		if ( !empty($error[2]) ){
		
			throw new Exception('Error en la capa de datos');

		}
		return true;
	}
	
	public function cambiarEstadoAlDispositivo($idDispositivo, $estado){
		$dbh=$this->getDb();
		
		$sql='UPDATE dispositivos SET estado=:estado, eventoCancelado=1 WHERE idDispositivo = :idDispositivo';
		
		$sth = $dbh->prepare($sql);	
		$sth->bindValue(":estado",$estado);						
		$sth->bindValue(":idDispositivo",$idDispositivo);		
		$res=$sth->execute();
		
		if (!$res){
			echo "Error: sql=".$sql; //TODO: RESPONDER EN JSON, succes=false y eso
			print_r($sth->errorInfo() );
			return false;
		}
		return true;
		
	}
	
}

?>