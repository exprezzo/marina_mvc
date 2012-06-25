<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>	
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1">
<div class="body3"></div>
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div id="logo_box">
				<h1><a href="index.html" id="logo">Facturaci&oacute;n Expresso<span>On the shoulder of gigants!</span></a></h1>
			</div>
			<nav>
				<?php $this->mostrarSeccion('menu'); ?>
			</nav>
			<div class="wrapper">
				<div class="text1">Your Business Needs Fresh Ideas?</div>
				<div class="text2">We work for your Profit</div>
				<ul id="icons">
					<li><span>Follow Us!</span></li>
					<li><a href="#"><img src="<?php echo RESOURCES_PATH ?>imagenes/icon1.jpg" alt=""></a></li>
					<li><a href="#"><img src="<?php echo RESOURCES_PATH ?>imagenes/icon2.jpg" alt=""></a></li>
					<li><a href="#"><img src="<?php echo RESOURCES_PATH ?>imagenes/icon3.jpg" alt=""></a></li>
				</ul>
			</div><div class="inner_copy">More <a href="http://www.templatemonster.com/">Website Templates</a> at TemplateMonster.com!</div>
		</header>
<!-- / header -->
	</div>
</div>
<div class="body2">
	<div class="main">
<!-- content -->
		<section id="content">
			<?php $this->mostrarSeccion('contenido'); ?>
		</section>
<!-- / content -->
	</div>
</div>
<div class="main">
<!-- footer -->
	<footer>
		<div class="wrapper">
			<article class="col1">
				<div class="pad">
					<h2>Protecting Your Info</h2>
					<p>The latest on keeping your personal info safe and secure.</p>
					<ul class="list1">
						<li><a href="#">Security Alerts</a></li>
						<li><a href="#">Avoiding Scams</a></li>
					</ul>
				</div>
			</article>
			<article class="col2 pad_left1">
				<div class="pad">
					<div class="wrapper">
						<article class="cols">
							<h2>Newsletter</h2>
							<form id="form_1" action="" method="post">
								<div>
									<div class="bg"><input class="input" type="text" value="Enter email here" onblur="if(this.value=='') this.value='Enter email here'" onFocus="if(this.value =='Enter email here' ) this.value=''" /></div>
									<a href="#" class="submit" onClick="document.getElementById('form_1').submit()"><span><span>Submit</span></span></a>
									<a href="#">Unsucscribe</a>
								</div>
							</form>
						</article>
						<article class="cols pad_left1">
							<h2>Customer Log In</h2>
							<form id="form_2" action="" method="post">
								<div>
									<div class="bg left"><input class="input input1" type="text" value="Enter user ID here"	onblur="if(this.value=='') this.value='Enter user ID here'" onFocus="if(this.value =='Enter user ID here' ) this.value=''" /></div>
									<div class="bg right"><input class="input input2" type="password" value="••••••••••" onblur="if(this.value=='') this.value='••••••••••'" onFocus="if(this.value =='••••••••••' ) this.value=''"	 /></div>
									<a href="#" class="submit" onClick="document.getElementById('form_2').submit()"><span><span>login</span></span></a>
									<a href="#">Forgot password?</a> &nbsp;	<a href="#">Sign up</a>
								</div>
							</form>
						</article>
					</div>
				</div>	
			</article>
		</div>
		<div class="under2"></div>
		<div class="wrapper font_size">
			<div class="pad">
				Construido sobre <a href="/" target="_blank">Marina MVC</a> Administrado con Octopus CMS<br>
				<a href="http://www.templatemonster.com/" target="_blank">Website template</a> designed by TemplateMonster.com<br>
				<a href="http://www.templates.com/product/3d-models/" target="_blank">3D Models</a> provided by Templates.com<br>				
			</div>
		</div>
	</footer>
<!-- / footer -->
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>