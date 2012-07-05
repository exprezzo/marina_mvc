<style type="text/css">
.escena{
	border-radius: 20px 20px 20px 20px;
	background: none repeat scroll 0 0 #E9EAEE;
    border: 2px solid #FFFFFF;
    box-shadow: 1px 2px 6px rgba(0, 0, 0, 0.5);
    margin: 0 auto;
   // padding: 44px 40px 20px;
    text-align: center;
    width: 1200px;
	height: 460px;
	//position: absolute;
	margin-top:50px;
}

.obj_escena{
	background: none repeat scroll 0 0 black;
	width: 40px;
	height: 40px;
-webkit-border-radius: 25px;
-moz-border-radius: 25px;
border-radius: 25px;
	position:absolute;
}

</style>

<link rel="stylesheet" type="text/css" href="http://localhost/ext-3.4.0/resources/css/ext-all.css"/>
<script type="text/javascript" src="http://localhost/ext-3.4.0/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="http://localhost/ext-3.4.0/ext-all-debug.js"></script>
	<script type='text/javascript' >
		$numsJs={};			
		
		$numsJs.obj_1={
			principal:'UNO',
			secundario:'ONE',
		};
		
		$numsJs.obj_2={
			principal:'DOS',
			secundario:'TWO'
		};
		
		$numsJs.obj_3={
			principal:'TRES',
			secundario:'THREE'
		};
		
		$numsJs.obj_4={
			principal:'CUATRO',
			secundario:'FOUR'
		};
		
		$numsJs.obj_5={
			principal:'CINCO',
			secundario:'FIVE'
		};
		
		$numsJs.obj_6={
			principal:'SEIS',
			secundario:'SIX'
		};
		
		
		//$numsJs['obj_1'].pnew Array('idiom_1');
		//$numsJs['obj_1']['idiom_1']='UNO';
		//$numsJs['obj_1']['idiom_2']='ONE';
		
		/*$numsJs[2]=new Array();
		$numsJs[2][1]='DOS';
		$numsJs[2][2]='TWO';
		
		$numsJs[3]=new Array();
		$numsJs[3][1]='TRES';
		$numsJs[3][2]='THREE';
		
		$numsJs[4]=new Array();
		$numsJs[4][1]='CUATRO';
		$numsJs[4][2]='FOUR';
		
		$numsJs[5]=new Array();
		$numsJs[5][1]='CINCO';
		$numsJs[5][2]='FIVE';
		
		$numsJs[6]=new Array();
		$numsJs[6][1]='SEIS';
		$numsJs[6][2]='SIX';
		*/
		<?php 
			/*$numsJs=array();
			
			
			foreach($this->numeros as $numero){				
				if  ( !isset($numsJs[$numero['fk_objeto']])  ){
				
					$numsJs[$numero['fk_objeto']]=array(
						$numero['fk_idioma'] => '"'.$numero['nombre'].'"'
					);
					
					echo '$numsJs['.$numero['fk_objeto'].'] = {'.$numero['fk_idioma'].' :"'.$numero['nombre'].'" };'.chr(10);
					
					
				}else{
					$numsJs[$numero['fk_objeto']][ $numero['fk_idioma']] =  $numero['nombre'] ;
					
					
					echo '$numsJs['.$numero['fk_objeto'].'].id'.$numero['fk_idioma'].' = "'.$numero['nombre'].'";'.chr(10);
				}
				
					
				
				
			}*/
			
		?>
		Ext.onReady(function(){
			escena=Ext.select( 'div.escena');
			escena.on('click',function(){
								
					var id=Ext.get(arguments[1]).getAttribute('myid') ;
					
					alert($numsJs['obj_'+id].principal);
					alert($numsJs['obj_'+id].secundario);
				},this,{delegate:'div.obj_escena'}			
			);
		});
	
	</script>
<div class='escena'>
	<?php 
		foreach($this->objetos as $objeto){
			echo '<div class="obj_escena" myid="'.$objeto['id'].'" style=\'margin-left:'.$objeto['x'].'px; margin-top:'.$objeto['y'].'px;\'></div>';			
		}
	?>
	
	<script type="">
	
	</script>


	<audio controls="controls" autoplay="autoplay">
	  <source src="http://marina_mvc/app/escenarios/js/elcoco.mp3" type="audio/mpeg" />	  
	  Your browser does not support the audio element.
	</audio>
	<!--div class="obj_escena" style='margin-left:750px; margin-top:50px;'></div>
	<div class="obj_escena" style='margin-left:150px; margin-top:50px;'></div>
	<div class="obj_escena" style='margin-left: 400px; margin-top:140px;'></div>
	<div class="obj_escena" style='margin-left:220px;  margin-top:300px;'></div>
	<div class="obj_escena" style='margin-left:550px; margin-top:390px;'></div>
	<div class="obj_escena" style='margin-left: 880px; margin-top:290px;'></div-->
</div>