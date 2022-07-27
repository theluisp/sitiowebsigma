<?php  session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<head>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

<title>SIGMA ACCESORIOS PARA CELULARES.</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Audifonos, cargadores, fundas para tu celular, accesorios gamer. Todo a muy buenos precios. Reparaciones, desarrollo web y más ¡Conócenos!."/>
    <meta name="keywords" content=" Accesorios para celular, Servicios informáticos, reparaciones para celular, diseño web, páginas web, empresas de tecnología, audifonos bluetooth, Audífonos, Cargadores, fundas para celular, fundas de uso rudo, Reparaciones de celulares en puebla, diseño de páginas web, software, ingenieria en software, vía corta a santa ana,  cristal templado, cables usb, accesorios baratos para celular en Puebla,  reparaciones de software, cuenta google.">
    <meta name="author" content="Ing.Luis Peña">
    
    <meta name="image" content="img/LOGO.jpg">
   
    <meta itemprop="name" content="Sigma accesorios para celular, desarrollo web y reparaciones.">
    <meta itemprop="description" content="Encuentra todo lo que necesitas para tu celular, manejamos reparaciones de celulares, desarrollo de páginas web y servicios informáticos.">
    <meta itemprop="image" content="img/LOGO.jpg">
    
    
    <meta Property="og:title" content="Sigma accesorios para celular, desarrollo web y reparaciones">
    <meta Property="og:description" content="Encuentra todo lo que necesitas para tu celular, manejamos reparaciones de celulares, desarrollo de páginas web y servicios informáticos.">
    <meta Property="og:image" content="https://www.sigmatienda.com.mx/img/LOGO.jpg">
    <meta Property="og:url" content="https://www.sigmatienda.com.mx">
    <meta Property="og:site_name" content="Sigma tienda de accesorios para celular">
    <meta Property="og:locale" content="en_US">
    <meta Property="og:type" content="article">
    <meta Property="fb:app_id" content="256429972174675">
    
    <meta Property="article:section" content="Social Media">
    <meta Property="article:author" content="Sigma tienda de accesorios para celular">
    <meta Property="article:tag" content="Social Media">
    <link rel="canonical" href="https://www.sigmatienda.com.mx" />

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-165993394-1');
    </script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

   
    <?php include './inc/link.php'; ?>
    <link rel="shortcut icon" href="img/sigmad.png">

</head>
<script>
    $('section.awSlider .carousel').carousel({
        pause: "hover",
        interval: 1000
    });

    var startImage = $('section.awSlider .item.active > img').attr('src');
    $('section.awSlider').append('<img src="' + startImage + '">');

    $('section.awSlider .carousel').on('slid.bs.carousel', function() {
        var bscn = $(this).find('.item.active > img').attr('src');
        $('section.awSlider > img').attr('src', bscn);
    });
</script>
<style>

