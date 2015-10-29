<?php

//Importamos las variables del formulario de contacto
$nombre = addslashes($_POST['nombre']);
$email = addslashes($_POST['email']);
$mensaje = addslashes($_POST['mensaje']);
 
//Preparamos el mensaje de contacto
$cabeceras = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$asunto = "Compras"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "contacto@ddfurniture.com.mx"; //cambiar por tu email
$contenido = "$nombre ha enviado un mensaje\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n\n"
. "Mensaje: $mensaje\n"
. "\n";
 
//Enviamos el mensaje y comprobamos el resultado
if (mail($email_to, $asunto ,$contenido ,$cabeceras )) {
 
//Si el mensaje se envía muestra una confirmación
	echo "<script>alert('Gracias, su mensaje se envio correctamente.')
	window.location.assign('http://ddfurniture.com.mx/contacto.html')
	</script>
	";

}else{ 
//Si el mensaje no se envía muestra el mensaje de error
die("Error: Su información no pudo ser enviada, intente más tarde");
}
?>