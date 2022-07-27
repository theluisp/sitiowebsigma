<?php
//Archivo de inserción de productos al sistema
include ('backend/backend_conexion.php');
$_POST['id_codigo']= $id_codigo;
$_POST['nombre']=$nombre;
$_POST['precio_venta']=$precio_venta;
$_POST['precio_compra']=$precio_compra;
$_POST['cantidad']=$cantidad;
$_POST['nombre_proveedor']=$nombre_proveedor;


$sql= "INSERT INTO productos (id_codigo, nombre, precio_venta, precio_compra, cantidad, nombre_proveedor
) VALUES ('$id_codigo','$nombre',$precio_venta, $precio_compra, $cantidad, '$nombre_proveedor' )";

if ( $conn->query( $sql ) === TRUE ) {
    $var = 'Producto registrado correctamente en el sistema.';
    echo "<script>alert('$var');window.history.back();
setTimeout('Redirect()', 4000);</script>";

} else {
    $var2 = 'Por favor intentalo de nuevo, error: ' . $conn->error;
    echo '<script language="javascript">alert('$var2');window.history.back();</script>';

}

$conn->close();

?>

