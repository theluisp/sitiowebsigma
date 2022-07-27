<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);
$NumPedidoDel= $_POST['num-pedido'];
$consP= "select * from venta where NumPedido='$NumPedidoDel'";
$resultdelp = $conn->query($consP);


if($resultdelb->num_rows>0){
$delete= "DELETE FROM venta WHERE NumPedido='".$NumPedidoDel."' ";
if($conn->query($delete) === TRUE){
      echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Numero de pedido eliminado éxitosamente</p>';  
    }
    else{
                echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>';   
    }
    
}else{
    echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El nombre de la categoria no existe</p>';
}
