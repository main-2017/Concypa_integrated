<!DOCTYPE html>
<html>
	<?php require('inlcudes/header.php'); ?>
<body>
	<section class="container-fluid">
		<section class="main">
			<nav class="navbar navbar-default navbar-fixed-top transparency"><!--Inicio de barra de menú-->
				  <div class="container-fluid">
					<div class="navbar-header"><!--Navbar Header-->
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-menu" aria-expanded="false">
					        <span class="sr-only">Menu</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
				      </button>
				      <a href="#top" ><img class="logo" src="img/general/LOGO PNG.png" alt="Concypa"></a>
					</div><!--Fin Navbar Header-->
				      <div class="collapse navbar-collapse" id="header-menu"><!--Contenido de Navbar-->
	      				    
						      <ul class="nav navbar-nav navbar-right" style="padding-top: 20px;">
						        <li class="text-center"><a data-scroll style="border-right: 2px solid #00005E" class="menu-link" href="index.php">Inicio</a></li>
						        <li class="text-center"><a data-scroll style="border-right: 2px solid #00005E" class="menu-link" href="index.php#historia">Historia</a></li>
						        <li class="text-center"><a data-scroll style="border-right: 2px solid #00005E" class="menu-link" href="index.php#servicios">Servicios</a></li>
						        <li class="text-center"><a data-scroll style="border-right: 2px solid #00005E" class="menu-link" href="proyectos.php">Proyectos</a></li>
						        <li class="text-center"><a data-scroll style="border-right: 2px solid #00005E" class="menu-link" href="INTRANET.CONCYPA.COM">Intranet</a></li>
						        <li class="text-center"><a data-scroll class="menu-link" href="contacto.php">Contacto</a></li>
						      </ul>
					      
				      </div><!--Fin de contenido de Navbar-->
				  </div>
			</nav><!--Fin de barra de menú-->
			<br>
			<br>
			<br>
		<section class="bloque-proyectos">  <!--Secccion proyectos en curso-->
			<div class="letter">
				<h2 class="title-proyectos">Proyectos en curso</h2>
			</div>

			<div class="flex-content" id="proyectosCurso">
				<!-- Contenido generado dinamicamente -->
			</div>
		</section>
		<!-- Fin proyectos en curso -->

		<!-- Comienzo proyectos finalizados -->

		<section class="bloque-proyectos">
			<div class="letter" style="float: left; padding-top: 30px; padding-bottom: -20px; width: 100%; background-position: left; margin: 30px 0px; position: relative;">
				<h2 class="title-proyectos" style="z-index: 108; position: absolute; top: 0px; padding-top: 0;">Proyectos Finalizados</h2>
			</div>
				<div class="flex-content" id="proyectosTerminados">
					<!-- Contenido generado dinamicamente -->
				</div>	
			</section>



	<!--Comienzo pie de pagina-->
	<footer>
		<div class="grey-letter">
			<img class="logo-white-mini img-responsive" src="img/general/LOGO PNG BLANCO.png" alt="Concypa" style="width: 300px; height: auto;">
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h4 class="contact-text text-muted text-center">08000-016-281-5</h4>
				<h4 class="contact-text text-muted text-center">Cra. 37 A No. 2 Sur 78</h4>
				<h4 class="contact-text text-muted text-center">+57 4 4444652</h4>
				<br>
				<h5 class="contact-text text-muted text-center"><a href="#" title="" class="link-pdf">Politica anticorrupcion</a></h5>
				<h5 class="contact-text text-muted text-center"><a href="#" title="" class="link-pdf" id="link-pdf">Politica de Tratamiento de datos</a></h5>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<ul class="list-menu-bottom">
					<li class="sr-contact"><a data-scroll class="link-menu text-muted" href="index.php">Home</a></li>
					<li class="sr-contact"><a class="link-menu text-muted" href="index.php#proyectos">Proyectos</a></li>
					<li class="sr-contact"><a data-scroll class="link-menu text-muted" href="index.php#servicios">Servicios</a></li>
					<li class="sr-contact"><a class="link-menu text-muted" href="contacto.php">Contacto</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<ul class="social-icon">
				<li class="sr-button"><a id="google" class="social-a" href="#"><span class="icon-google-plus"></span></a></li>
				<li class="sr-button"><a id="facebook" class="social-a" href="#"><span class="icon-facebook"></span></a></li>
				<li class="sr-button"><a id="twitter" class="social-a" href="#"><span class="icon-twitter"></span></a></li>
				<li class="sr-button"><a id="youtube" class="social-a" href="#"><span class="icon-youtube"></span></a></li>
				<li class="sr-button"><a id="linkedin" class="social-a" href="#"><span class="icon-linkedin2"></span></a></li>
			</ul>
		</div>


	<!-- Pie de Pagina-->
	</footer>
</section>
</section>
	<?php require('inlcudes/scripts.php'); ?>
</body>
</html>