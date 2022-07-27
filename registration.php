<!DOCTYPE html>
<html lang="es" >

<head>
    <title>SIGMA Registro</title>
    <?php include './inc/link.php'; ?>
        <link rel="shortcut icon" href="img/sigmad.png">

</head>
<script>
    function verificarPasswords() {

        // Ontenemos los valores de los campos de contraseñas 
        pass1 = document.getElementById('clien-pass');
        pass2 = document.getElementById('clien-pass1');

        // Verificamos si las constraseñas no coinciden 
        if (pass1.value != pass2.value) {

            // Si las constraseñas no coinciden mostramos un mensaje 
            document.getElementById("error").classList.add("mostrar");

            return false;
        } else {

            // Si las contraseñas coinciden ocultamos el mensaje de error
            document.getElementById("error").classList.remove("mostrar");

            // Mostramos un mensaje mencionando que las Contraseñas coinciden 
            document.getElementById("ok").classList.remove("ocultar");

            // Desabilitamos el botón de login 
            document.getElementById("login").disabled = true;

            // Refrescamos la página (Simulación de envío del formulario) 
            setTimeout(function() {
                location.reload();
            }, 16000);

            return true;
        }

    }
</script>C
<link rel="shortcut icon" href="img/sigmad.png">
<style>
    .ocultar {
        display: none;
    }

    .mostrar {
        display: block;
    }
</style>
<style>
    #imgRes {
        width: 370px;
    }

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

    @media (min-width: 400px) and (max-width: 991px) {
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
     @media (min-width: 400px) and (max-width: 991px) {
         #imgRes {
        width: 170px;
    }
    }
    
</style>

<body id="container-page-registration" style="background-color: white;">
    <?php include './inc/navbar.php'; ?>
    <section id="form-registration" style="background-color: white;">
        <div class="container" style="background-color: white;">
            <div class="row" style="background-color: white;">
                <div class="page-header">
                    <h1>Crear cuenta</h1>
                </div>
                <div class="col-xs-12 col-sm-6 text-center">

                    <p></p>
                    <h3>
                        Registrese para comprar y recibir las notificaciones de nuestros productos y ofertas más recientes en nuestra tienda.
                    </h3>
                    <br>
                    <img src="img/LOGO.png" id="imgRes" style="margin-left: auto;   margin-right: auto;" alt="electrodomesticos" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <br><br>
                    <div id="msg"></div>

                    <!-- Mensajes de Verificación -->
                    <div id="error" class="alert alert-danger ocultar" role="alert">
                        Las Contraseñas no coinciden, vuelve a intentar !
                    </div>
                    <div id="ok" class="alert alert-success ocultar" role="alert">
                        Las Contraseñas coinciden ! (Procesando formulario ... )
                    </div>
                    <div id="container-form">
                        <p style="color:#fff;" class="text-center lead">Por favor llene los siguientes campos para continuar</p>
                        <br><br>
                        <form class="form-horizontal FormCatElec" action="process/regclien.php" role="form" method="post" data-form="save" onsubmit="verificarPasswords(); return false" name="f1">
                            <div class="form-group">

                            </div>
                            <br>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input class="form-control all-elements-tooltip" type="text" placeholder="Nombre de usuario" required name="clien-name" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre. Máximo 9 caracteres (solamente letras)" pattern="[a-zA-Z]{1,9}" maxlength="9">
                                </div>
                            </div>
                            <br>
                              <!---  <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Apellido" required name="clien-ape" data-toggle="tooltip" data-placement="top" title="Ingrese su apellido.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                </div>
                            </div>-->
                           

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input class="form-control all-elements-tooltip" type="password" placeholder="Contraseña" required name="clien-pass" data-toggle="tooltip" data-placement="top" id="clien-pass" title="Defina una contraseña para iniciar sesión">
                                </div>
                            </div><br>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input class="form-control all-elements-tooltip" type="password" placeholder="Repetir contraseña" required name="clien-pass1" id="clien-pass1" data-toggle="tooltip" data-placement="top" title="Defina una contraseña para iniciar sesión">
                                </div>
                            </div>


                            <br>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-at"></i></div>
                                    <input class="form-control all-elements-tooltip" type="email" placeholder="Correo electronico" required name="clien-email" data-toggle="tooltip" data-placement="top" title="Ingrese la dirección de su Email" maxlength="50">
                                </div>
                            </div>
                            <br>
                            <p><button id="login" type="submit" class="btn btn-success btn-block">Registrarse</button></p>
                            <div class="ResForm" style="width: 100%; color: #fff; text-align: center; margin: 0;"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
</body>

</html>