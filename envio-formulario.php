<?php
$nombre_usuario=$_POST['nombre'];
$email_usuario=$_POST['email'];
$consulta_usuario=$_POST['mensaje'];
// Creo 3 variables que me toman lo que se envía por POST de cada valor del formulario

$destino="joale9809@gmail.com";

$asunto="Consulta enviada desde www.SITP-Service.com";

$mensaje="Tu Nombre es: ".$nombre_usuario."\r\n";
$mensaje.="Tu Email es: ".$email_usuario."\r\n";
$mensaje.="Consulta: ".$consulta_usuario."\r\n";

$remitente="From: algo@jonylif.com.co";

mail($destino, $asunto, $mensaje, $remitente);


header("Location:index.php?i=ok");
// SI EL FORMULARIO SE ENVIO CORRECTAMENTE, COLOCAR EN LA URL DESPUES DEL INDEX.PHP UN SIGNO DE PREGUNTA, UNA LETRA I, Y UN IGUAL OK
?>
