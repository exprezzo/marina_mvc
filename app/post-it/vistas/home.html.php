<link rel="stylesheet" type="text/css" href="http://localhost/ext-3.4.0/resources/css/ext-all.css"/>
<script type="text/javascript" src="http://localhost/ext-3.4.0/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="http://localhost/ext-3.4.0/ext-all-debug.js"></script>
<script type="text/javascript">

Ext.onReady(function(){
	escena=Ext.select( '#escena');
	escena.on('click',function(){						
		alert('acciones sobre el postit?');		
	},this);
});

postor={

}
</script>

<style type="text/css">
#escena{
	border-color:green;
	border-style:solid;
	border-width:1px;
	height:900px;
	width:900px;
}





.post-it {
	background:#fefabc; 
	padding:15px; 
	font-family: 'Gloria Hallelujah', cursive; 
	font-size:15px; 
	color: #000; 
	width:200px; 

	/*-moz-transform: rotate(7deg);
	-webkit-transform: rotate(7deg);
	-o-transform: rotate(7deg);
	-ms-transform: rotate(7deg);
	transform: rotate(7deg);*/

	box-shadow: 0px 4px 6px #333;
	-moz-box-shadow: 0px 4px 6px #333;
	-webkit-box-shadow: 0px 4px 6px #333;
}
//  post-it CSS
// http://webdesignandsuch.com/create-a-post-it-note-with-css3/

</style>

<div id='escena' style="">

<div postitId="" class="post-it">
	<h1>Este es un ejemplo de postit</h1>
</div>
<br>

<div postitId="" class="post-it">
	<h1>Otro Post-it</h1>
</div>
<br>
<div postitId="" class="post-it">
	<h1>Y
	Otro
	Mas
	</h1>
</div>
</div>