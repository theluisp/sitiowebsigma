<?php
 include '../library/configServer.php';
 include '../library/consulSQL.php';

 sleep(4);
 
 $codeProd= $_POST['prod-code'];
 $consCP= "select * from producto where CodigoProd='$codeProd'";
 $resultdelp = $conn->query($consCP);
// $tmp = $consCP->fetch_assoc();
 //$imagen=$tmp['Imagen'];

 if($resultdelp->num_rows>0){
    $delete= "DELETE FROM producto WHERE CodigoProd='".$codeProd."' ";
   

 if($conn->query($delete) === TRUE){
    $carpeta='../assets/img-products/';
    $directorio=$carpeta.$imagen;
    chmod($directorio, 0777);
    //unlink($directorio);
    echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">El producto se elimino de la tienda con éxito</p>';  
    }
    else{
                echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>';   
    }
    
}else{
      echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El código del producto no existe</p>';
}

    
