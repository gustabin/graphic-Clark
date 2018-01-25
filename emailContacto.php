<?php
	session_start(); 
	$email = strtolower ($_POST ['email']);
	$nombre = $_POST ['Nombre'];
    $telefono = $_POST ['Telefono'];
	$mensaje = $_POST ['Mensaje'];

		// =========================envio de correo notificandome que alguien se contacto ===================
		$destino ="gustabin@yahoo.com";
		$asunto = "Contact Job Interview";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="Hello, somebody was contact you by form in graphiclark.com<br><br>
		The data sending is the following:<br>
		<b>Email: </b>$email<br>
		<b>Name: </b>$nombre<br>
		<b>Phone: </b>$telefono<br>
		<b>Message:  </b>$mensaje<br>"; //ojo el final de esta linea es importante!!!				
		$yourWebsite = "citadr.com/graphiclark.com";
		$yourEmail   = "info@citadr.com";
	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;

//var_dump($cuerpo);
//die();
		mail($destino,$asunto,$cuerpo,$cabeceras);
		
		$data=array("exito" => '1');
		die(json_encode($data));
?>