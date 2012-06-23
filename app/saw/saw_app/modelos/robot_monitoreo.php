<?php

/*
El robot tiene dos tareas principales:
	1.-Actualizar cada dia la tabla programacion_del_dia, con los valores configurados en la tabla programacion_semanal
	2.-Mantener actualizado el estado de los dispositivos, comparando la hora del servidor con la configuracion de la tabla eventos el dia.
*/
class MonitoreoRobot extends Model{
	
	public function actualizar($forzar=false){
		if ($forzar){
			$dbh=$this->getDb();	
			$sql="UPDATE config SET fecha_actual = 'NULL' WHERE idConfig=1";
			$sth = $dbh->prepare($sql);		
			$res=$sth->execute();
		}
		$this->actualizarProgramacionDiaria(); 
		$this->actualizarEstadoDeDispositivos();
		return true;
	}
	
	function hardware(){
		$dbh=$this->getDb();		
		#----------------------------------------------------
		$sql='SELECT * FROM dispositivos';
		$sth = $dbh->prepare($sql);		
		$sth->execute();
		$dispositivos = $sth->fetchAll(PDO::FETCH_ASSOC);
		
		if ( $dispositivos [0]['estado']=='ON' && $dispositivos [1]['estado']=='ON' && $dispositivos [2]['estado']=='ON'){
			//exec
		}
	}
	
	private function actualizarEstadoDeDispositivos(){	
		//en base a la hora se determina cuales dispositivos deben cambiar de estado
		//despues de haber cambiado el estado a los dispositivos (en la bd), se envian los 
		//comandos necesarios para actualizar el estado del hardware
		
		$dbh=$this->getDb();		
		#----------------------------------------------------
		#	Actualiza la tabla de programacion_del_dia
		#----------------------------------------------------
		
		$sql = 'UPDATE programacion_del_dia SET estado="APAGADO" WHERE estado="ENCENDIDO" AND now() NOT BETWEEN fechaInicio AND  fechaFin';
		$sth = $dbh->prepare($sql);		
		$res=$sth->execute();
		
		if (!$res){
			echo $sql;
			print_r($sth->errorInfo() );
			return false;
		}
		$sql = 'UPDATE programacion_del_dia SET estado="ENCENDIDO" where now() BETWEEN fechaInicio AND  fechaFin AND cancelado!=1';		
		$sth = $dbh->prepare($sql);				
		$res=$sth->execute();
		if (!$res){
			echo $sql;
			print_r($sth->errorInfo() );
			return false;
		}
		
		#----------------------------------------------------
		#	Actualiza la tabla dispositivos
		#----------------------------------------------------
		$sql='UPDATE dispositivos SET estado="OFF" WHERE eventoCancelado != 1';
		$sth = $dbh->prepare($sql);				
		$res=$sth->execute();
		if (!$res){
			echo $sql;
			print_r($sth->errorInfo() );
			return false;
		}
		
		$sql='UPDATE dispositivos SET estado="ON",eventoCancelado=0 WHERE idDispositivo IN (SELECT dispositivoId FROM programacion_del_dia WHERE estado ="ENCENDIDO")';
		$sth = $dbh->prepare($sql);				
		$res=$sth->execute();
		if (!$res){
			echo $sql;
			print_r($sth->errorInfo() );
			return false;
		}
	}
	
	//gestionar programaion diaria
	private function actualizarProgramacionDiaria(){
		$dbh=$this->getDb();		
		#----------------------------------------------------
		$sql='SELECT DATE_FORMAT(now(),"%Y-%m-%d") as fechaNow,fecha_actual fechaActual FROM config limit 0,1';
		$sth = $dbh->prepare($sql);		
		$sth->execute();
		$fechas = $sth->fetchAll(PDO::FETCH_ASSOC);
		
		if ($fechas[0]['fechaNow'] == $fechas[0]['fechaActual']){
			return true;						
		}
		#========================================================================================================================
		#   Llegar a este punto significaa que el dia ya ha cambiado, entonces es necesario actualizar la programacion del dia						
		#========================================================================================================================
		$date = DateTime::CreateFromFormat("Y-m-d",$fechas[0]['fechaNow']);		
		$dia_de_la_semana= $date->format('N');	//1=Lunes...7=Domingo
		
		$dbh->beginTransaction();//startTransaction				
		
		//Se borra el contenido de la tabla programacion_del_dia				
		$sql='TRUNCATE TABLE programacion_del_dia';
		$sth = $dbh->prepare($sql);		
		$sth->execute();
		
		//Actualizo la fecha en la tabla config
		$sql='UPDATE config SET fecha_actual=:fecha WHERE idConfig=1';
		$sth = $dbh->prepare($sql);		
		$sth->bindValue(":fecha",$fechas[0]['fechaNow']);	
		$sth->execute();
		
		//Se agregan de la tabla programacion_semanal, los registros correspondientes al dia de la semana
	
		$sql='INSERT INTO programacion_del_dia (dispositivoId,fechaInicio,fechaFin,cancelado)
		SELECT dispositivoId,CONCAT(DATE_FORMAT("'.$fechas[0]['fechaNow'].'","%Y-%m-%d"), DATE_FORMAT(fechaInicio," %H:%i:%s")) ,CONCAT(DATE_FORMAT("'.$fechas[0]['fechaNow'].'","%Y-%m-%d"), DATE_FORMAT(fechaFin," %H:%i:%s")),cancelado FROM programacion_semanal WHERE dia=:dia';
				
		$sth = $dbh->prepare($sql);		
		$sth->bindValue(':dia',intval($dia_de_la_semana),PDO::PARAM_INT);	
		$res=$sth->execute();
		if (!$res){
			print_r($sth->errorInfo() );
			return false;
		}
//		$sth->debugDumpParams();
		//voalá
		
		$dbh->commit();		
	}
		
}

?>