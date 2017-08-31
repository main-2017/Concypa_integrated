<?php 
	require 'conection.php';
	session_start();
	$mysqli->set_charset('utf8');
	$titulo = $mysqli->real_escape_string($_POST['titulo']);
	$descripcion = $mysqli->real_escape_string($_POST['descripcion']);
	$alt = $mysqli->real_escape_string($_POST['alt']);
	$uploadedfileload="true";
	$uploadedfile_size=$_FILES['uploadedfile']['size'];
	echo $_FILES['uploadedfile']['name'];
	$msg = "";

	if ($_FILES['uploadedfile']['size'] > 20000000){
		$msg = $msg ."El archivo supera el tamaño máximo permitido.";
		$uploadedfileload="false";
	}

	if (!($_FILES['uploadedfile']['type'] == "image/jpeg" OR $_FILES['uploadedfile']['type'] == "image/png")){
		$msg = $msg ." El archivo debe ser JPG o PNG. Otros archivos no son permitidos";
		$uploadedfileload="false";
	}

	$file_name=$_FILES['uploadedfile']['name'];
	$add = "../../../img/slider/$file_name";
	if($uploadedfileload == "true"){
		if(move_uploaded_file ($_FILES['uploadedfile']['tmp_name'], $add)){
			echo "Ha sido subido satisfactoriamente";
			$query = $mysqli->query("INSERT INTO slider(Nombre, URL, Titulo, Descripcion, ALT) VALUES ('".$_FILES['uploadedfile']['name']."' , '../../../img/slider/".$_FILES['uploadedfile']['name']."', '".$titulo."', '".$descripcion."', '".$alt."'); ");
		}else{
			header("Location: ../../resources/views/admin/error.php");
		}

	}else{
		echo $msg;
	}

	header("Location: ../../resources/views/admin/index.php");

	$mysqli->close();

 ?>