.button-wrapper {
  display: block;
  text-align: center;
}
.cta-button:hover {
  background-color: #777;
}
.cta-button {
  background-color: white;
  color: #black !important;
}
.button {
  border: none;
  border-radius: 3em;
  box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
  display: inline-block;
  font-size: 1em;
  padding: 1em 2em;
  width: auto;
}
    #cajacookies {
        box-shadow: 0px 0px 5px 5px #808080;
        background-color: white;
        color: black;
        padding: 20px;
        margin-left: -5px;
        margin-right: -5px;
        margin-bottom: 0px;
        position: fixed;
        top: 65px;
        width: 100%;
        z-index: 5;
    }

    #cajacookies button {
        color: black;
    }

    @media (min-width: 400px) and (max-width: 991px) {
        #cajacookies {
            box-shadow: 0px 0px 5px 5px #808080;
            background-color: white;
            color: black;
            padding: 20px;
            margin-left: -5px;
            margin-right: -5px;
            margin-bottom: 0px;
            position: fixed;
            top: 65px;
            width: 55%;
            z-index: 5;
        }

        #cajacookies button {
            color: black;
        }

    }


    body {
        font-family: 'Quicksand';
    }

    section.awSlider.carousel {
        display: table;
        z-index: 2;
        -moz-box-shadow: 0 0 4px #fff;
        -webkit-box-shadow: 0 0 4px #fff;
        box-shadow: 0 0 15px rgba(1, 1, 1, .5);
    }

    section.awSlider {


        margin: -50px auto;
        padding: 50px;
        position: static;
        display: table;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    section.awSlider:hover>img {
        -ms-transform: scale(1.2);
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
        opacity: 1;
    }

    section.awSlider img {
        pointer-events: none;
    }

    section.awSlider>img {
        position: absolute;
        top: 60px;
        z-index: 1;
        transition: all .1s;
        filter: blur(1.8vw);
        -webkit-filter: blur(2vw);
        -moz-filter: blur(2vw);
        -o-filter: blur(2vw);
        -ms-filter: blur(2vw);
        -ms-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
        opacity: .5;
    }

    #dimension2 {
        width: 100%;
        margin-left: auto;

        margin-right: auto;

    }

    #dimension {
        margin-top: -7%;
        width: 110%;
        margin-right: auto;

        margin-left: -5%;

        margin-right: auto;

    }


    body {
        background-image: url("assets/img/white.jpg");
    }

    footer {
        width: 100%;
        color: #fff;
        background-color: #080808;
        padding: 1px;
        position: static;
        bottom: 0;
        left: 0;
        margin-top: 0px;
    }

    @media (min-width: 300px) and (max-width: 991px) {
        footer {
            width: 100%;
            color: #fff;
            background-color: black;
            padding: 2px;
            position: static;
            bottom: 0;
            left: 0;
            height: 200px;
            margin-top: 0px;
        }
    }

    @media (min-width: 300px) and (max-width: 991px) {
        #carru {
            max-width: 160%;
            width: 300%;
            margin-left: -65px;
            height: 0px;

        }
    }

    @media (min-width: 300px) and (max-width: 991px) {
        #img-carru {
            max-width: 400%;

            width: 2250px;


        }
    }

    @media (min-width: 300px) and (max-width: 991px) {
        #responsive21 {
            height: 280px;
            width: 200%;
            margin-left: -40px;

        }
    }

    @media (min-width: 300px) and (max-width: 991px) {
        iframe {
            margin: auto;
            max-width: 100%;
            height: auto;

        }
    }
</style>
<br>


<body id="container-page-index">
    <?php include './inc/navbar.php'; ?> <div class="container-container-lg">
   <div class="jumbotron" id="jumbotron-index" style="  background-image: url('assets/img/white.jpg');">
        <section class="awSlider"  style=" background-image: url('assets/img/white.jpg');">
            <div class="carru" id="carru" align="center">
                <div class="carousel slide" data-ride="carousel" id="dimension" style=" ">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target=".carousel" data-slide-to="0" class="active"></li>
                        <li data-target=".carousel" data-slide-to="1"></li>
                        <li data-target=".carousel" data-slide-to="2"></li>
                        <li data-target=".carousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="assets/img/Fundas%20de%20uso%20rudo%20.jpg"  alt="Fundas de uso rudo $110" id="dimension2">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item"> <a href="detalleweb.php">
                                <img src="assets/img/pagina%20web.jpg" alt="Servicio de desarrollo de páginas web"  class="img-carru" id="dimension2">
                                <div class="carousel-caption"></div>
                            </a>
                        </div>
                        <div class="item"> <a href="servicios.php">
                                <img src="assets/img/reparaciones%20de%20software.jpg" alt="Servicio de reparaciones de software en celulares"  class="img-carru">
                                <div class="carousel-caption"></div>
                            </a>
                        </div>
                        <div class="item"><a href="servicios.php">
                                <img src="assets/img/sistemas%20.jpg"  alt="Servicios informáticos"  id="dimension2" class="img-carru">
                                <div class="carousel-caption"></div>
                            </a>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                    <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                </div>
            </div>
        </section>

    </div>
	</div>
    <section id="new-prod-index">
        <div class="container">
			<div class="row">
  <div class="col-sm-6 col-md-2">
    <a class="thumbnail">
      <img src="img/samsung.png" alt="...">
    </a>
  </div>
				  <div class="col-sm-6 col-md-3">
    <a class="thumbnail">
      <img  src="img/xiaomi.png" WIDTH="180PX"  >
    </a>
  </div>
				  <div class="col-sm-6 col-md-4">
    <a  class="thumbnail">
      <img src="img/motorola.png" WIDTH="390PX" >
    </a>
  </div>
				  <div class="col-sm-6 col-md-3">
    <a  class="thumbnail">
      <img src="img/apple.png" WIDTH="180PX" >
    </a>
  </div>
  ...
