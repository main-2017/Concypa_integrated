<?php 
if (!empty(['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require('../_AdminPanel/app/controllers/conection.php');
	$query = $mysqli->query("SELECT * FROM proyectos WHERE Visible = 1 AND Estado = 'En ejecucion'");
	$field = mysqli_num_rows($query);
	$return = '';
	$i = 0;
	

	if ($field > 0) {
		while ($field = $query->fetch_assoc()) {
			$imagen = substr($field['Imagen'], 9);
			$thumb = substr($field['Thumb'], 9);
			$return.="<div class='sr-icons col-lg-4 col-md-6 col-sm-12 col-xs-12 box-content-project' style='padding-left: 0px;'>
						<div class='box-project'>
							<div class='label-blue'>
								<h3 class='text-center title-label-blue'>".$field['Titulo']."</h3>
							</div>
							<img class='img-responsive imagen' src='".$thumb."' alt='Construccion' style='width: 100%'>
							<div class='cover'>
								<img class='img-responsive logo-white-mini' src='img/general/LOGO PNG BLANCO.png' alt='Concypa'>
								<button data-toggle='modal' data-target='#modal-".$i."' class='flat-button' type='button'><span><img class='icon-toggle' src='img/general/icon-next.png' alt='toggle'></span>Ver Proyecto</button>
							</div>
						</div>
					</div>
				
					<!--Model #".$i."-->
					<div class='modal fade' id='modal-".$i."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
						<div class='modal-dialog modal-lg' role='document'>
							<div class='modal-content'>
								<div class='modal-header'>
									<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
										<span aria-hidden='true'>&times;</span>
									</button>
									<h4 class='modal-title' id='myModalLabel'>".$field['Titulo']."</h4>
								</div>
								<div class='modal-body'>
									<div class='col-lg-12 col-sm-12 col-md-12 col-xs-12'>
										<h4 class='text-center'>".$field['Titulo']."</h4>
										<br>
											<div class='col-lg-6 col-sm-12 col-md-6 col-xs-12'>
												<img class='img-responsive' id='img-modal1' src='".$imagen."' alt=''>
											</div>
										<p>".$field['Descripcion']."</p>
									</div>
								</div>
							</div>
						</div>
					</div>	
";
		$i++;
		}
	}

	echo $return;

}
$mysqli->close();
?>