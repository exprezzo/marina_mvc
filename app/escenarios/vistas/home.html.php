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
		$numsJs=new Array();
		<?php 
			$numsJs=array();
			
			
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
				
					
				
				
			}
			
		?>
		Ext.onReady(function(){
			escena=Ext.select( 'div.escena');
			escena.on('click',function(){
					console.log(arguments);					
					alert(Ext.get(arguments[1]).getAttribute('myid') );
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
	<!--div class="obj_escena" style='margin-left:750px; margin-top:50px;'></div>
	<div class="obj_escena" style='margin-left:150px; margin-top:50px;'></div>
	<div class="obj_escena" style='margin-left: 400px; margin-top:140px;'></div>
	<div class="obj_escena" style='margin-left:220px;  margin-top:300px;'></div>
	<div class="obj_escena" style='margin-left:550px; margin-top:390px;'></div>
	<div class="obj_escena" style='margin-left: 880px; margin-top:290px;'></div-->
</div>