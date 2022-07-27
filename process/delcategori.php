<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);
$codeCateg= $_POST['categ-code'];
$consB=  "select * from categoria where CodigoCat='$codeCateg'";
$resultdelb = $conn->query($consB);


if($resultdelb->num_rows>0){
$delete= "DELETE FROM categoria WHERE CodigoCat='".$codeCateg."' ";
if($conn->query($delete) === TRUE){
      echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Categoria eliminada éxitosamente</p>';  
    }
    else{
                echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>';   
    }
    
}else{
    echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El nombre de la categoria no existe</p>';
}
    
