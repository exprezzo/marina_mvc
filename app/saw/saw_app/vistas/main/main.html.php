<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>SAW - <?php echo $this->getNombreVistaActiva(); ?></title>
		<link rel="stylesheet" href="css/theme1/style_monitoreo.css" type="text/css" />
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/ie7.css" type="text/css" />
		<![endif]-->
	</head>
	
	<body>
		<?php
	if(isset($_SESSION['username']))
	{
		?>
		<div style="position:absolute;right:0;" align="right" >
			Usuario: <?php echo $_SESSION['username']; ?>
			<br><a href="login/logout">Logout</a>
		</div><?php
	}
?>
		<div class="page">
			<div class="header">
				<a href="index.html" id="logo"><img src="imagenes/saw_logo.png" alt=""/></a>
				<ul>
					<li class="<?php echo $this->getMenuState('Home'); 			?>"><a href="index.html"		 >Home</a></li>
					<li class="<?php echo $this->getMenuState('Nosotros'); 		?>"><a href="nosotros.html"		 >Quienes somos</a></li>
					<li class="<?php echo $this->getMenuState('Monitoreo'); 	?>"><a href="monitoreo.html"	 >Monitoreo</a></li>
					<li class="<?php echo $this->getMenuState('Administracion');?>"><a href="administracion.html">Administraci&oacute;n</a></li>
					<li class="<?php echo $this->getMenuState('Contacto');      ?>"><a href="contacto.html"      >Contacto</a></li>		

				</ul>
			</div>
			<div class="separator"></div>
			
			<div class="body">
				<div id="featured">
					<?php $this->renderSeccion('contenido'); ?>										
				</div>				
			</div>
			
			<div class="separator_footer">
			</div>
			<div style="clear:both;"></div>
			<div class="footer">
				<ul >
					<li><a href="index.html">Home</a></li>
					<li><a href="nosotros.html">Quienes somos</a></li>
					<li><a href="monitoreo.html">Monitoreo</a></li>
					<li><a href="administracion.html">Administracion</a></li>
					<li><a href="contacto.html">Contacto</a></li>
				</ul>
				<div style="float:right;width:auto;">
				<p style="text-align:right; font-size:11px;margin:0;">&#169; Copyright &#169; 2012. SAW Todos los derechos registrados</p>
			</div>
		</div>
	</body>
</html>  