<?php
session_start();
 $usuarioestandar=$_SESSION["nombreUser"];
include './library/configServer.php';
//include '/library/consulSQL.php';
include './inc/link.php';

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
?>    

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Tienda</title> <meta name="description" content="SIGMA accesorios, software y reparaciones.">
      <link rel="shortcut icon" href="img/sigmad.png">

</head>
<body id="container-page-product">
    <?php include './inc/navbar.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <section id="store">
       <br>
        <div class="container">
            <div class="page-header">
              <h1>Tienda <small class="tittles-pages-logo">SIGMA</small> <img src="assets/img/SIGMA.png" width="30px;"/> </h1> <br><h4>-Pide y recoge en nuestra sucursal vía corta o en nuestra sucursal solidaridad nacional <br>-Pide y nosotros te lo entregamos algún punto popular cercano a ti<br>-Pide y te enviamos tu pedido vía mercado libre a todo México.</h4>
            </div>
            <br><br>
            <div class="row">
                <div class="col-xs-12">
                    <ul id="store-links" class="nav nav-tabs" role="tablist">
                      <li role="presentation"><a href="#AU-AL" role="tab" data-toggle="tab" aria-controls="all-product" aria-expanded="false" style="color:black;">Aúdifonos</a></li>
                        <li role="presentation"><a href="#AU-BT" role="tab" data-toggle="tab" aria-controls="all-product" aria-expanded="false" style="color:black;">Aúdifonos Bluetooth</a></li>
                    
                     <li role="presentation"><a href="#CARG" role="tab" data-toggle="tab" aria-controls="all-product" aria-expanded="false" style="color:black;">Cargadores y cables USB</a></li> 
                     <li role="presentation"><a href="#FUN-UR" role="tab" data-toggle="tab" aria-controls="all-product" aria-expanded="false" style="color:black;">Fundas de uso rudo</a></li> 
                         <li role="presentation"><a href="#AX-GAMER" role="tab" data-toggle="tab" aria-controls="all-product" aria-expanded="false" style="color:black;">Accesorios gamer</a></li> 
                      <li role="presentation" class="dropdown active">
                        <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false"  style="color:black;">Todas las categorías <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                          <!-- ==================== Lista categorias =============== -->
                          <?php
                            $categorias= "SELECT * FROM categoria";
                            $result = $conn->query($categorias);

                            while($cate = $result->fetch_assoc()){
                                echo '<li>
                                        <a href="#'.$cate['CodigoCat'].'" tabindex="-1" role="tab" id="'.$cate['CodigoCat'].'-tab" data-toggle="tab" aria-controls="'.$cate['CodigoCat'].'" aria-expanded="false">'.$cate['Nombre'].'
                                        </a>
                                    </li>';
                            }
                          ?>
                          <!-- ==================== Fin lista categorias =============== -->
                        </ul>
                      </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade" id="all-product" aria-labelledby="all-product-tab">
                          <br><br>
                        <div class="row">
                        <?php
                        $consulta=  "select * from producto where Stock > 0  order by rand()";
                           $results = $conn->query($consulta);
                            if($results>0){
                                while($fila = $results->fetch_assoc()){
                                   echo '
                                   <div class="col-xs-12 col-sm-6 col-md-4" >
                             <div class="thumbnail" style="  max-width: 100%; width:420px; @media (min-width: 400px) and (max-width: 991px) {width:340px;  height:"400px;}">
                              <img id="responsive21" class="responsive21"  
style="height:350px; margin-left: 0px;  max-width: 100%; min-width: 70%;"  src="assets/img-products/'.$row['Imagen'].'">
                                         <div class="caption">
                                           <h3>'.$fila['Marca'].'</h3>
                                           <p>'.$fila['NombreProd'].'</p>
                                           <p>$'.$fila['Precio'].'</p>
                                           <p class="text-center">
                                               <a href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                                   </div>     
                                   ';
                               }   
                            }else{
                                echo '<h2>No hay productos existentes</h2>';
                            }  
                        ?>
                        </div>
                      </div><!-- Fin del contenedor de todos los productos -->
                        
       
                 
                        <?php
                        $var1="Select * from categoria"; 
                        $results1 = $conn->query($var1);
                                while($fila1 = $results1->fetch_assoc()){
                                     echo '<div role="tabpanel" class="tab-pane fade active in" id="'.$fila1 ['CodigoCat'].'" aria-labelledby="'.$fila1['CodigoCat'].'-tab"><br>';
                                    
                                    $consulta=  "select * from producto where Stock > 0 AND CodigoCat='".$fila1['CodigoCat']."' ";
                                      $resultsx = $conn->query($consulta);
                                  
                            if($resultsx>0){
                                while($fila69 = $resultsx->fetch_assoc()){
                                   echo '
                                  <div class="col-xs-12 col-sm-6 col-md-4">
                                       <div class="thumbnail">
                                         <img src="assets/img-products/'.$fila69['Imagen'].'">
                                         <div class="caption">
                                           <h3>'.$fila69['Marca'].'</h3>
                                           <p>'.$fila69['NombreProd'].'</p>
                                           <p>Disponibilidad: '.$fila69['Stock'].'</p>
                                           <p>$'.$fila69['Precio'].'</p>
                                           <p class="text-center">
                                               <a href="infoProd.php?CodigoProd='.$fila69['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila69['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                             <br> <br> ';
                                            
                                    $consultamercado=  "select * from producto where CodigoProd=".$fila69['CodigoProd']." AND link_mercado is NOT null ";
                                    $resultsxm = $conn->query($consultamercado);
                                            if( $resultsxm->num_rows > 0){
                                            echo  '<a href="'.$fila69['link_mercado'].'"><button class="btn btn-success btn-sm "><img src="https://img.icons8.com/cotton/18/000000/open-box--v1.png"/>&nbsp; Envios a todo México vía mercado libre</button></a>
                                           </p>

                                         </div>
                                       </div>
                                   </div>     
                                   ';}
                                    else{
                                        echo '<center><h5 style="color:red;" align="center"><b>Este producto no cuenta con envio nacional.</b></h5>
                                           </center></p>

                                         </div>
                                       </div>
                                   </div>  ';
                                    }
                               }   
                            }else{
                                echo '<h2>No hay productos existentes</h2>';
                            }    echo '</div>'; 
                        }
                        ?>
                        </div>
                      </div> 
            </div></div>
                <!-- ==================== Contenedores de categorias =============== -->
                   
    </section>
    <?php include './inc/footer.php'; 
    
    ?>
    <script>
        $(document).ready(function() {
            $('#store-links a:first').tab('show');
        });
    </script>
</body>
</html>