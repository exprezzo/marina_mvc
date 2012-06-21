<?php 
class MonitoreoController extends Controlador{
	
	function render(){
		if(!isset($_SESSION['username']))
		{
				require_once('../saw_app/vistas/login_view.php');
				$tema= new Layout();			//Layout
				$vista=new LoginView();
				$tema->setSeccion('contenido',$vista);

				$tema->render();
				return true;
		}
		require_once('../saw_app/vistas/monitoreo_view.php');
		$tema= new Layout();
		$vista=new MonitoreoView();
		$tema->setSeccion('contenido',$vista);

		$tema->render();
	}
	
	function getModelObject(){
		require_once('../saw_app/modelos/monitoreo_model.php');
		if ( !isset($this->modelObject) ){
			
			$this->modelObject=new monitoreoModel();
		}
		return $this->modelObject;
	}
	
	/*  Devuelve el estado de todos los aparatos, para ser usada con ajax */
	function getDispositivos(){
		$model=$this->getModelObject();		
		$estados=$model->getEstadoDeDispositivos();

		$dispositivos=array(
			'data'=>$estados,
			'success'=>true
		);
		echo json_encode( $dispositivos );
	}
	
	function getHorarios(){
		if ( empty( $_POST['idDispositivo']) ){
			$data=array();
		}else{
						
			$fecha=time();
			$idDispositivo=$_POST['idDispositivo'];
			
			$model=$this->getModelObject();
			$data=$model->getHorariosDelDia($idDispositivo, $fecha);
			
		}
		
		//==================================================
		//  Este bloque debe ejectutarse en una tarea programada, mientas tanto...
		//==================================================
		include  ('../saw_app/modelos/robot_monitoreo.php');
		$robotMonitoreo=new MonitoreoRobot();
		$robotMonitoreo->actualizar();
		//==================================================
		$dispositivos=array(
			'data'=>$data,
			'success'=>true
		);
		echo json_encode( $dispositivos );
	}
	/* Este hará un redirect al controlador de administracion */
	function configurarAula($aulaId){
	
	}
	
	//Enciende el dispositivo, cancelando el evento configurado para el rango de tiempo que envuelve al instante en el que se reaiza la llamada
	function encenderDispositivo(){
		$model=$this->getModelObject();
		
		$idDispositivo=$_POST['idDispositivo'];
		$res1=$model->cancelarEventoActivo($idDispositivo,'ENCENDIDO');		
		if (!$res1){
			echo "error apagando";
		}
		$res2=$model->cambiarEstadoAlDispositivo($idDispositivo, 'ON');
		if (!$res2){
			echo "error apagando dispositivo";
		}
		if ($res1 && $res2){
			 echo "OK" ;
		}else{
			echo "ERROR" ;
		}
	}
	
	/* Para ser usado con ajax  */
	function apagarDispositivo(){
		$model=$this->getModelObject();
		
		$idDispositivo=$_POST['idDispositivo'];
		$res1=$model->cancelarEventoActivo($idDispositivo,'APAGADO');		
		if (!$res1){
			echo "error apagando dispositivo";
		}
		$res2=$model->cambiarEstadoAlDispositivo($idDispositivo, 'OFF');
		if (!$res2){
			echo "error apagando dispositivo";
		}
		if ($res1 && $res2){
			 echo "OK" ;
		}else{
			echo "ERROR" ;
		}
	}
}

?>