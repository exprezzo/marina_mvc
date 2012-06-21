<?php 
class ProgramacionModel extends Model{

	
	
	public function getProgramacion($idDispositivo, $dia){	
		$dbh=$this->getDb();
		
		$sql='SELECT idEvento id, DATE_FORMAT(fechaInicio,"%H:%i") horaInicio, DATE_FORMAT(fechaFin,"%H:%i") horaFin,cancelado,dispositivoId,dia  FROM programacion_semanal WHERE dia = :dia AND dispositivoId = :idDispositivo';
		
		$sth = $dbh->prepare( $sql );
		$sth->bindValue(":idDispositivo", intval($idDispositivo),PDO::PARAM_INT);				
		$sth->bindValue(":dia", intval($dia),PDO::PARAM_INT);
		$res=$sth->execute();
		
		if (!$res){
			echo "Error: sql=".$sql; //TODO: RESPONDER EN JSON, succes=false y eso;
			print_r($sth->errorInfo() );
			return false;
		}
		$horarios = $sth->fetchAll(PDO::FETCH_ASSOC);		
		return $horarios;			
	}
	 
	/*Esta funcion es invocada por el switch */

	function eliminar($id){
		$dbh=$this->getDb();	
		$sql='DELETE FROM programacion_semanal WHERE idEvento = :idEvento';
		$sth = $dbh->prepare($sql);				
		$sth->bindValue(":idEvento",$id, PDO::PARAM_INT);					
		 		
		$res=$sth->execute();
		
		if (!$res){
			echo "Error: sql=".$sql; //TODO: RESPONDER EN JSON, succes=false y eso
			print_r($sth->errorInfo() );
			return false;
		}
		include 'robot_monitoreo.php';
		$robot=new MonitoreoRobot();
		$robot->actualizar($forzar=true);
	}
	function guardar($id, $dispositivoId, $dia, $horaInicio, $horaFin, $cancelado ){
		$dbh=$this->getDb();
		$date = new DateTime();
		$fecha=$date->format('Y-m-d');
			
		$fechaInicio=$fecha.' '.$horaInicio;			
		$date=DateTime::createFromFormat ('Y-m-d h:i a',$fechaInicio);
		$fechaInicio=$date->format('Y-m-d H:i');
		
		$fechaFin=$fecha.' '.$horaFin;			
		$date=DateTime::createFromFormat ('Y-m-d h:i a',$fechaFin);
		$fechaFin=$date->format('Y-m-d H:i');
		
		if ( empty($id) ){
			//INSERTAR
			$sql='INSERT INTO programacion_semanal SET dispositivoId= :dispositivoId,dia= :dia, fechaInicio= :fechaInicio, fechaFin= :fechaFin, cancelado= :cancelado';
			$sth = $dbh->prepare($sql);	
			
			$sth->bindValue(":dispositivoId",$dispositivoId, PDO::PARAM_INT);					
			$sth->bindValue(":fechaInicio",$fechaInicio,PDO::PARAM_STR);		
			$sth->bindValue(":fechaFin",$fechaFin,PDO::PARAM_STR);
			$sth->bindValue(":cancelado",$cancelado);				
			$sth->bindValue(":dia",$dia);				
		}else{
			//actualizar								
			$sql='UPDATE programacion_semanal SET fechaInicio= :fechaInicio, fechaFin= :fechaFin, cancelado= :cancelado WHERE idEvento= :id';
			$sth = $dbh->prepare($sql);	
			
			
			
			/*$sth->bindValue(":id",$id);			
			$sth->bindValue(":fechaInicio",$fecha.' '.$horaInicio);		
			$sth->bindValue(":fechaFin",$fecha.' '.$horaFin);		
			$sth->bindValue(":cancelado",$cancelado);				*/
			
			$sth->bindValue(":id",$id,PDO::PARAM_INT);			
			$sth->bindValue(":fechaInicio",$fechaInicio,PDO::PARAM_STR);		
			$sth->bindValue(":fechaFin",$fechaFin,PDO::PARAM_STR);		
			$sth->bindValue(":cancelado",$cancelado);				
			
		}
		
		
		$res=$sth->execute();
		
		if (!$res){
			echo "Error: sql=".$sql; //TODO: RESPONDER EN JSON, succes=false y eso
			print_r($sth->errorInfo() );
			return false;
		}
		
		include 'robot_monitoreo.php';
		$robot=new MonitoreoRobot();
		$robot->actualizar($forzar=true);
		return true;
	}
	
	
}

?>