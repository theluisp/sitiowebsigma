<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(3);

$nameCliente= $_POST['clien-name'];
$fullnameCliente= $_POST['clien-ape'];
$passCliente= $_POST['clien-pass'];
$passCliente2= $_POST['clien-pass1'];
$emailCliente= $_POST['clien-email'];
$passClientemd= md5($_POST['clien-pass']);

if(!$nameCliente=="" && !$emailCliente==""  && $passCliente==$passCliente2){
   // $verificar=  "select * from cliente where NIT='".$nitCliente."'";
    //$resultreg = $conn->query($verificar);
    //if($resultreg->num_rows<=0){


    
$ejecutar= "INSERT INTO cliente ( Nombre, Apellido, Clave, Email) VALUES ('$nameCliente','sigma', '$passClientemd','$emailCliente')";

$conn->query($ejecutar); 
    echo '<img src="assets/img/ok.png" class="center-all-contens"><br>El registro se completo con éxito';

}
    
else {
    echo '<img src="assets/img/error.png" class="center-all-contens"><br>Error los campos no deben de estar vacíos o las contraseñas no coinciden ';
}

$conn->close();
