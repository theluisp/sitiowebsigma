<?php
session_start();
$_SESSION = array();

include ('backend_conexion.php');
date_default_timezone_set('America/Mexico_City');
$curdate = date('Y-m-d h:i:s', time());
$query3=mysqli_query($conn, "UPDATE usuarios set cerro_sesion='$curdate'  WHERE usuario='".$_SESSION['user']."' ");
echo '<script language="javascript">alert("Has cerrado sesión correctamente");
window.location.href="../index.php";</script>';
exit();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();
?>
