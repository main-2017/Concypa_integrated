<?php 
	require 'conection.php';
	session_start();
	$mysqli->set_charset('utf8');
	$url = "";
	$titulo = $mysqli->real_escape_string($_POST['titulo']);
	$descripcion = $mysqli->real_escape_string($_POST['descripcion']);
	$estado = $mysqli->real_escape_string($_POST['estado']);
	$visible = $mysqli->real_escape_string($_POST['visible']);
	$visible = (int) $visible;
	$uploadedfileload="true";
	$uploadedfile_name = $_FILES['uploadedfile2']['tmp_name'];
	$uploadedfile_size=$_FILES['uploadedfile2']['size'];
	$uploadedfile_type = $_FILES['uploadedfile2']['type'];
	$uploadedthumb_name = $_FILES['uploadedthumb']['tmp_name'];
	$uploadedthumb_size = $_FILES['uploadedthumb']['size'];
	$uploadedthumb_type = $_FILES['uploadedthumb']['type'];
	echo $_FILES['uploadedfile2']['name'];
	$msg = "";
	$url_normal = "../../../img/projects/normal/";
	$url_thumb = "../../../img/projects/thumb/";
	if (($uploadedfile_size > 200000) && ($uploadedthumb_size > 420000)){
		$msg = $msg ."El archivo supera el tamaño máximo permitido.";
		$uploadedfileload="false";
	}

	if (!($uploadedfile_type == "image/jpeg" OR $uploadedfile_type == "image/png") && !($uploadedthumb_type == "image/jpeg" OR $uploadedthumb_type == "image/png")){
		$msg = $msg ." El archivo debe ser JPG o PNG. Otros archivos no son permitidos";
		$uploadedfileload="false";
	}

	$file_name=$_FILES['uploadedfile2']['name'];
	$thumb_name=$_FILES['uploadedthumb']['name'];
	$add = "../../../img/projects/normal/$file_name";
	$add_thumb = "../../../img/projects/thumb/$thumb_name";
	if($uploadedfileload == "true"){
		if((move_uploaded_file ($uploadedfile_name, $add)) && (move_uploaded_file($uploadedthumb_name, $add_thumb))){
			echo "Han sido subidos satisfactoriamente";
			$query = $mysqli->query("INSERT INTO proyectos (Imagen, Thumb,Titulo, Descripcion, Estado, Visible) VALUES ('../../../img/projects/normal/".$file_name."', '../../../img/projects/thumb".$thumb_name."', '".$titulo."', '".$descripcion."', '".$estado."', '".$visible."')");
		}

		if($query)
			header("Location: ../../resources/views/admin/index.php");
		else
			header("Location: ../../resources/views/admin/error.php");

	}else{
		echo $msg;
	}


	$mysqli->close();

 ?>