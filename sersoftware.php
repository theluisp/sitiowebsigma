<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sigma Software</title>                   <link rel="shortcut icon" href="img/sigmad.png">

        <?php include './inc/link.php';  
        ?>
                <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    </head>
    <style>
   section.awSlider.carousel{
            display:table;
            z-index:1;
            -moz-box-shadow: 0 0 0px #fff;
            -webkit-box-shadow: 0 0 0px #fff;
            box-shadow: 0 0 1px rgba(1,1,1,.5);
        }

        section.awSlider{


            margin:-50px auto;
            padding:40px;
            position:static;
            display:table;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        section.awSlider:hover > img{
            -ms-transform: scale(1.2);
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
            opacity:1;
        }

        section.awSlider img{
            pointer-events: none;
        }

        section.awSlider > img{
            position:absolute;
            top:30px;
            z-index:1;
            transition:all .1s;
            filter: blur(1.8vw);
            -webkit-filter: blur(2vw);
            -moz-filter: blur(2vw); 
            -o-filter: blur(2vw); 
            -ms-filter: blur(2vw);
            -ms-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
            opacity:.5;
        }
        #dimension2 { 
            width: 1000px;
            margin-left: auto;

            margin-right: auto;

        }
        #dimension{
            margin-top: -15px;

            margin-right: auto;

            margin-left: auto;

            margin-right: auto;

        }
        
   #imgRes{
            width: 400px;
        }
        @media (min-width: 500px) and (max-width: 991px) {
    #imgRes {
        width: 300px;
            }
}
@media (min-width: 500px) and (max-width: 991px) {
    footer {
    display: none;
            }
}
@media (min-width: 500px) and (max-width: 991px) {
    #carru{
    width: 400px;
         margin-left: -50px;
  
            margin-right: auto;
            }
}
        
        .zoom {
  transition: transform .2s; /* Animation */
  width: 400px;
  
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
                                font-weight: 700;font-size : 1.5cm;

" >DESARROLLO DE SOFTWARE A LA MEDIDA<img src="img/ordenador-portatil%20(1).png"/></h1>
               <div  style="padding: 20px; width:100;  text-align: center;"> 
                     <h3>  <p>Desarrollo de software a la medida para procesos pequeños a medianos, ofreciendo soluciones inteligentes a tráves del diseño, desarrollo e implementación de herramientas tecnológicas para la mejora y automatización de los procesos de su negocio. </p></h3><br><h4> <b>Ejemplos de algunos proyectos de software desarrollados:</b></h4> <br><br>
                   <section class="awSlider" ><div class="carru" id="carru" align="center">
                <div  class="carousel slide" data-ride="carousel" id="dimension"  style="width:100%;">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" >
                        <li data-target=".carousel" data-slide-to="0" class="active"></li>
                        <li data-target=".carousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox"  >
                        <div class="item active" >
                            <img src="img/s2.jpg"  style="width:100%;height: 100%;
 margin-left: auto;   margin-right: auto;">
                            <div class="carousel-caption" style="color:black;"><b>Sistema de gestión de pago de nóminas a trabajadores del despacho contable Enriquez y asociados</b></div>
                        </div>
                        <div class="item">
                            <img src="img/s1.jpg"  style="width:100%;height: 100%; margin-left: auto;

            margin-right: auto;"> 
                            <div class="carousel-caption" style="color:black;"><b>Sistema de gestión inventario y punto de venta para farmacia local</b></div>
                        </div>
                        
                        
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previo</span>
                    </a>
                    <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                       </div></div>
            </section>
<br><br>
                     <div  style="padding: 20px; width:100;   text-align: center;"> <h2><b> Desarrollando los proyectos a tráves de 10 pasos: </b></h2><br>
                   <h3><b>1.-Entrevista</b><img src="https://img.icons8.com/office/40/000000/collaboration.png"/>  </h3 > <h3>Entrevista con el cliente<br> para explorar su necesidad tecnológica </h3><br>
                   <h3><b>2.- Propuesta tecnológica</b> <img src="https://img.icons8.com/cotton/40/000000/laptop-computer--v4.png"/></h3><h3>Detalle del alcance del proyecto, <br>tecnologia, propuesta, tiempo de desarrollo y cotización</h3><br>
                   <h3><b>3.-Contrato</b> <img src="https://img.icons8.com/cotton/40/000000/regular-document.png"/></h3><h3>Entrega de contrato de desarrollo <br>y fechas compromiso.</h3>
                         <br>
                   <h3><b>4.-Ingenieria</b><img src="https://img.icons8.com/ios-filled/40/000000/mechanistic-analysis.png"/></h3><h3>Analisis a detalle de los procesos<br> y actores que participan en el sistema.</h3><br>
                   <h3><b>5.-Trazado de procesos</b><img src="https://img.icons8.com/flat-round/40/000000/sorting-arrows-horizontal.png"/></h3><h3>Se realiza un trazado de los procesos <br>que estaran integrados dentro del sistema  </h3>
                  <br>   <h3><b>6.-Codificación</b><img src="https://img.icons8.com/officel/40/000000/code.png"/></h3><h3>Se realiza la programación del proyecto  </h3>   <br>  
                      <img src="img/lenguajes-programacion-web.jpg" id="imgRes" class="zoom" >
                         <h3><b>8.-Pruebas internas</b><img src="https://img.icons8.com/cotton/40/000000/laptop-computer--v4.png"/></h3><h3>Testeo de los modulos implementados <br>en el sistema para la comprobación integra del mismo.</h3>   <br> 
                          <h3><b>9.-Puesta en producción</b><img src="https://img.icons8.com/fluent/48/000000/rocket.png"/></h3><h3>Proyecto listo para ponerlo en marcha.</h3>   <br> 
                          <h3><b>10.-Mantenimiento y evolución</b><img src="https://img.icons8.com/fluent/48/000000/gear.png"/></h3><h3>Listos para asistirte e implementar futuros cambios.</h3>   <br> 
                         <br><br><br><br>
                   <H2><b>Cotiza tu proyecto de software o consulta cualquier duda dejandonos un mensaje.</b></H2>
                         <div class="container-contact100" >
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>


		<div class="wrap-contact100" >
			<span class="contact100-form-symbol">
				<img src="img/LOGO.png" alt="SYMBOL-MAIL">
			</span>

			<form class="contact100-form validate-form flex-sb flex-w" method="post" action="process/send.php">
				<span class="contact100-form-title">
					CONTACTO
				</span>

				<div class="wrap-input100 rs1 validate-input" data-validate = "El nombre es requerido">
					<input class="input100" type="text" name="nombre" id="nombre" placeholder="Nombre">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1 validate-input" data-validate = "El email no cumple con el formato requerido">
					<input class="input100" type="text" name="email" id="email" placeholder="Email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "El mensaje es requerido">
					<textarea class="input100" name="mensaje" id="mensaje" placeholder="MENSAJE"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Enviar    &nbsp;&nbsp;<i class="fa fa-paper-plane" aria-hidden="true"></i>

					</button>
				</div>
			</form>
		</div>
	</div>
                   </div></div>
         </div></div>
   <footer><br>
    <ul class="list-unstyled text-center">
        
        <a href="#" class="social-icon all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Correo electronico" style="color:white;"> 
           <img src="img/gmail%20(2).png">
       21.luisemmanuelp@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a> <a href="#" class="social-icon all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Telefono" style="color:white;"> 
           <img src="img/whatsapp%20(1).png">
    &nbsp;&nbsp;    2227581691        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="social-icon all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Correo electronico" style="color:white;"> 
           <img src="img/gmail%20(2).png">
       sigma.sw.contacto@gmail.com </a>
        
        
        
    </ul>
  
  <center>  <h5  style="color:white;"><br>Aviso de privacidad - Todos los derechos reservados.
<br>SIGMA accesorios, software y reparaciones &copy; 2021</h5></center>
</footer>
