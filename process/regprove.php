<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);
$nitProve= $_POST['prove-nit'];
$nameProve= $_POST['prove-name'];
$dirProve= $_POST['prove-dir'];
$telProve= $_POST['prove-tel'];
$webProve= $_POST['prove-web'];

if(!$nitProve=="" && !$nameProve=="" && !$dirProve=="" && !$telProve=="" && !$webProve==""){
    $verificar=  "select * from proveedor where NITProveedor='".$nitProve."'";
    $result = $conn->query($verificar);

    if($result>=0){
    $insertarprovee= "INSERT INTO proveedor (NITProveedor, NombreProveedor, Direccion,
    Telefono, PaginaWeb) VALUES ('$nitProve','$nameProve','$dirProve',$telProve,'$webProve')";
    $inserta=$conn->query($insertarprovee);
          

        if ($conn->query($insertarprovee) === FALSE) {
    
            echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Proveedor añadido éxitosamente</p>';
        }else{
           echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
        }
            }
    else{
        echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El número de NIT que ha ingresado ya existe.<br>Por favor ingrese otro número de NIT</p>';
    }
}else {
    echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Error los campos no deben de estar vacíos</p>';
}
