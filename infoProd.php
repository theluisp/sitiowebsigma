
<?php
include './library/configServer.php';
include './library/consulSQL.php';
?>
<!DOCTYPE html>
<style>
 @media (min-width: 300px) and (max-width: 991px) {
        #buttoncss {
            max-width: 100%;
            
            
     
        }
    }
    #carru21{
        width: 360px;
        
    }
    
     @media (min-width: 300px) and (max-width: 991px) {
        #carru21 {
            max-width:100%;
            
     
        }
    }
</style>
<html lang="es">
<head>
          <link rel="shortcut icon" href="img/sigmad.png">

    <title><?php
        $CodigoProducto=$_GET['CodigoProd'];
                    $productoinfo= "select * from producto where CodigoProd='".$CodigoProducto."' AND CodigoCat!='FUN-UR' ";
                    $result = $conn->query($productoinfo);
                
if($result->num_rows>0){
                while($fila = $result->fetch_assoc()){
                    
                   echo $fila['NombreProd'];
                    
                }}
        
        ?></title>
    <?php include './inc/link.php'; ?>
</head>
<body id="container-page-product">
    <?php include './inc/navbar.php'; ?>
    <section id="infoproduct">
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>SIGMA <small class="tittles-pages-logo"> Tienda <img src="assets/img/SIGMA.png" width="30px;"/> </small></h1>
                </div>
                <?php 
                    $CodigoProducto=$_GET['CodigoProd'];
                    $productoinfo= "select * from producto where CodigoProd='".$CodigoProducto."' AND CodigoCat!='FUN-UR' ";
                    $result = $conn->query($productoinfo);
                
if($result->num_rows>0){
                while($fila = $result->fetch_assoc()){
                        echo '
                            <div class="col-xs-12 col-sm-6">
                                <h3 class="text-center">Información detallada del producto</h3>
                                <br><br>
                                <h4><strong>Nombre: </strong>'.$fila['NombreProd'].'</h4><br>
                                
                                <h4><strong>Marca y modelo: </strong>'.$fila['Marca_y_modelo'].'</h4><br><h4><strong>Ficha tecnica: </strong>'.$fila['descripcion'].'</h4>
                              <h4> <strong>Color:</h4> </strong><h4>'.$fila['color'].' </h4>
                              <h4><strong>Unidades disponibles:</strong> '.$fila['Stock'].'</h4>
<h4> <strong>Precio:</h4> </strong><h4>$'.$fila['Precio'].'  &nbsp;MXN'.'</h4>
  <h4><strong>Garantía:</strong> 20 días hábiles, siempre y cuando el producto y la caja se encuentren en buenas condiciones.</h4>
                            </div>
                            
                          
                            <div class="col-xs-12 col-sm-6">
                                <br><br><br>
                                <div class="col-xs-12 col-sm-6 col-md-4" >
                        <div class="thumbnail"  id="carru21"  class="img-responsive">
                             
                            
<div id='.$fila['CodigoProd'].' class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target='.'#'.$fila['CodigoProd'].' data-slide-to="0" class="active"></li>
        <li data-target='.'#'.$fila['CodigoProd'].' data-slide-to="1"></li>
       <li data-target='.'#'.$fila['CodigoProd'].' data-slide-to="1"></li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
        <div class="item active" >
             <img   class="img-responsive"
src="assets/img-products/'.$fila['Imagen'].'">
        </div>
        <div class="item">
           <img  
src="assets/img-products/'.$fila['Imagen2'].'">
        </div>
         <div class="item">
           <img  
src="assets/img-products/'.$fila['imagen_3'].'">
        </div>
        
    </div>
        
    <!-- Controls -->
    <a class="left carousel-control" href='.'#'.$fila['CodigoProd'].' data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href='.'#'.$fila['CodigoProd'].' data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>


                            </div>
                          
                            <div class="col-xs-12 text-center">
                              <br> <center>
                              
                              <button value="'.$fila['CodigoProd'].'" class="btn btn-lg btn-success botonCarrito" id="buttoncss" ><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp; Añadir al carrito&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                              
                              <br><br><button class="btn btn-lg btn-primary" id="buttoncss"><a style="text-decoration: none; color:white;" href="product.php" ><img src="https://img.icons8.com/ultraviolet/20/000000/shop.png"/>&nbsp;&nbsp;Regresar a la tienda&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><button><br><br>
                              </center>
                            </div>
                        ';
                             $consultamercado=  "select * from producto where CodigoProd=".$fila['CodigoProd']." AND link_mercado is NOT null ";
                                    $resultsxm = $conn->query($consultamercado);
                                            if( $resultsxm->num_rows > 0){
                                            echo  '<div class="col-xs-12 text-center"><center><a href="'.$fila['link_mercado'].'"><button id="buttoncss"  class="btn btn-lg btn-warning"><img src="https://img.icons8.com/cotton/18/000000/open-box--v1.png"/>&nbsp; Envios a todo México </button></a></center>
                                          
</div>
                                         </div>
                                       </div>
                                   </div>     
                                   ';}
                                    else{
                                        echo '<h4 style="color:red;"><b>Este producto no cuenta con envio nacional.</b></h4>
                                        
                                         
</div>
                                         </div>
                                       </div>
                                   </div>  ';
                                    }
                    }
}
                else{
                    
                }
                ?>
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>  
</body>
</html>