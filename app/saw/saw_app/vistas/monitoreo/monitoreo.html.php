<?php ?>
<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/ext-all.css"/>
<!--

<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/xtheme-access.css"/>
-->
<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/xtheme-gray.css"/>
<script type="text/javascript" src="js/ext-3.4.0/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="js/ext-3.4.0/ext-all-debug.js"></script>

<script type="text/javascript" src="js/pagina_monitoreo/dispositivos/gridMonitoreoDispositivos.ui.js"></script>
<script type="text/javascript" src="js/pagina_monitoreo/dispositivos/gridMonitoreoDispositivos.js"></script>
<script type="text/javascript" src="js/pagina_monitoreo/dispositivos/stoMonitoreoDispositivos.js"></script>

<script type="text/javascript" src="js/pagina_monitoreo/horarios/gridMonitoreoHorarios.ui.js"></script>
<script type="text/javascript" src="js/pagina_monitoreo/horarios/gridMonitoreoHorarios.js"></script>
<script type="text/javascript" src="js/pagina_monitoreo/horarios/stoMonitoreoHorarios.js"></script>
<script type="text/javascript" src="js/pagina_monitoreo/monitoreo.js"></script>
<link rel="stylesheet" href="css/theme1/monitoreo.css" type="text/css" />
<style type="text/css">
#featured{	
	height:320px !important;
	padding-top:80px !important;
	
	height:400px !important;

}
.tarjeta_monitoreo{
	
}	
.body ul li{
	padding:0;
}


	
	
	

</style>
<script>
saw={
	monitoreo:{
		tiempo_entre_peticiones: 1000
	}
}

Ext.onReady(function() {
	
    Ext.QuickTips.init();
    monitoreo.init();
	
	//rowselect 
});

</script>

<!--===============================================================================================================================
	Al Body
    ===============================================================================================================================!-->
<div class="pagina_monitoreo" style='margin-top:29px;position:absolute;'>
	
	<div style="float:left;margin-top:-20px;">
		
		<div id="gridMonitoreoDispositivos"></div>
	</div>

	<div style="float:left; margin-left:30px;">
	<ul class="monitoreo" style="background:none;display:inline;margin-top:-25px;possition:absolute;">
		<li style="">							
			
			<div class="lblNombreDispositivo" style="height:20px;visibility:hidden;" >Aula 1 </div>	
			<?php $this->render_tarjeta_de_dispositivo($num_aire=5); ?>
		</li>	
	</ul>
	</div>

	<div style="float:left;width:320px;margin-top:-20px;margin-left:28px;">			
		<h1 style="float:none;height:20px;" class="lblFecha">&nbsp;</h1>
		<div id="gridMonitoreoHorarios"></div>
	</div>

	<div style="clear:both;"></div>
</div>