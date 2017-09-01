<?php 
	if (!empty(['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
		require('../_AdminPanel/app/controllers/conection.php');
		$mysqli->set_charset('utf8');
		$query = $mysqli->query("SELECT * FROM servicios");
		$field = mysqli_num_rows($query);
		$return = '';
		$i = 1;

		while ($field = $query->fetch_assoc()) {
			$return.="<div class='sr-icons service-box col-lg-3 col-md-3 col-sm-6 col-xs-12'>
							<div class='inside-block-service'>
								<div class='label-top'>
									<h3 class='label-title text-center'>".$field['Titulo']."</h3>
								</div>
								<div class='icon-content'>
									<img class='img-responsive img-white-logo' src='".$field['Icono']."'>
								</div>
								<div class='cartel' id='cartel".$i."' style='display: none;'>
									<p>".$field['Contenido']."</p>
								</div>
								<button id='boton".$i."' class='flat-button' type='button'><span><img id='icon".$i."' class='icon-toggle' src='img/general/icon-next.png' alt='toggle'></span>Ver Mas</button>
							</div>
						</div>";
				$i++;
		}
	

	echo $return;
}

$mysqli->close();
	
 ?>





