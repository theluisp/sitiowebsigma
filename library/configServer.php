<?php
$user="root";
$server="localhost";
$bd="sigmatie_sigma_store";
$password="mysql";
$conn=mysqli_connect($server, $user, $password, $bd);
if(!$conn){
    die ("Conexión fallida ".mysqli_connect_error());
}
//echo "Conexión exitosa";

?>