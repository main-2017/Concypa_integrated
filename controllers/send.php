<?php
// Envio de alertas por mail 
/**
 * @version 1.0
 */


	require 'class.phpmailer.php';
	require 'class.smtp.php';


					// Datos de la cuenta de correo utilizada para enviar vía SMTP
					$smtpHost = "concypa.com";  // Dominio alternativo brindado en el email de alta 
					$smtpUsuario = "noreply@concypa.com";  // Mi cuenta de correo
					$smtpClave = "VSCV.8.07.1988";  // Mi contraseña

					// Email donde se enviaran los datos cargados en el formulario de contacto


					$mail = new PHPMailer();
					$mail->IsSMTP();
					$mail->SMTPAuth = true;
					$mail->Port = 587; 
					$mail->IsHTML(true); 
					$mail->CharSet = "utf-8";

					// VALORES A MODIFICAR //
					$mail->Host = $smtpHost; 
					$mail->Username = $smtpUsuario; 
					$mail->Password = $smtpClave;
					$mensaje = "Mensaje enviado por: ";
                    $mensaje .= $_POST['nombre'] ."\n\n";
                    $mensaje .= "Mensaje: \n\n";
                    $mensaje .= $_POST['comentario']."\n\n";
                    $mensaje .= "Teléfono: " .$_POST['telefono']."\n\n";
                    $mensaje .= "Responder a " .$_POST['correo'];
                    
					$mail->From = 'noreply@concypa.com'; // Email desde donde envío el correo.
					$mail->FromName = 'Concypa';
					$mail->AddAddress('informacion@concypa.com');
		
					
					$mail->Subject = "Mensaje enviado a través de sitio web"; // Este es el titulo del email.
					$mensajeHtml = nl2br($mensaje);
					$mail->Body = "{$mensajeHtml} <br/><br/>Diseñado y desarrollado por Main Group<br/>"; // Texto del email en formato HTML
					$mail->AltBody = "{$mensaje} \n\n Diseñado y desarrollado por Main Group"; // Texto sin formato HTML
					$estadoEnvio = $mail->Send(); 
					
                if($estadoEnvio){
                    header("Location: ../thanks.php");
                }
                
			

 ?>