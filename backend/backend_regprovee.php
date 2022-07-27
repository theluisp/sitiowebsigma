<?php
//Archivo de inserción de proveedores
include ('backend/backend_conexion.php');
$_POST['nombre']= $nombre;
$_POST['direccion']=$direccion;
$_POST['telefono']= $telefono;
$_POST['email']= $email;

$sql= "INSERT INTO proveedores (nombre, direccion, telefono, email
) VALUES ('$usuario','$direccion','$telefono','$email' )";

if ( $conn->query( $sql ) === TRUE ) {
    $var = 'Proveedor registrado correctamente en el sistema';
    echo "<script>alert('$var');window.history.back();
setTimeout('Redirect()', 4000);</script>";

} else {
    $var2 = 'Por favor intentalo de nuevo, error: ' . $conn->error;
    echo '<script language="javascript">alert('$var2');window.history.back();</script>';

}

$conn->close();

?>

