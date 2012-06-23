<?php 
class ProgramacionController extends Controlador{
	
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
		require_once('../saw_app/modelos/programacion_model.php');
		if ( !isset($this->modelObject) ){
			
			$this->modelObject=new ProgramacionModel();
		}
		return $this->modelObject;
	}
	
	/*  Devuelve el estado de todos los aparatos, para ser usada con ajax    */
	
	function getHorarios(){		
	
		if ( empty( $_POST['idDispositivo']) ){
			
			$data=array();
		}else{
			
			$dia=$_POST['dia'];
			$idDispositivo=$_POST['idDispositivo'];
			
			$model=$this->getModelObject();
			$data=$model->getProgramacion($idDispositivo, $dia);
			
		}		
				
		$dispositivos=array(
			'data'=>$data,
			'success'=>true
		);
		echo json_encode( $dispositivos );
	}
	function guardar(){
		
		$dia=$_POST['dia'];
		$dispositivoId=$_POST['dispositivoId'];
		$horaFin=$_POST['horaFin'];
		$horaInicio=$_POST['horaInicio'];
		$id=$_POST['id'];
		$cancelado=isset($_POST['cancelado'])? 1 : 0;
		$model=$this->getModelObject();
		$model->guardar($id, $dispositivoId, $dia, $horaInicio, $horaFin, $cancelado );
	}
	
	function eliminar(){
		
		$id=$_POST['id'];
		$model=$this->getModelObject();
		$model->eliminar($id);
	}
}

?>