<style>
body {
 background-color: black;
}
</style>

<body style="background-color: black;
">
<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

// Notificar solamente errores de ejecución
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Notificar E_NOTICE también puede ser bueno (para informar de variables
// no inicializadas o capturar errores en nombres de variables ...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Notificar todos los errores excepto E_NOTICE
error_reporting(E_ALL ^ E_NOTICE);

// Notificar todos los errores de PHP (ver el registro de cambios)
error_reporting(E_ALL);

// Notificar todos los errores de PHP
error_reporting(-1);

// Lo mismo que error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

$cookieuser=$_COOKIE["usuario"];
$nombre_producto=$_GET["nombreprod"];
$precio=$_GET["precio"];
$id_producto=$_GET["codigprod"];
$imagen=$_GET['imagen'];


$cons= "INSERT INTO carrito (cookie_user, id_producto, imagen, nombre, precio)
VALUES($cookieuser,'$id_producto','$imagen','$nombre_producto',$precio);";
$resultado = $conn->query($cons);

if ($resultado = $conn->query($cons) ) {
 $var="El producto ha sido añadido correctamente";
echo "<script>alert('$var');window.history.back();
setTimeout('Redirect()', 4000);</script>";

} else {
    echo " Error al añadir producto, intente nuevamente: " . $conn->error;
}

?></body>