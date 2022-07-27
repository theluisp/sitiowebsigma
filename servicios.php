<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
    <head><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Servicios</title>                   
        <link rel="shortcut icon" href="img/sigmad.png">
        <?php include './inc/link.php';  
        ?> <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    </head>
    <style>
    #dimension2 { 
            width: 300px;
            margin-left: auto;

            margin-right: auto;

        }
    #jumbotron-indefx{ 
            margin: 0px;
    padding: 140px 35px;
    color: #fff;
        }
    
    h1,h2,h3,h4,h5,h6{
    
color:black;

}
        footer{
    width: 100%;
    color: #fff;
    background-color:#080808;
    padding: 1px;
    position: sticky;
        bottom: 0;
    left: 0;
            margin-top: 1700px;
}
     @media (min-width: 300px) and (max-width: 991px) {
   footer{
    width: 100%;
    color: #fff;
    background-color:black;
    padding: 0px;
    position: relative;
        bottom: 0;
    left: 0;
       height: 220px;
            margin-top:3400px;
}
}

      @media (min-width: 300px) and (max-width: 991px) {
   .buttons-responsive{
    width:100%;
   
}
}
      @media (min-width: 300px) and (max-width: 991px) {
   .buttons-responsives{
    width: 100%;
   
}
@media (min-width: 300px) and (max-width: 991px) {
   #dimension2{
    max-width: 100%;
   
}
@media (min-width: 300px) and (max-width: 991px) {
   #dimension21{
    max-width: 100%;
   
}
}
.zoom {
  transition: transform .2s; /* Animation */
  width: 300px;
  
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
 </style>
     <div id="container-page-indexh">
        <?php include './inc/navbar.php'; ?>
                 <div id="jumbotron-indefx">

                     <h1 style="text-align:center;
                                font-weight: 700;font-size : 1.1cm;"><b>SERVICIOS Y REPARACIONES <br><h5>SIGMA TECHNOLOGIES</h5></b><i class="fa fa-wrench" aria-hidden="true"></i>
</h1>
             
<div  style=" float:left; text-align: left; "> 
<br><h3 ><b>Sitios web</b></h3>
<br> <img src="img/paginaweb.png" id="dimension2"  class="zoom" alt="Imagen descriptiva de sitios webs para negocios"/><div class="buttons-responsive" id="buttons-responsive">
<h4>La imagen y presencia digital que su producto, <br>idea o negocio necesita, <br>nos ajustamos a su presupuesto. <br>Sitios web desarrollados por<br> ingenieros en software.</h4><br> <center><a href="detalleweb.php">
   
    <button type="button"  class="btn btn-info">Más información. <i class="fa fa-info" aria-hidden="true"></i>

</button></a> <a href="https://www.linkedin.com/in/lpena21/" ><button type="button"   class="btn btn-success">Linkedin del desarrollador. <img src="https://img.icons8.com/fluent/24/000000/linkedin.png"/>
    </button></a></center></div></div>


<div  style=" float:right; text-align: right; "> 
<h3><b>Servicio técnico y reparación de celulares (software)</b></h3>
<img src="img/androidsw.png"  class="zoom"  style="width: 300px; margin-left: auto;

            margin-right: auto; " alt="Imagen software de celulares"/>
    <div style="width:70%; margin-left: auto;

            margin-right: auto;"><h4 style="text-align:center;"><br>Cargas de software, desbloqueo cuentas de google,<br> roms personalizadas, flasheos, rooteos.</h4></div>
</div><div  style=" float:left; text-align: left; ">
    <br><br><br><h3><b>Software a la medida</b></h3>
<img src="img/codigo.png"  id="dimension2" class="zoom" style="width: 350px; margin-left: auto;

            margin-right: auto; " alt="Imagen software de celulares"/>
    <div style="width:70%; margin-left: auto;

            margin-right: auto;"><h4 style="text-align:center;"><br>Soluciones de software para su pequeña empresa.<br> Partiendo de un analisis de procesos <br> e implementando soluciones acorde a las necesidades especificas del cliente.</h4> </div><center><a href="sersoftware.php"><button type="button"  class="btn btn-info">Más información. <i class="fa fa-info" aria-hidden="true"></i>

</button></a>
<a href="https://www.linkedin.com/in/lpena21/"><button type="button"  class="btn btn-success">Linkedin del desarrollador. <img src="https://img.icons8.com/fluent/24/000000/linkedin.png"/>
    </button></a>
</center>
                     
                     
                     </div>
                     
<div style=" float:right; text-align: right;"> <br><h3 style="text-align:center;"><b>Servicio técnico y reparación de celulares (hardware)</b></h3>
<img src="img/celulares.png" id="dimension2"  class="zoom" style="width:300px;" alt="Fotografia de Hardware y componentes de celulares"/>
    <div style="width:70%; margin-left: auto;

            margin-right: auto;">  <h4 style="text-align:center; margin-left: auto;

            margin-right: auto;">Dispositivos mojados, cambio de baterias, <br>cambio de displays completos, centros de carga.</h4></div>
                      <br><br><br><br><h3 style="text-align:center;" ><b>Servicios informáticos</b></h3>
                     <img src="img/ti.png"  class="zoom" style="width:300px;" alt="Fotografia de Hardware y componentes de celulares"/>
    <div style="width:70%; margin-left: auto;

            margin-right: auto;"> <h4><p style="text-align:center;"><b style="color:red;">Reparación</b> y mantenimiento de pc y laptops, <br><b style="color:red;">formateo </b>de bajo y alto nivel, mantenimiento preventivo, <br>instalacion de software (<b style="color:red;">office y activación de windows</b>), <br><b style="color:red;">instalación</b> de programas y de sistemas operativos windows y distribuciones de linux, <br><b style="color:red;">cambios de discos duros.<br>¡Trae tu equipo ya!</b></p></h4></div>
                     </div>
                    
                    

         </div>
 </div><center> <div align="center" class="col-xs-12 col-sm-6" >
                <div class="page-header">
                    <h3><b>Úbicanos</b></h3>
                </div>
            <iframe align="center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.236882142453!2d-98.18575108520454!3d19.097261256266766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc17de01cf56f%3A0x97379d09cd9426ae!2sCarr.%20V%C3%ADa%20Corta%20a%20Sta.%20Ana%2C%20Puebla%2C%20Pue.!5e0!3m2!1ses!2smx!4v1619470015325!5m2!1ses!2smx" width="320" height="220" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div></center>
        
    
