<?php
$servernameC= 'localhost';
$usuarioC= 'id14891011_root';
$passwordC = 'FerElChido2101@';
$databaseC = 'id14891011_punto_venta';
$conn = new mysqli($servernameC,$usuarioC,$passwordC,$databaseC);

if($conn->connect_error){
    die("conexion erronea".$conn->connect_error);
}
?>