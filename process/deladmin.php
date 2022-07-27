<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

//sleep(5);
$nameAd= $_POST['name-admin'];
$consA= "select * from administrador where Nombre='$nameAd'";
$resultdel = $conn->query($consA);

if($resultdel->num_rows>0){
    $delete= "DELETE FROM administrador WHERE Nombre='".$nameAd."' ";
    if($conn->query($delete) === TRUE){
        echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Administrador eliminado éxitosamente</p>'; 
       
    }
    else{
        echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
    }
    
}else{
    echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El nombre del administrador no existe</p>';
}