</div>

            <div class="page-header">
                <h1>Lo mejor de sigma accesorios para celulares.<?php $usuarioestandar=$_GET["usuario"];?></h1>

            </div>
            <div class="row">
                <?php
            include 'library/configServer.php';
            // include 'library/consulSQL.php';
            $consulta= "SELECT * FROM producto where Stock > 0  ORDER BY CodigoProd limit 6";
                $result = $conn->query($consulta);
                  if($result->num_rows>0){
                      while($row = $result->fetch_assoc()) {
                         $Imagen=$row['Imagen'];
                         $Marca= $row['Marca'];
                         $NombreProd= $row['NombreProd'];
                         $Precio= $row['Precio'];
                         $CodigoProd=$row['CodigoProd'];
                         echo '
                        <div class="col-xs-12 col-sm-6 col-md-4" >
                             <div class="thumbnail" style="  max-width: 100%; width:420px; @media (min-width: 400px) and (max-width: 991px) {width:340px;  height:"400px;}">
                              <img id="responsive21" class="responsive21"  
style="height:350px; margin-left: 0px;  alt="Imagen del producto en cuestión" max-width: 100%; min-width: 70%;"  src="assets/img-products/'.$row['Imagen'].'">
                               <div class="caption">
                                 <h3>'.$row['Marca'].'</h3>
                                 <p>'.$row['NombreProd'].'</p>
                                 <p>Solo quedan '.$row['Stock'].' unidad(es)</p>
                                 <p>$'.$row['Precio'].'</p>
                            
                                 <p class="text-center">
                                     <a href="infoProd.php?CodigoProd='.$row['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                 <button value='.$CodigoProd.'  class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button> <br> <br>';
                           $consultamercado=  "select * from producto where CodigoProd=".$row['CodigoProd']." AND link_mercado is NOT null ";
                                    $resultsxm = $conn->query($consultamercado);
                                            if( $resultsxm->num_rows > 0){
                                            echo  '<a href="'.$fila69['link_mercado'].'"><button class="btn btn-success btn-sm "><img src="https://img.icons8.com/cotton/18/000000/open-box--v1.png" alt="Imagen mercado libre"/>&nbsp; Envios a todo México vía mercado libre</button></a>
                                           </p>

                                         </div>
                                       </div>
                                   </div>     
                                   ';}
                                    else{
                                        echo '<button  class="btn btn-danger btn-sm ">&nbsp;No disponible para envio nacional.
                                           </p>

                                         </div>
                                       </div>
                                   </div>     ';
                                    }
                            
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          echo "<script>
        $(document).ready(function() {
    $('#carrito-compras-tienda').load('process/carrito.php');
    $('.botonCarrito').click(function(){
        $('#carrito-compras-tienda').load('process/carrito.php?imagen='$Imagen'&nombreprod='$NombreProd'&precio='$Precio'& codigprod='$CodigoProd');
        
        $('.modal-carrito').modal('show');
    });
    $('.carrito-button-nav').click(function(){
        $('#container-carrito-compras').animate({height: 'toggle'},200);
    });
});
</script>";
                          //mysqli_close($conn);
                     }   
                  }else{
  echo 'No hay datos que mostrar ';
                  }  
              ?>
            </div><br><br>
            <center><div class="button-wrapper" style="color:black;">
  <a class="button cta-button" href="product.php" style="color:black;     text-decoration:none;
" ><b>ENCUENTRA TODO LO QUE NECESITAS PARA TU CELULAR AQUÍ. <img src="https://img.icons8.com/flat-round/38/000000/arrow--v1.png" alt="Flecha a la derecha"/></b></a>
</div>
                
            </center>
        </div>
    </section>
    <section id="reg-info-index">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 text-center">
                    <article style="margin-top:20%;">
                        <p><i class="fa fa-users fa-4x"></i></p>
                        <h3>Registrate</h3>
                        <h4>Registrate para recibir las últimas ofertas, novedades y descuentos especiales de nuestros productos en tú correo electronico.</h4>
                        <p><a href="registration.php" class="btn btn-info btn-block" style="background-color:#F2680D;    border-color: #F2680D;
">REGISTRARSE </a></p>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6"><br><br><br><br><br><br>
                    <img src="assets/img/fundas para celular.jpg" alt="Fundas para celular" class="img-responsive" style="width: 400px; margin-left: auto;

            margin-right: auto; ">
                </div>
            </div>
        </div>
    </section>
    <section id="distribuidores-index" style="background-color:#8f9491;">
        <div class="container">

            <div class="col-xs-12 col-sm-6">

            </div>
            <div class="col-xs-12 col-sm-6">

            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="page-header">
                    <h2>Úbicanos</h2><br>
                    <h5>Carr. vía corta a sta. Ana número 11222, Col. Seda Monsanto, Puebla, Pue, México<br>
                    Frente a la central de abastos Puebla</h5>
                </div>

                <center>



                    
                    <iframe align="center" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15081.086786076616!2d-98.1839592!3d19.0957331!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51c0dac6c2d7bb32!2sSIGMA%20ACCESORIOS%20PARA%20CELULARES%2C%20INGENIERIA%20EN%20SOFTWARE%20%2C%20SERVICIOS%20INFORM%C3%81TICOS%20Y%20REPARACIONES.!5e0!3m2!1ses!2smx!4v1622772898595!5m2!1ses!2smx" width="1080" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


                </center>
            </div>
        </div>
    </section>

</body>
<style>
    a{color: white;}
</style>
      <footer><br>
   <center><img src="img/sello.png" alt="Sello de calidad" style="width:10%;" /> <ul class="list-unstyled text-center" align="center"> 
         
     <small><a href="mailto: contacto@sigmatienda.com.mx" class="social-icon all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Correo electronico" style="color:white;"> 
           <img src="img/gmail%20(2).png" alt="Gmail">
       contacto@sigmatienda.com.mx	 </a> </small><small><a href="mailto:sigma.sw.contacto@gmail.com" class="social-icon all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Correo electronico" style="color:white;"> 
      
        <img src="img/gmail%20(2).png" alt="Gmail">
21.luisemmanuelp@gmail.com  </a></small><small><a href="mailto:21.luisemmanuelp@gmail.com" class="social-icon all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Telefono" style="color:white;"> 
           <img src="img/whatsapp%20(1).png" alt="Telefono">
        &nbsp;  22-12-26-49-79       </a> </small>
        <small><a href="https://www.instagram.com/sigma_tienda_/" class="social-icon all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Instagram" style="color:white;"> 
         <img src="https://img.icons8.com/fluent/38/000000/instagram-new.png" alt="Instagram"/>
        &nbsp;@sigma_tienda_       </a> </small>
        
        
        
    </ul></center>
  
  <center>  <h5  style="color:white;"><br>Aviso de privacidad - Todos los derechos reservados.
<br>SIGMA accesorios, software y reparaciones &copy; 2021</h5></center>
</footer>


</html>
<script>
    /* ésto comprueba la localStorage si ya tiene la variable guardada */
    function compruebaAceptaCookies() {
        if (localStorage.aceptaCookies == 'true') {
            cajacookies.style.display = 'none';
        }
    } 

    /* aquí guardamos la variable de que se ha
    aceptado el uso de cookies así no mostraremos
    el mensaje de nuevo */
    function aceptarCookies() {
        localStorage.aceptaCookies = 'true';
        cajacookies.style.display = 'none';
    }

    /* ésto se ejecuta cuando la web está cargada */
    $(document).ready(function() {
        compruebaAceptaCookies();
    });
</script>