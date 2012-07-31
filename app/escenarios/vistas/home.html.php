<!--
TODO
Los sonidos solo han funcionado en Chrome,
El aumentar y disminuir el tamaño de la imagen ocasiona problemas en Chrome
-->


<link rel="stylesheet" type="text/css" href="http://localhost/ext-3.4.0/resources/css/ext-all.css"/>
<script type="text/javascript" src="http://localhost/ext-3.4.0/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="http://localhost/ext-3.4.0/ext-all-debug.js"></script>
<script type="text/javascript" src="/js/mootools/mootools-core-1.4.5-full-compat.js"></script>
	<script type='text/javascript' >				
		eucalia={
			init:function(){
			}
		}
		Ext.onReady(function(){
			eucalia.init();
			/*escena=Ext.select( 'div.escena');
			escena.on('click',function(){
								
					var id=Ext.get(arguments[1]).getAttribute('myid') ;
					
					alert($numsJs['obj_'+id].principal);
					alert($numsJs['obj_'+id].secundario);
				},this,{delegate:'div.obj_escena'}			
			);*/
		});
		
		mostrarOpciones = function(objId){
			//aumentar tamaño y modificar x,y para mantenre centrado
			var imgId='obj_img_id_'+objId;			
			console.log("mostrar");
			var imagen=Ext.get(imgId);
			imagen.setX(imagen.getX()-16);
			imagen.setY(imagen.getY()-10);			
			imagen.setSize( imagen.getWidth() + 35 ,imagen.getHeight() + 35);
			
			//Hacer visible la caja de opciones
			var selector='obj_opciones_id_'+objId;			
			$(selector).tween('opacity', 1);
			
			
		}
		
		ocultarOpciones = function(objId){
			console.log("ocultar");
			var selector='obj_opciones_id_'+objId;			
			$(selector).tween('opacity', 0);
			
			selector='obj_img_id_'+objId;			
			var imagen=Ext.get(selector);
			imagen.setX(imagen.getX()+16);
			imagen.setY(imagen.getY()+10);
			imagen.setSize( imagen.getWidth() - 33,imagen.getHeight() - 33);						
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
<style type="text/css">



.opciones_wrapper{
	background: none repeat scroll 0 0 black;
	position:relative;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
	color:white;
	margin-left:142px;
	margin-top:30px;
}






</style>

<div class='escena'>
	<img class ="escena" src="<?php echo RESOURCES_PATH.$this->escena['ruta_imagen']; ?>" style="top:0px;position:absolute;" /img>
	<?php 		
		foreach($this->objetos as $objeto){
			echo 
			'<div class="sujeto_wrapper" style=\'margin-left:'.$objeto['x'].'px; margin-top:'.$objeto['y'].'px;\' id="sujeto_id_'.$objeto['id'].'">							
				<img class="imagen" id="obj_img_id_'.$objeto['id'].'"  src='.RESOURCES_PATH.$objeto['ruta_imagen'].' alt="img" />				
				<div class="opciones">
					<table>
						<tr class="opcion">
							<td class="subtitulo"><div>'.$objeto['sub_p'].'</div></td>
							<td class="play"><img src="'.RESOURCES_PATH.'imagenes/play.png" /></td>
						</tr>
						<tr class="opcion">
							<td class="subtitulo"><div>'.$objeto['sub_s'].'</div></td>
							<td class="play"><img src="'.RESOURCES_PATH.'imagenes/play.png" /></td>
						</tr>
					</table>
					
					
				</div>
			</div>';
			/*
			'<div class="obj_wrap" style=\'margin-left:'.$objeto['x'].'px; margin-top:'.$objeto['y'].'px;position:absolute;\' >			
				<div  class="objeto" onmouseout="ocultarOpciones('.$objeto['id'].')">
					<img class="obj_img" id="obj_img_id_'.$objeto['id'].'"  onmouseover="mostrarOpciones('.$objeto['id'].')" style="float:left;" src='.RESOURCES_PATH.$objeto['ruta_imagen'].' alt="img" />
					<div class="opciones_wrapper"  id="obj_opciones_id_'.$objeto['id'].'">
						<table>
							<tr class="primario">
								<td style="background-color:white;">'.$objeto['sub_p'].'</td>
								<td ><label class="btn_audio" onClick="reproducirTraduccion('.$objeto['id'].',\'p\');" ><img src="'.RESOURCES_PATH.'imagenes/play.png" /></label></td>
							</tr>
							<tr class="secundario">
								<td style="background-color:white;">'.$objeto['sub_s'].'</td>
								<td><label class="btn_audio" onClick="reproducirTraduccion('.$objeto['id'].',\'s\');"><img src="'.RESOURCES_PATH.'imagenes/play.png" /></label></td>					
							</tr>
						</table>
					</div>
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
				</audio>';*/
		}
	?>		
</div>