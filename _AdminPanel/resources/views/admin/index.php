<?php 
session_start();

if (!(isset($_SESSION['user']))) {
	header('Location: ../../../');
}
?>

<!DOCTYPE html>
<html>
<?php require('../../../public/style_includes/head.php') ?>
<body>
	<main id="wrap">
	<?php include('../../components/navbar.php') ?>
		<!-- Barra de pestañas -->
		<ul class="nav nav-tabs" id="pestañas">
			<li class="active"><a id="btn-inicio" href="#inicio" data-toggle="tab">Inicio</a></li>
				<li><a id="btn-servicios" href="#servicios" data-toggle="tab">Servicios</a></li>
			<li><a id="btn-proyectos" href="#proyectos" data-toggle="tab">Proyectos</a></li>
		</ul>
		<!-- Fin de Barra de pestañas -->
		<!-- Contenido en tabs -->
		<div class="tab-content">
			<section id="inicio" class="tab-pane fade in active">
				<div class="container-fluid">
					<h1 class="text-center text-muted">Editar Slider</h1>
					<div id="slider-edit-content">
						<!-- Contenido generado dinamicamente -->
					</div>
					<br>
						<div class="trans">
							<button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#addModal">Agregar +</button>
						</div>
				</div>
			</section>
			<section id="servicios" class="tab-pane fade"><h1 class="text-center">Servicios</h1>
				<div id="services-edit-content"><!-- Contenido generado dinamicamente --></div>
			</section>
			<section id="proyectos" class="tab-pane fade"><h1 class="text-center">Proyectos</h1>
				<div class="container-fluid">
					<div id="project-edit-content">
					<!-- Contenido generado dinamicamente -->
					</div>
				</div>
				<br>
				<br>
				<button class='btn btn-primary btn-md center-block' type='button' name='addProject' data-toggle='modal' data-target='#uploaderProjectModal'>Agregar +</button>
			</section>
		</div>
		<?php include('../../components/modals.php') ?>
		</main>
	<?php include('../../components/footer.php') ?>
	<?php require('../../../public/style_includes/scripts.php') ?>
</body>
</html>