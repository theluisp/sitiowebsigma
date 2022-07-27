<?php
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$destino= "sigma.sw.contacto@gmail.com";
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];


$contenido= "Nombre: ".$name."\n Correo: ".$email." \nMensaje:".$message;
$success = mail($destino, "Contacto", $contenido,$headers);
if (!$success) {
    $errorMessage = error_get_last()['message'];
}
else{
echo '<script>alert("El mensaje ha sido enviado correctamente.Gracias por ponerte en contacto con SIGMA accesorios, software y reparaciones.");window.location.href="../index.php";</script>';
}
?>