<style type="text/css">
.escena{
	border-radius: 20px 20px 20px 20px;
	background: none repeat scroll 0 0 #E9EAEE;
    border: 2px solid #FFFFFF;
    box-shadow: 1px 2px 6px rgba(0, 0, 0, 0.5);
    margin: 0 auto;
   // padding: 44px 40px 20px;
    
    width: 1280px;
	height: 960px;
	
	//position: absolute;
	margin-top:50px;
}

.obj_escena{
	/*background: none repeat scroll 0 0 black;
	width: 40px;
	height: 40px;
-webkit-border-radius: 25px;
-moz-border-radius: 25px;
border-radius: 25px;*/
	position:absolute;
}

.obj_opciones{
	background: none repeat scroll 0 0 black;
	width: 40px;
	height: 40px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
	color:white;
}

.btn_audio:hover{
	cursor:pointer;
}
audio{
	visibility:hidden;
}
</style>

<link rel="stylesheet" type="text/css" href="http://localhost/ext-3.4.0/resources/css/ext-all.css"/>
<script type="text/javascript" src="http://localhost/ext-3.4.0/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="http://localhost/ext-3.4.0/ext-all-debug.js"></script>
<script type="text/javascript" src="/js/mootools/mootools-core-1.4.5-full-compat.js"></script>
	<script type='text/javascript' >				
		Ext.onReady(function(){
			escena=Ext.select( 'div.escena');
			escena.on('click',function(){
								
					var id=Ext.get(arguments[1]).getAttribute('myid') ;
					
					alert($numsJs['obj_'+id].principal);
					alert($numsJs['obj_'+id].secundario);
				},this,{delegate:'div.obj_escena'}			
			);
		});
		
		mostrarOpciones = function(objId){
			//aumentar tamaño y modificar x,y para mantenre centrado
			var imgId='obj_img_id_'+objId;			
			
			var imagen=Ext.get(imgId);
			imagen.setX(imagen.getX()-16);
			imagen.setY(imagen.getY()-10);			
			imagen.setSize( imagen.getWidth() + 35 ,imagen.getHeight() + 35);
			//var width=imagen.elements[0].getAttribute('width');
			
			//$(imgId).tween('left', "-5");
			//$(imgId).tween('height', "160px");			
			//$(imgId).tween('width', "160");
			
			
			//Hacer visible la caja de opciones
			var selector='obj_opciones_id_'+objId;			
			$(selector).tween('opacity', 1);
			
			
		}
		
		ocultarOpciones = function(objId){
			
			var selector='obj_opciones_id_'+objId;			
			$(selector).tween('opacity', 0);
			
			selector='obj_img_id_'+objId;			
			var imagen=Ext.get(selector);
			imagen.setX(imagen.getX()+16);
			imagen.setY(imagen.getY()+10);
			imagen.setSize( imagen.getWidth() - 35,imagen.getHeight() - 35);
			//$(selector).tween('left', "0");
			//$(selector).tween('height', "128px");
			//$(selector).tween('width', "128px");
			
			
		}
		
		reproducirTraduccion = function(id, tipo){						
			var sufijo;
			
			if (tipo==='p'){
				sufijo='_trad_p';
			}else if (tipo==='s'){
				sufijo='_trad_s';
			}
			var selector="#obj_"+id+sufijo;
						
			var traduccion=Ext.select(selector);			
			traduccion.elements[0].play();
		}
		
	</script>
<div class='escena'>
	<img class ="escena" src="<?php echo RESOURCES_PATH.$this->escena['ruta_imagen']; ?>" style="top:0px;position:absolute;" /img>
	<?php 		
		foreach($this->objetos as $objeto){
			echo 
			'<div style=\'margin-left:'.$objeto['x'].'px; margin-top:'.$objeto['y'].'px;position:absolute;\'><div class="obj_escena" myid="'.$objeto['id'].'" ></div>			
				<div style="margin-left:40px;" >
					<img id="obj_img_id_'.$objeto['id'].'" onmouseout="ocultarOpciones('.$objeto['id'].')" onmouseover="mostrarOpciones('.$objeto['id'].')" style="float:left;" src='.RESOURCES_PATH.$objeto['ruta_imagen'].' alt="img" />
					<table onmouseout="ocultarOpciones('.$objeto['id'].')" onmouseover="mostrarOpciones('.$objeto['id'].')" style="float:left;position:absolute;margin-top:30px;margin-left:120px;opacity:0;" class="obj_opciones" id="obj_opciones_id_'.$objeto['id'].'">
						<tr class="primario">
							<td >'.$objeto['sub_p'].'</td>
							<td ><label class="btn_audio" onClick="reproducirTraduccion('.$objeto['id'].',\'p\')" ;><img src="'.RESOURCES_PATH.'imagenes/play.png"/></label></td>
						</tr>
						<tr class="secundario">
							<td >'.$objeto['sub_s'].'</td>
							<td><label class="btn_audio" onClick="reproducirTraduccion('.$objeto['id'].',\'s\')"><img src="'.RESOURCES_PATH.'imagenes/play.png"/></label></td>					
						</tr>
					</table>
					<div style="clear:both"></div>
				</div>
			</div>
				<audio  id="obj_'.$objeto['id'].'_trad_p" controls="controls" >
					<source src="'.RESOURCES_PATH.$objeto['trad_p'].'" type="audio/mpeg" />	  
					Your browser does not support the audio element.		
				</audio>
				<audio  id="obj_'.$objeto['id'].'_trad_s" controls="controls" >
					<source src="'.RESOURCES_PATH.$objeto['trad_s'].'" type="audio/mpeg" />	  
					Your browser does not support the audio element.		
				</audio>';
		}
	?>		
</div>