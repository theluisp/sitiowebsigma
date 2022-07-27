<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);
$nitProve= $_POST['nit-prove'];
$cons= "select * from proveedor where NITProveedor='$nitProve'";
$resultdeprove = $conn->query($cons);


if($resultdeprove->num_rows>0){
    $delete= "DELETE FROM proveedor WHERE NITProveedor='".$nitProve."' ";

    if($conn->query($delete) === TRUE){
        echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Proveedor eliminado éxitosamente</p>';
    }else{
       echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
    }
}else{
    echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El código de proveedor no existe</p>';
}
