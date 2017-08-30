<?php 
if (!empty(['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require('../_AdminPanel/app/controllers/conection.php');
	$query = $mysqli->query("SELECT * FROM slider");
	$field = mysqli_num_rows($query);
	$indicators = '';
	$carousel = '';
	$return = '';
	$i = 0;
	$url ='';

	if ($field > 0) {
		$indicators = "<ol class='carousel-indicators'>";
		$carousel = "<div class='carousel-inner'>";
		while ($field = $query->fetch_assoc()) {
			if ($i == 0) {
				$url = substr($field['URL'], 9);
				$indicators.="<li data-target='#slider-top' data-slide-to='".$i."' class='active'></li>";
				$carousel.="<div class='item active'>
						  <img src='".$url."' alt='".$field['ALT']."'>
						  <div class='carousel-caption'>
						  	<h3 class='slider-caption'>".$field['Titulo']."</h3>
						  	<p class='slider-descrip'>".$field['Descripcion']."</p>
						  </div>
						</div>";
			}else{
				
				$url = substr($field['URL'], 9);
				$indicators.="<li data-target='#slider-top' data-slide-to='".$i."'></li>";
				$carousel.="<div class='item'>
							  <img src='".$url."' alt='".$field['ALT']."'>
							  <div class='carousel-caption'>
							  	<h3 class='slider-caption'>'".$field['Titulo']."'</h3>
							  	<p class='slider-descrip'>'".$field['Descripcion']."'</p>
							  </div>
							</div>";
			}
			$i++;
		}

		$indicators.="</ol>";
		$carousel.="</div>
					<a class='left carousel-control' href='#slider-top' data-slide='prev'>
					<span class='glyphicon glyphicon-chevron-left'></span>
					<span class='sr-only'>Anterior</span>
					</a>
					<a class='right carousel-control' href='#slider-top' data-slide='next'>
				    <span class='glyphicon glyphicon-chevron-right'></span>
				    <span class='sr-only'>Siguiente</span>
					</a>";
		$return .= $indicators . $carousel;
	}

	echo $return;

}
$mysqli->close();
 ?>