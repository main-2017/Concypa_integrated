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
						        <li class="text-center"><a data-scroll style="border-right: 2px solid #00005E" class="menu-link" href="#top">Inicio</a></li>
						        <li class="text-center"><a data-scroll style="border-right: 2px solid #00005E" class="menu-link" href="#historia">Historia</a></li>
						        <li class="text-center"><a data-scroll style="border-right: 2px solid #00005E" class="menu-link" href="#servicios">Servicios</a></li>
						        <li class="text-center"><a data-scroll style="border-right: 2px solid #00005E" class="menu-link" href="proyectos.php">Proyectos</a></li>
						        <li class="text-center"><a data-scroll class="menu-link" href="contacto.php">Contacto</a></li>
						      </ul>
					      
				      </div><!--Fin de contenido de Navbar-->
				  </div>
			</nav><!--Fin de barra de menú-->
			<div id="top" class="slider-container">
			<!--Comienzo de slider-->
				<div id="slider-top" class="carousel slide" data-ride="carousel">
						  
				<!-- Contenido generado directamente -->
						  
			
				</div>
			<!--Fin de slider-->
			</div>
		</section>
		<!--Inicio de la sección Historia-->
		<section  id="historia" class="main">
			<div class="bg-include">
			<div class="float-historia">
				<h2 class="title-historia">Historia</h2>
				<p class="text-left texto-historia">
					Construcciones Civiles y Pavimentos S.A. es una Empresa Antioqueña, Sociedad Anónima, creada el 9 de Septiembre de 1.987, con sede principal en Medellín – Colombia, cuyo objeto principal es la construcción obras civiles en general, construcción y mantenimiento de vías.
					Dentro del objeto social de la Empresa esta:
					La elaboración y promoción de proyectos de desarrollo en diferentes campos de la economía.
					La asociación con otras entidades de carácter oficial, cooperativo, mixto o privado para la elaboración de proyectos o construcción de los mismos a través de sociedades, consorcios, uniones temporales o sociedades de economía mixta o de cualquier tipo.
					El desarrollo de contratos con otras entidades para el manejo administrativo o financiero de estudios, diseños, recursos físicos, económicos, técnicos, bajo cualquier tipo de contrato o asociación que la ley lo permita, directamente por concesión, administración delegada, por contratos de llave en mano sin ninguna restricción.
					Para la ejecución de los anteriores contratos se conformó un grupo interdisciplinario de Ingenieros Civiles, Arquitectos, Arquitectos Constructores, tecnólogos en construcciones civiles, personal administrativo y operativo altamente capacitado y muy bien aceptado en el medio.
				</p>

			</div>
				
				<div class="float-servicios" style="padding-right: 0; float: right;">
					<h2 class="title-servicios">Servicios</h2>
				</div>
		
			</div>
		</section><!--Fin de sección Historia-->
		<section id="servicios" class="main" style="height: auto;">
			<div class="column-left"></div>
			<div class="content-position-absolute"><!--Este contenedor anida todos los elementos que van encima de las columnas-->
				
			
				<div class="service-img">
					<!-- <img class="img-responsive" style="width: 100%;" src="img/helmet-cut.jpg" alt="Concypa">
					<div class="position-wrapper col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-left">
						<h3 class="title-mision"><strong class="ultra-bold">Mision</strong></h3>
						<p class="text-left texto-mision" style="color: #000;">CONSTRUCCIONES CIVILES Y PAVIMENTOS S.A. Es una empresa de Ingeniería, con amplia experiencia en las actividades de Interventoría y construcción, comprometida siempre con el medio ambiente, la seguridad de los trabajadores, apoyando el desarrollo del sector y generando empleo.</p>
					</div>
					<div class="position-wrapper-2 col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right">
						<h3 class="title-vision"><strong class="ultra-bold">Vision</strong></h3>
						<p class="text-right texto-vision" style="color: #000;">La organización CONSTRUCCIONES CIVILES Y PAVIMENTOS S.A. espera distinguirse en el medio de la ingeniería civil a través de un sistema de gestión de la calidad que genere confianza y satisfacción a sus clientes, esperando ser en el año 2020 una Empresa reconocida ampliamente por su gestión tanto a nivel regional y nacional, adquiriendo así cada vez más posicionamiento en el medio de la construcción.</p>
					</div> -->
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/general/bg_dark.jpg" alt="Misión">
      <div class="carousel-caption">
        <h3 class="title-mision" style="font-size: 22px">Mision</h3>
        <p class="texto-mision" style="font-size: 18px">CONSTRUCCIONES CIVILES Y PAVIMENTOS S.A. Es una empresa de Ingeniería, con amplia experiencia en las actividades de Interventoría y construcción, comprometida siempre con el medio ambiente, la seguridad de los trabajadores, apoyando el desarrollo del sector y generando empleo.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/general/edificios.jpg" alt="vision">
      <div class="carousel-caption">
        <h3 class="title-vision" style="font-size: 22px">Vision</h3>
        <p class="texto-vision" style="font-size: 18px">La organización CONSTRUCCIONES CIVILES Y PAVIMENTOS S.A. espera distinguirse en el medio de la ingeniería civil a través de un sistema de gestión de la calidad que genere confianza y satisfacción a sus clientes, esperando ser en el año 2020 una Empresa reconocida ampliamente por su gestión tanto a nivel regional y nacional, adquiriendo así cada vez más posicionamiento en el medio de la construcción.</p>
      </div>
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
					</div>
					<div class="main-content">
						<div class="sr-icons service-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="inside-block-service">
								<div class="label-top">
									<h3 class="label-title text-center">Obras Civiles</h3>
								</div>
								<div class="icon-content">
									<img class="img-responsive img-white-logo" src="img/general/hombre_hablandoooo.png" alt="Gerencia">
								</div>
								<div class="cartel" id="cartel1">
									<p>Construcción de Obras Civiles.</p>
								</div>
								<button id="boton1" class="flat-button" type="button"><span><img id="icon1" class="icon-toggle" src="img/general/icon-next.png" alt="toggle"></span>Ver Mas</button>
							</div>
						</div>
						<div class="sr-icons service-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="inside-block-service">
								<div class="label-top">
									<h3 class="label-title text-center">Estudios</h3>
								</div>
								<div class="icon-content">
									<img class="img-responsive img-white-logo" src="img/general/planossssss.png" alt="Gerencia">
								</div>
								<div class="cartel" id="cartel2">
									<p>Diseños y Estudios de Obras en General </p>
								</div>
								<button id="boton2" class="flat-button" type="button"><span><img id="icon2" class="icon-toggle" src="img/general/icon-next.png" alt="toggle"></span>Ver Mas</button>
							</div>
						</div>
						<div class="sr-icons service-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="inside-block-service">
								<div class="label-top">
									<h3 class="label-title text-center">Asesoría</h3>
								</div>
								<div class="icon-content">
									<img class="img-responsive img-white-logo" src="img/general/seniorrrrr.png" alt="Construccion">
								</div>
								<div class="cartel" id="cartel3">
									<p>Asesoría a Entidades y Municipios en el Proceso de Licitación y Evaluación de Propuestas.</p>
								</div>
								<button id="boton3" class="flat-button" type="button"><span><img id="icon3" class="icon-toggle" src="img/general/icon-next.png" alt="toggle"></span>Ver Mas</button>
							</div>
						</div>
						<div class="sr-icons service-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="inside-block-service">
								<div class="label-top">
									<h3 class="label-title text-center">Interventoría</h3>
								</div>
								<div class="icon-content">
									<img class="img-responsive img-white-logo" src="img/general/casaaa.png" alt="Gerencia">
								</div>
								<div class="cartel" id="cartel4">
									<p>Interventoría de Obras Civiles y apoyo técnico jurídico a las Entidades Municipales para la elaboración de proyectos.</p>
								</div>
								<button id="boton4" class="flat-button" type="button"><span><img id="icon4" class="icon-toggle" src="img/general/icon-next.png" alt="toggle"></span>Ver Mas</button>
							</div>
						</div>
					</div>
						<section id="proyectos" class="project-content">
							<div class="letter">
								<h2 class="title-proyectos">Proyectos</h2>
							</div>
							<div class="flex-content">
									<div class="sr-icons col-lg-4 col-md-6 col-sm-12 col-xs-12 box-content-project" style="padding-left: 0px;">
										<div class="box-project">
											<div class="label-blue">
												<h3 class="text-center title-label-blue">I.E Isolda Echavarria</h3>
											</div>
											<img class="img-responsive" src="img/Proyectos-Muestra/1. I.E Isolda Echavarria - FOTO PRINCIPAL - thubnail.jpg" alt="Construccion" style="width: 100%">
											<div class="cover">
												<img class="img-responsive logo-white-mini" src="img/general/LOGO PNG BLANCO.png" alt="Concypa">
												<button data-toggle="modal" data-target="#modal-1" class="flat-button" type="button"><span><img class="icon-toggle" src="img/general/icon-next.png" alt="toggle"></span>Ver Proyecto</button>
											</div>
										</div>
									</div>

									<!--Ventana Model #1-->

									<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													<h4 class="modal-title" id="myModalLabel">I.E Isolda Echavarria</h4>
												</div>
												<div class="modal-body">
													<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
														<img class="img-responsive" id="img-modal1" src="img/Proyectos-Muestra/1. I.E Isolda Echavarria - FOTO PRINCIPAL.JPG" alt="">
													</div>
													<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
														<h4>Titulo del Proyecto</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--Fin de Modal #1-->

									<div class="sr-icons col-lg-4 col-md-6 col-sm-12 col-xs-12 box-content-project" style="padding-left: 0px;">
										<div class="box-project">
											<div class="label-blue">
												<h3 class="text-center title-label-blue">I.E. Antonio Jose de Sucre</h3>
											</div>
											<img class="img-responsive" src="img/pavimentacion-thumb.jpg" alt="Pavimentos" style="width: 100%">
											<div class="cover">
												<img class="img-responsive logo-white-mini" src="img/general/LOGO PNG BLANCO.png" alt="Concypa">
												<button data-toggle="modal" data-target="#modal-2" class="flat-button" type="button"><span><img class="icon-toggle" src="img/general/icon-next.png" alt="toggle"></span>Ver Proyecto</button>
											</div>
										</div>
									</div>
									<!--Ventana Model #2-->

									<div class="modal fade" id="modal-2" style="display: none;">
										<div class="modal-dialog  modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													<h4 class="modal-title" id="myModalLabel">I.E. Antonio Jose de Sucre</h4>
												</div>
												<div class="modal-body">
													<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
														<img class="img-responsive" id="img-modal2" src="img/Proyectos-Muestra/2.1 I.E. antonio Jose de Sucre.jpg" alt="">
													</div>
													<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
														<h4>I.E. Antonio Jose de Sucre</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--Fin de Modal #2-->



									<div class="sr-icons col-lg-4 col-md-6 col-sm-12 col-xs-12 box-content-project" style="padding-left: 0px;">
										<div class="box-project">
											<div class="label-blue">
												<h3 class="text-center title-label-blue">Coliseo Ditaires</h3>
											</div>
											<img class="img-responsive" src="img/obreros-thumb.jpg" alt="Proyectos" style="width: 100%">

											<div class="cover">
												<img class="img-responsive logo-white-mini" src="img/general/LOGO PNG BLANCO.png" alt="Concypa">
												<button class="flat-button"  data-target="#modal-3" data-toggle="modal"><span><img class="icon-toggle" src="img/general/icon-next.png" alt="toggle"></span>Ver Proyecto</button>
											</div>
										</div>
									</div>

									<!--Ventana Model #3-->

									<div class="modal fade" id="modal-3" style="display: none;">
										<div class="modal-dialog  modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													<h4 class="modal-title" id="myModalLabel">Coliseo Ditaires</h4>
												</div>
												<div class="modal-body">
													<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
														<img class="img-responsive" id="img-modal2" src="img/Proyectos-Muestra/5.jpg" alt="">
													</div>
													<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
														<h4>Titulo del Proyecto</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--Fin de Modal #3-->

																	
								
									<div class="sr-icons col-lg-4 col-md-6 col-sm-12 col-xs-12 box-content-project" style="padding-left: 0px;">
										<div class="box-project">
											<div class="label-blue">
												<h3 class="text-center title-label-blue">Bloque 19 UdeA</h3>
											</div>
											<img class="img-responsive" src="img/gruas-thumb.jpg" alt="Construccion" style="width: 100%">
											<div class="cover">
												<img class="img-responsive logo-white-mini" src="img/general/LOGO PNG BLANCO.png" alt="Concypa">
												<button data-target="#modal-4" data-toggle="modal" class="flat-button" type="button"><span><img class="icon-toggle" src="img/general/icon-next.png" alt="toggle"></span>Ver Proyecto</button>
											</div>
										</div>
									</div>
									
										<!--Ventana Model #4-->

									<div class="modal fade" id="modal-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													<h4 class="modal-title" id="myModalLabel">Bloque 19 UdeA</h4>
												</div>
												<div class="modal-body">
													<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
														<img class="img-responsive" id="img-modal1" src="img/Proyectos-Muestra/Bloque 19 UdeA.jpg" alt="">
													</div>
													<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
														<h4>Titulo del Proyecto</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--Fin Ventana Modal #4-->
									<div class="sr-icons col-lg-4 col-md-6 col-sm-12 col-xs-12 box-content-project" style="padding-left: 0px;">
										<div class="box-project">
											<div class="label-blue">
												<h3 class="text-center title-label-blue">Bloque extension U.de.A.</h3>
											</div>
											<img class="img-responsive" src="img/pavimentacion-thumb.jpg" alt="Pavimentos" style="width: 100%">
											<div class="cover">
												<img class="img-responsive logo-white-mini" src="img/general/LOGO PNG BLANCO.png" alt="Concypa">
												<button class="flat-button" type="button" data-target="#modal-5" data-toggle="modal"><span><img class="icon-toggle" src="img/general/icon-next.png" alt="toggle"></span>Ver Proyecto</button>
											</div>
										</div>
									</div>

										<!--Ventana Model #5-->

									<div class="modal fade" id="modal-5" style="display: none;">
										<div class="modal-dialog  modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													<h4 class="modal-title" id="myModalLabel">Bloque extension U.de.A.</h4>
												</div>
												<div class="modal-body">
													<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
														<img class="img-responsive" id="img-modal2" src="img/Proyectos-Muestra/Bloque extension U.de.A..jpg" alt="">
													</div>
													<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
														<h4>Titulo del Proyecto</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--Fin de Modal #5-->

									<div class="sr-icons col-lg-4 col-md-6 col-sm-12 col-xs-12 box-content-project" style="padding-left: 0px;">
										<div class="box-project">
											<div class="label-blue">
												<h3 class="text-center title-label-blue">Edificio de Borde de la I.U Colegio Mayor</h3>
											</div>
											<img class="img-responsive" src="img/obreros-thumb.jpg" alt="Construccion" style="width: 100%">
											<div class="cover">
												<img class="img-responsive logo-white-mini" src="img/general/LOGO PNG BLANCO.png" alt="Concypa">
												<button  data-target="#modal-6" data-toggle="modal" class="flat-button" type="button"><span><img class="icon-toggle" src="img/general/icon-next.png" alt="toggle"></span>Ver Proyecto</button>
											</div>
										</div>
									</div>
									<!--Ventana Model #6-->

									<div class="modal fade" id="modal-6" style="display: none;">
										<div class="modal-dialog  modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													<h4 class="modal-title" id="myModalLabel">Edificio de Borde de la I.U Colegio Mayor</h4>
												</div>
												<div class="modal-body">
													<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
														<img class="img-responsive" id="img-modal2" src="img/Proyectos-Muestra/FOTO 2.JPG" alt="">
													</div>
													<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
														<h4>Titulo del Proyecto</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--Fin de Modal #6-->
							</div>
			
						</section>
				</div><!--Fin del contenedor "content-position-absolute" -->
			<!--</div> Con este terminaba "service-img"-->
			<div class="column-right"></div>
		</section>
</section>
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
				<h5 class="contact-text text-muted text-center"><a href="#" title="" class="link-pdf">Politica de Tratamiento de datos</a></h5>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<ul class="list-menu-bottom">
					<li class="sr-contact"><a data-scroll class="link-menu text-muted" href="#top">Home</a></li>
					<li class="sr-contact"><a class="link-menu text-muted" href="proyectos.php">Proyectos</a></li>
					<li class="sr-contact"><a data-scroll class="link-menu text-muted" href="#servicios">Servicios</a></li>
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
	</footer>
		<?php require('inlcudes/scripts.php') ?>
	</body>
</html>