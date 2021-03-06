<!DOCTYPE html>
<html>
	<?php require('inlcudes/header.php') ?>
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
						        <li class="text-center"><a data-scroll style="border-right: 2px solid #00005E" class="menu-link" target="_blank" href="http://intranet.concypa.com">Intranet</a></li>
						        <li class="text-center"><a data-scroll class="menu-link" href="contacto.php">Contacto</a></li>
						      </ul>
					      
				      </div><!--Fin de contenido de Navbar-->
				  </div>
			</nav><!--Fin de barra de menú-->
			<br>
			<br>
			<br>
			<div class="letter">
				<h2 class="title-proyectos">Contacto</h2>
			</div>
			<form class="form-contact" action="controllers/send.php" method="POST" accept-charset="utf-8">
				<input class="form-field" type="name" name="nombre" placeholder=" Nombre" required>
				<br>
				<input class="form-field" type="email" name="correo" placeholder=" Email">
				<br>
				<input class="form-field" type="tel" name="telefono" placeholder=" Telefono">
				
				<textarea rezise="none" name="comentario" class="coment-area" placeholder=" Comentario"></textarea>
				<br>
				<button class="form-button" type="submit">Enviar</button>
			</form>
		</section>
	</section>
	<footer>
		<div class="grey-letter">
			<img id="footer-logo" class="logo-white-mini img-responsive" src="img/general/LOGO PNG BLANCO.png" alt="Concypa" style="width: 300px; height: auto;">
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h4 class="contact-text text-muted text-center">+57 4 4444652</h4>
				<h4 class="contact-text text-muted text-center">Cra. 37 A No. 2 Sur 78</h4>
				<h4 class="contact-text text-muted text-center">Medellin, Colombia</h4>
				<h4 class="contact-text text-muted text-center">informacion@concypa.com</h4>
				<br>
				<h5 class="contact-text text-muted text-center"><a href="documents/politica-anticorrucion.pdf" title="Politica Anticorrupcion" class="link-pdf">Politica anticorrupcion</a></h5>
				<h5 class="contact-text text-muted text-center"><a href="documents/politica-proteccion-datos-personales.pdf" title="Politica de Proteccion de datos personales" class="link-pdf">Politica de Tratamiento de datos</a></h5>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<ul class="list-menu-bottom">
					<li class="sr-contact"><a data-scroll class="link-menu text-muted" target="_blank" href="index.php">Home</a></li>
					<li class="sr-contact"><a class="link-menu text-muted" target="_blank" href="proyectos.php">Proyectos</a></li>
					<li class="sr-contact"><a data-scroll class="link-menu text-muted" href="index.php#servicios">Servicios</a></li>
					<li class="sr-contact"><a class="link-menu text-muted" target="_blank" href="http://intranet.concypa.com">Intranet</a></li>
					<li class="sr-contact"><a class="link-menu text-muted" target="_blank" href="contacto.php">Contacto</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<ul class="social-icon">
				<li class="sr-button"><a id="google" class="social-a" target="_blank" href="#"><span class="icon-google-plus"></span></a></li>
				<li class="sr-button"><a id="facebook" class="social-a" target="_blank" href="#"><span class="icon-facebook"></span></a></li>
				<li class="sr-button"><a id="twitter" class="social-a" target="_blank" href="https://twitter.com/CONCYPA_SA"><span class="icon-twitter"></span></a></li>
				<li class="sr-button"><a id="youtube" class="social-a" target="_blank" href="#"><span class="icon-youtube"></span></a></li>
				<li class="sr-button"><a id="linkedin" class="social-a" target="_blank" href="#"><span class="icon-linkedin2"></span></a></li>
			</ul>
		</div>
	</footer>
	<?php require('inlcudes/scripts.php') ?>
</body>
</html>