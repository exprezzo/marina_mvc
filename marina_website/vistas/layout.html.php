<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Home Page | Whirlpool - Free Website Template from Templates.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link href="<?php echo RESOURCES_PATH ?>css/style.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 7]><script type="text/javascript" src="ie_png.js"></script><script type="text/javascript">ie_png.fix('.png, #nav li a, .button span, .button a');</script><![endif]--> 
</head>

<body id="page1">
	<div class="tail-right"></div>
	<div class="tail-right-top"></div>
	<div class="tail-top">
		<div class="tail-bottom">
			<div class="tail-bg">
				<div class="top-bg">
					<div class="tail-right-bot"></div>
					<div class="bot-bg">
						<div id="main">
<!-- header -->
							<div id="header">
								<h1><a>Marina MVC</a><span>Una arquitectura MVC para PHP! </span></h1>
								<ul class="top-links">
									<li><a><img alt="home" src="<?php echo RESOURCES_PATH ?>imagenes/icon-home.gif" /></a></li>
									<li><a href="contact.html"><img alt="mail" src="<?php echo RESOURCES_PATH ?>imagenes/icon-mail.gif" /></a></li>
									<li><a href="sitemap.html"><img alt="map" src="<?php echo RESOURCES_PATH ?>imagenes/icon-map.gif" /></a></li>
								</ul>
							</div>
							<div class="extra-img"><img alt="extra-img" src="<?php echo RESOURCES_PATH ?>imagenes/extra-img.png" class="png"/></div>
							<div class="wrapper">
<!-- nav -->
								<?php 
									$this->mostrarSeccion('menu');	
								?>
<!-- content -->
								<div id="content">
									<?php
									$this->mostrarSeccion('contenido');
									?>
								</div>
							</div>
						</div>
<!-- footer -->
						<div id="footer">
							<div class="indent">
								<div class="fleft">Copyrights - Type in Your Name Here</div>
								<div class="fright">Designed by: <a href="http://www.templates.com/" title="templates.com - website templates provider"><img alt="website templates" src="<?php echo RESOURCES_PATH ?>imagenes/templates-logo.gif" /></a>&nbsp; Administrado con Octopus CMS</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>