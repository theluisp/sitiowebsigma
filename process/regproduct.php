<html>
    <head>
        <title>Admin</title>
        <meta charset="UTF-8">
        <meta http-equiv="Refresh" content="12;url=../configAdmin.php">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/media.css">
        <link rel="Shortcut Icon" type="image/x-icon" href="../assets/icons/logo.ico" />
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/autohidingnavbar.min.js"></script>
    </head>
    <body>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
        <?php
       // session_start();
        include '../library/configServer.php';
        include '../library/consulSQL.php';
        
        //$codeProd= $_POST['prod-codigo'];
        $nameProd= $_POST['prod-name'];
        $cateProd= $_POST['prod-categoria'];
        $priceProd= $_POST['prod-price'];
        $modelProd= $_POST['prod-model'];
        //$marcaProd= $_POST['prod-marca'];
        $stockProd= $_POST['prod-stock'];
        $codePProd= $_POST['prod-codigoP'];
        $descripcion= $_POST['descripcion'];
        $mercadolibre= $_POST['mercadolibre'];
        $color= $_POST['color'];
        $adminProd= "admin";

        if( !$nameProd=="" && !$cateProd=="" && !$priceProd=="" && !$modelProd=="" && !$stockProd=="" && !$descripcion=="" && !$color=="" && !$codePProd=="" &&  !$_FILES['img']['name']=="" && !$_FILES['img2']['name']=="" && !$_FILES['img3']['name']==""){
            //$verificar=  "select * from producto where CodigoProd='".$codeProd."'";
            $result31 = 0;
            
            if(4<=10){
                if(move_uploaded_file($_FILES['img']['tmp_name'],"../assets/img-products/".$_FILES['img']['name'] ))
                
                
                {
                    
                    if(move_uploaded_file($_FILES['img2']['tmp_name'],"../assets/img-products/".$_FILES['img2']['name'] )){}
                    if(move_uploaded_file($_FILES['img3']['tmp_name'],"../assets/img-products/".$_FILES['img3']['name'] )){}
                    
                    $regprod21= "INSERT INTO producto( Nombreprod, CodigoCat, Precio, Marca_y_modelo, Stock, NITProveedor, Imagen, Nombre, descripcion, Imagen2, link_mercado,imagen_3, color) VALUES ('$nameProd','$cateProd',$priceProd, '$modelProd',$stockProd,'$codePProd','".$_FILES['img']['name']."','$adminProd', '$descripcion','".$_FILES['img2']['name']."',
                    '$mercadolibre','".$_FILES['img3']['name']."','$color' )";
                    

        if ($conn->query($regprod21)) {
   echo '<img src="../assets/img/correctofull.png" class="center-all-contens">
                            <br>
                            <h3>El producto se añadio a la tienda con éxito</h3>
                            <p class="lead text-cente">
                                La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                                <a href="../configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                            </p>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error."";

                    
                  
                   
                   
                      echo '
                            <img src="../assets/img/incorrectofull.png" class="center-all-contens">
                            <br>
                            <h3>Ha ocurrido un error. Por favor intente nuevamente</h3>
                            <p class="lead text-cente">
                                La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                                <a href="../configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                            </p>';
            }

$conn->close();
                      
                }else{
                    echo ' 
                        <img src="../assets/img/incorrectofull.png" class="center-all-contens">
                         <br>
                         <h3>Ha ocurrido un error al cargar la imagen</h3>
                         <p class="lead text-cente">
                             La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                             <a href="../configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                         </p>';
                }
            }else{
                echo '
                    <img src="../assets/img/incorrectofull.png" class="center-all-contens">
                    <br>
                    <h3>El Código de producto ya esta registrado.<br>Por favor ingrese otro código de producto</h3>
                    <p class="lead text-cente">
                        La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                        <a href="../configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                    </p>';
            }
        }else {
            echo '
                <img src="../assets/img/incorrectofull.png" class="center-all-contens">
                <br>
                <h3>Error los campos no deben de estar vacíos</h3>
                <p class="lead text-cente">
                    La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                    <a href="../configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                </p>';
        }
        ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>