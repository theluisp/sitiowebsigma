<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sigma diseño de páginas web</title>
        <?php include './inc/link.php';  
        ?>
                   <link rel="shortcut icon" href="img/sigmad.png">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            width: 300px;
        }
        @media (min-width: 500px) and (max-width: 991px) {
    #imgRes {
        width: 200px;
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

@media only screen and (max-width: 680px) {
  .carousel-caption {
    display: none;
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
                                font-weight: 700;font-size : 1.5cm;">
                         DISEÑO DE PÁGINAS WEB<img src="https://img.icons8.com/color/48/000000/working-with-a-laptop.png"/></h1>
               <div  style="padding: 20px; width:100;  text-align: center;"> <h1><b>Diseño profesional y personalizado</b> </h1><br>
                     <h3>  <p >Diseño y desarrollo de páginas web enfocadas a incrementar <br>y atraer un mayor número de clientes para su microempresa o negocio <br>para causar un impacto visual positivo en el cliente.</p></h3><br><h4> <b>Ejemplos de algunos proyectos web desarrollados:</b></h4> <br><br>
                   <section class="awSlider"><div class="carru" id="carru" align="center">
                <div  class="carousel slide" data-ride="carousel" id="dimension"  style="width:80%;">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" >
                        <li data-target=".carousel" data-slide-to="0" class="active"></li>
                        <li data-target=".carousel" data-slide-to="1"></li>
                        <li data-target=".carousel" data-slide-to="2"></li>
                        <li data-target=".carousel" data-slide-to="3"></li>
                     <li data-target=".carousel" data-slide-to="4"></li></ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox"  >
                        <div class="item active" >
                            <img src="img/p2.jpg"  style="width:100%;height: 100%;
 margin-left: auto;   margin-right: auto;">
                         <div class="carousel-caption"><h4 style="color:white;">Sitio web para el negocio de fertilizantes DIENDA ubicado en Tepeaca, Puebla.
                            <br>El sitio fue realizado con las tecnologias de html, css, php, bootstrap y base de datos mysql para el carrito de compras.</h4> </div>
                        </div>
                        <div class="item"><a href="https://encargofacil.net/">
                            <img src="img/encargo%20f%C3%A1cil.jpg"  style="width:60%;height: 60%; margin-left: auto;

            margin-right: auto;"> 
                            <div  class="carousel-caption" style="  background-color: white; 
"><h4 style="color:black;"><b>Sistema web para el negocio de comida rápida Encargo fácil úbicado en buenos aires Argentina.
                            <br>El sitio fue realizado con las tecnologias de html, css3, y php para la lista de compras.</b></h4></div>
                       </a> </div>
                        <div class="item">
                            <img src="img/p4.jpg" style="width:100%;height: 100%; margin-left: auto;

            margin-right: auto;">
                            <div class="carousel-caption"  style="background-color:black;"><h4 style="color:white;"><b>Página web con portafolio para el negocio: "Servicios industriales Argueta", ubicado en la ciudad de Puebla.<br>
                            El sitio web es de tipo estático y fue realizado con bootstrap, css3 y html.</b></h4>
                            </div>
                        </div>
                       <div class="item"><a href="http://asesorfiscal.000webhostapp.com/">
                            <img src="img/p6.jpg" style="width:100%;height: 100%; margin-left: auto;

            margin-right: auto;"></a> 
                           <div class="carousel-caption" style="background-color:black;"><h4 style="color:white;" ><b>Página web estilo tarjeta de presentación para el contador fiscál José Luis con despacho en la ciudad de Puebla.<br>
                            El sitio web fue realizado con css3, html y bootstrap   
                               </b></h4>
                            </div>
                        </div>
                           <div class="item"><a href="http://www.radiohispana.info/">
                            <img src="img/p7.jpg" style="width:100%;height: 100%; margin-left: auto;

            margin-right: auto;">
                             </a> 
                           <div class="carousel-caption" style="background-color:black;"><h4 style="color:white;"><b>Sitio web de radio online para cliente ubicado en España.<br>
                            Modificaciones en diseño, funcionalidad y adaptabilidad. Tecnologias de desarrollo, html, css3, php en clases y mysql en base de datos.
                               </b></h4>
                            </div>
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
                     <div  style="padding: 20px; width:100;   text-align: center;"> <h2><b> Diseñando a tráves de 5 sencillos pasos: </b></h2><br>
                   <h3><b>1.-Planeación</b> <img src="https://img.icons8.com/fluent/48/000000/calendar.png"/></h3 > <h3>Entendiendo los objetivos de diseño del sitio web,<br> estilo, colores, funcionabilidad y accesibilidad.</h3><br>
                   <h3><b>2.- Diseño</b><img src="https://img.icons8.com/color/48/000000/design--v1.png"/></h3><h3>Creando un diseño de acuerdo a las necesidades<br> y altura del proyecto.</h3><br>
                   <h3><b>3.-Programación</b> <img src="https://img.icons8.com/cotton/64/000000/source-code--v4.png"/></h3><h3>Programando con la mejor tecnología web disponible.</h3>
                           <img src="img/tecnologiasweb.png"  class="zoom" id="imgRes"> <br> <br>
                   <h3><b>4.-Publicación</b><img src="https://img.icons8.com/fluent/48/000000/rocket.png"/></h3><h3>Publicando el sitio en internet <br>para que sus clientes puedan disfrutar de el.</h3><br>
                   <h3><b>5.-Mantenimiento</b><img src="https://img.icons8.com/fluent/48/000000/gear.png"/></h3><h3>Asistencia y listo para realizar futuros cambios.</h3><br><br><br><br><h3><b>PORTAFOLIO FREELANCER DEL DESARROLLADOR:</b><br><br>
                         <a href="https://www.freelancer.mx/u/Luis210109"><button type="button" class="btn btn-info">PORTAFOLIO <img src="assets/img/FREE.jpg" width="5%;"/></button></a>
                         </h3><br>
                   <H2><b>Tener un sitio web, amplía la posibilidad de mercado de su empresa o negocio. <br>Contactenos</b></H2>
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
       <style>
    a{color: white;}
</style>
      <footer><br>
   <center> <ul class="list-unstyled text-center" align="center"> 
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <small><a href="mailto: contacto@sigmatienda.com.mx" class="social-icon all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Correo electronico" style="color:white;"> 
           <img src="img/gmail%20(2).png">
       contacto@sigmatienda.com.mx	 </a> </small><small><a href="mailto:sigma.sw.contacto@gmail.com" class="social-icon all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Correo electronico" style="color:white;"> 
      
        <img src="img/gmail%20(2).png">
21.luisemmanuelp@gmail.com  </a></small><small><a href="tel:2212264979" class="social-icon all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Telefono" style="color:white;"> 
           <img src="img/whatsapp%20(1).png">
        &nbsp;  2212264979       </a> </small>
        <small><a href="https://www.instagram.com/sigma_tienda_/" class="social-icon all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Instagram" style="color:white;"> 
         <img src="https://img.icons8.com/fluent/38/000000/instagram-new.png"/>
        &nbsp;@sigma_tienda_       </a> </small>
        
        
        
    </ul></center>
  
  <center>  <h5  style="color:white;"><br>Aviso de privacidad - Todos los derechos reservados.
<br>SIGMA accesorios, software y reparaciones &copy; 2021</h5></center>
</footer>
