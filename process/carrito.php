<?php
error_reporting(E_PARSE);
include '../library/configServer.php';
include '../library/consulSQL.php';
session_start();




$suma = 0;
if(isset($_GET['precio'])){
    $_SESSION['producto'][$_SESSION['contador']] = $_GET['precio'];
    $_SESSION['contador']++;
}

echo '<table class="table table-dark">';
for($i = 0;$i< $_SESSION['contador'];$i++){
    $consulta="select * from producto where CodigoProd='".$_SESSION['producto'][$i]."'";
    $queryconsulta=$conn->query($consulta);
    while( $fila  = $queryconsulta->fetch_assoc()){
    echo "<tr><td><h5 style='color:white;'>".$fila['NombreProd']."</h5></td><td> <h5 style='color:white;'>".'$'.$fila['Precio']."</h5></td></tr>";
    $suma += $fila['Precio'];
    }
}
echo "<tr><td><h4 style='color:white;'>Subtotal</h4></td><td><h4 style='color:white;'>$".number_format($suma,2).'MXN'."</h4></td></tr>";
echo "</table>";
$_SESSION['sumaTotal']=$suma;

?>