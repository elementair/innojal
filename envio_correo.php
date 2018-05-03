<?php
	$nombreContacto = $_POST['nombreContacto'];
	$emailContacto = $_POST['emailContacto'];
	$asuntoContacto = $_POST['asuntoContacto'];
	$mensajeContacto = $_POST['mensajeContacto'];

	require './lib/PHPMailerAutoload.php';
	//require("./lib/PHPMailer.php");
	$mail = new PHPMailer;

	//Luego tenemos que iniciar la validación por SMTP:
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Host = "mail.tdesystems.com.mx"; // SMTP a utilizar. Por ej. smtp.elserver.com
	$mail->Username = "mgamboa@tdesystems.com.mx"; // Correo completo a utilizar
	$mail->Password = "moro58"; // Contraseña
	$mail->Port = 587; // Puerto a utilizar

	//Con estas pocas líneas iniciamos una conexión con el SMTP. Lo que ahora deberíamos hacer, es configurar el mensaje a enviar, el //From, etc.
	$mail->From = "mgamboa@tdesystems.com.mx"; // Desde donde enviamos (Para mostrar)
	$mail->FromName = "SITIO WEB(Innojal)";

	//Estas dos líneas, cumplirían la función de encabezado (En mail() usado de esta forma: “From: Nombre <correo@dominio.com>”) de //correo.
	$mail->AddAddress("element.earias20@gmail.com"); // Esta es la dirección a donde enviamos
	$mail->AddAddress("innojal@valion-capital.com");
	$mail->IsHTML(true); // El correo se envía como HTML
	$mail->Subject = "Correo de contacto"; // Este es el titulo del email.
	$body = 'Asunto: '.$asuntoContacto;
	$body = $body.' Correo de persona que contacta: '.$emailContacto;
	$body = $body.' Nombre de persona que contacta: '.$nombreContacto;
	$body = $body.' Mensaje de persona que contacta: '.$mensajeContacto;
	$mail->Body = $body; // Mensaje a enviar
	$exito = $mail->Send(); // Envía el correo.

	//También podríamos agregar simples verificaciones para saber si se envió:
	if($exito){
	echo 'El correo fue enviado correctamente en breve nos comunicamos con su merced.';
	}else{
	echo 'Hubo un inconveniente. Contacta a un administrador.';
	}

