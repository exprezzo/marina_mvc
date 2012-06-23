<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/ext-all.css"/>
<!--

<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/xtheme-access.css"/>
-->
<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/xtheme-gray.css"/>
<script type="text/javascript" src="js/ext-3.4.0/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="js/ext-3.4.0/ext-all-debug.js"></script>

<script type="text/javascript" src="js/administracion/frmHorarios/stoDias.js"></script>
<script type="text/javascript" src="js/administracion/frmHorarios/stoDispositivos.js"></script>
<script type="text/javascript" src="js/administracion/frmHorarios/stoHorarios.js"></script>

<script type="text/javascript" src="js/administracion/frmHorarios/frmAdminHorarios.ui.js"></script>
<script type="text/javascript" src="js/administracion/frmHorarios/frmAdminHorarios.js"></script>




<!--link rel="stylesheet" href="css/theme1/monitoreo.css" type="text/css" />-->
<link rel="stylesheet" href="css/administracion.css" type="text/css" />

<style type="text/css">
	.body ul li{
		padding:0;
	}
	
	<!-- http://www.dynamicdrive.com/style/csslibrary/item/inverted-shift-down-menu/ -->
	.invertedshiftdown ul{
padding: 0;
width: 100%;
border-top: 5px solid #D10000; /*Red color theme*/
background: transparent;
voice-family: "\"}\"";
voice-family: inherit;
}

	.invertedshiftdown ul{
margin:0;
margin-left: 40px; /*margin between first menu item and left browser edge*/
padding: 0;
list-style: none;
}

.invertedshiftdown li{
display: inline;
margin: 0 2px 0 0;
padding: 0;
text-transform:uppercase;
}

.invertedshiftdown a{
float: left;
display: block;
font: bold 12px Arial;
color: black;
text-decoration: none;
margin: 0 1px 0 0; /*Margin between each menu item*/
padding: 5px 10px 9px 10px; /*Padding within each menu item*/
background-color: white; /*Default menu color*/

/*BELOW 4 LINES add rounded bottom corners to each menu item.
  ONLY WORKS IN FIREFOX AND FUTURE CSS3 CAPABLE BROWSERS
  REMOVE IF DESIRED*/
-moz-border-radius-bottomleft: 5px;
border-bottom-left-radius: 5px;
-moz-border-radius-bottomright: 5px;
border-bottom-right-radius: 5px;
}

.invertedshiftdown a:hover{
background-color: #D10000; /*Red color theme*/
padding-top: 9px; /*Flip default padding-top value with padding-bottom */
padding-bottom: 5px; /*Flip default padding-bottom value with padding-top*/
color: white;
}

.invertedshiftdown .current a{ /** currently selected menu item **/
background-color: #D10000; /*Red color theme*/
padding-top: 9px; /*Flip default padding-top value with padding-bottom */
padding-bottom: 5px; /*Flip default padding-bottom value with padding-top*/
color: white;
}

#myform{ /*CSS for sample search box. Remove if desired */
float: right;
margin: 0;
margin-top: 2px;
padding: 0;
}

#myform .textinput{
width: 190px;
border: 1px solid gray;
}

#myform .submit{
font: normal 12px Verdana;
height: 22px;
border: 1px solid #D10000;
background-color: black;
color: white;
}

.styled-select select {
   background: transparent;
   width: 268px;
   padding: 5px;
   font-size: 16px;
   border: 1px solid #ccc;
   height: 34px;
}
.titulo{
	
	margin-bottom:100px;
	
}
.titulo .texto{
	display:block;
	font-size:20px;
	text-align:left;
	width:470px;
	float:left;
	margin-top:20px;
	margin-left:10px;
}
.titulo .imagen{
	background-image:url('/imagenes/scheduled_tasks_64.png');
	background-repeat:no-repeat;
	width:64px;
	height:64px;
	display:block;
	float:left;
}
#featured{
	height:670px !important;
}
</style>


<script>

Ext.onReady(function() {
	
    Ext.QuickTips.init();
    Ext.onReady(function() {
    Ext.QuickTips.init();		
	
		new frmAdminHorarios({renderTo:'panelAdministracion'});
		/*card = new Ext.Panel({
			layout:'card',
			activeItem: 0,
			width:800,
			height:800,
			forceLayout:true,
			renderTo:'panelAdministracion',
			items:[
				new frmAdminHorarios(),
				{xtype:'panel',title:'otra Cosa'}
			]
		});*/
	});
	
	
});

</script>
<!-- http://bavotasan.com/2011/style-select-box-using-only-css/
<div class="styled-select">
<select>
<option>Here is the first option</option>
<option>The second option</option>
</select>
</div>-->
<div id="panelAdministracion" style="margin-top:30px;position:absolute;left:50%;margin-left:-290px;"></div>