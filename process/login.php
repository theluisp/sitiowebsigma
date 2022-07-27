<?php
    session_start();
    include '../library/configServer.php';
    include '../library/consulSQL.php';
    sleep(2);
    $nombre=$_POST['nombre-login'];
    $clave=md5($_POST['clave-login']);
    $radio=$_POST['optionsRadios'];
    if(!$nombre==""&&!$clave==""){
        $verUser="select * from cliente where Nombre='$nombre' and Clave='$clave'";
        $resultu= $conn->query($verUser);                  

    $row_cnt = mysqli_num_rows($resultu);

        $verAdmin="select * from administrador where Nombre='$nombre' and Clave='$clave'";
        $resulta = $conn->query($verAdmin);                  
        $rowscliente = $resulta->  num_rows;
        if($radio=="option2"){
            
            
            if($resulta>0){
                $_SESSION['nombreAdmin']=$nombre;
                $_SESSION['claveAdmin']=$clave;
                echo '<script> location.href="configAdmin.php"; </script>';
            }else{
              echo '<img src="assets/img/error.png" class="center-all-contens"><br>Error nombre o contraseña invalido'; 
            }
        }
        if($radio=="option1"){
           
            if($row_cnt>0){
                $_SESSION['nombreUser']=$nombre;
                $_SESSION['claveUser']=$clave;
                echo "<script> location.href='index.php ' ; </script>";
            }else{
                echo '<img src="assets/img/error.png" class="center-all-contens"><br>Error nombre o contraseña invalido';
            }
        }

    }else{
        echo '<img src="assets/img/error.png" class="center-all-contens"><br>Error campo vacío<br>Intente nuevamente';
    }