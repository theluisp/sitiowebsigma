<?php
//Archivo de inserción de usuarios
include ('backend_conexion.php');
$usuario= $_POST['usuario'];
$contrasenia=$_POST['contrasenia'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$pass_cifrado=password_hash($contrasenia, PASSWORD_DEFAULT);

$sql= "INSERT INTO usuarios (usuario, contrasenia, nombre_completo, apellidos
) VALUES ('$usuario', '$pass_cifrado','$nombres','$apellidos' )";

if ( $conn->query( $sql ) === TRUE ) {
    $var = 'Usuario registrado correctamente';
    echo "<script>alert('$var');window.history.back();
setTimeout('Redirect()', 4000);</script>";

} else {
    $var2 = 'Por favor intentalo de nuevo, error: ' . $conn->error;
    echo "<script>alert('$var2');window.history.back();</script>";

}

$conn->close();

?>

