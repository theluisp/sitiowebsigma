<?php
session_start();
include ('backend_conexion.php');
date_default_timezone_set('America/Mexico_City');
$curdate = date('Y-m-d h:i:s', time());
$usuario = $_POST["usuario"];
$contrasenia= $_POST["contrasenia"];
$query=mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario='".$usuario."' ");

$hash=mysqli_fetch_array($query);

$num_row = mysqli_num_rows($query);      

    

  
if($num_row==1){
if (password_verify($_POST["contrasenia"], $hash['contrasenia'])){  
    $_SESSION['user']=$usuario; 
     
   /** if($usuario=='yola'){
    header('Location: ../select.php');
    $query2=mysqli_query($conn, "UPDATE usuarios set ultima_actividad='$curdate'  WHERE usuario='".$usuario."' ");
    }  **/
    
   
         header('Location: ../main_admin.php');
         $query2=mysqli_query($conn, "UPDATE usuarios set ultima_actividad='$curdate'  WHERE usuario='".$usuario."' ");
        
}
    
     else   {
           header('Location: ../index.php?var=<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Usuario o contraseña incorrectos, por favor intente de nuevo.  '); 
         
     }
    
}

elseif($num_row==0){
    header('Location: ../index.php?var=<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Usuario o contraseña incorrectos, por favor intente de nuevo.  '); 
}




?>