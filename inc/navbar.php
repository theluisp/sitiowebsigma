<?php error_reporting(0);
session_start();

include '../backend/backend_conexion.php';
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 0;
    }
 $usuarioestandar=$_SESSION["nombreUser"];
?>
<style>
a:hover > * {
  color: white;
    font-weight: bold;
}

</style><link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<section id="container-carrito-compras">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div id="carrito-compras-tienda"></div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p class="text-center" style="font-size: 80px;">
<img src="https://img.icons8.com/ios/90/000000/shopping-bag--v1.png"/>              </p>
                <p class="text-center" >
                    <a href="pedido.php" class="btn btn-success btn-block" ><b> CONFIRMAR PEDIDO</b></a>
                    <a href="process/vaciarcarrito.php" class="btn btn-danger btn-block">  VACIAR CARRITO </a> 
                </p>
            </div>
        </div>
    </div>
</section>
<nav id="navbar-auto-hidden">
        <div class="row hidden-xs"><!-- Menu computadoras y tablets -->
            <div class="col-xs-4">
                <figure class="logo-navbar"></figure>
                <p class="text-navbar tittles-pages-logo">SIGMA</p>
            </div>
            <div class="col-xs-8">
                <div class="contenedor-tabla pull-right">
                    <div class="contenedor-tr">
                                          
                                          
                                         
                        <a href="#" id="myTabDrop1" class="table-cell-td"  class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false"  
                        style="color:white;">
                        Categorías<span class="caret">  </span> </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                          <!-- ==================== Lista categorias =============== -->
                         <?php
                            $categorias= "SELECT * FROM categoria";
                            $result = $conn->query($categorias);

                            while($cate = $result->fetch_assoc()){
                               
                            }
                          ?>
                          <!-- ==================== Fin lista categorias =============== -->
                        </ul>
                   
                      
                      
                        <a href="product.php" class="table-cell-td" style="text-decoration:none;">Accesorios para celular</a>
                        <a href="servicios.php" class="table-cell-td" style="text-decoration:none;">Servicios y reparaciones </a>
                        <?php
                            if(!$_SESSION['nombreAdmin']==""){
                                echo ' 
                                    <a href="configAdmin.php" class="table-cell-td">Administración</a>
                                    <a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                        <i class="fa fa-shopping-cart fa-1x"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                    </a>
                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nombreAdmin'].'
                                    </a>
                                 ';
                            }else if(!$usuarioestandar==""){
                                echo ' 
                                    <a href="pedido.php" class="table-cell-td">Pedido</a>
                                    <a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                        <i class="fa fa-shopping-cart fa-1x"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                    </a>
                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;'  .$_SESSION['nombreUser'].'
                                    </a>
                                 ';
                            }else{
                                echo ' 
                                    <a href="registration.php" class="table-cell-td" style="text-decoration:none;">Registro</a>
                                    <a href="#" style="text-decoration:none;" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                        <i class="fa fa-shopping-cart fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                    </a>
                                    <a href="#" style="text-decoration:none;" class="table-cell-td" data-toggle="modal" data-target=".modal-login">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;Entrar
                                    </a>
                                 ';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row visible-xs"><!-- Mobile menu navbar -->
            <div class="col-xs-12">
                <button class="btn btn-default pull-left button-mobile-menu" id="btn-mobile-menu">
                   
            
                 <span class="material-icons">
drag_handle
</span>
<a style="font-size: 15px;color:white; margin-top:10px; top:3px!important; " id="btn-mobile-menu" >Menú</a>
                               </button>

                <a href="#"  id="button-shopping-cart-xs" class="elements-nav-xs all-elements-tooltip carrito-button-nav" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras"  >
                  <i class="fa fa-shopping-cart fa-lg" style=" margin-top:13px;" >&nbsp;&nbsp;<i class="fa fa-caret-down"></i></i>
                </a>
                <?php
                if(!$_SESSION['nombreAdmin']==""){echo '
                    <a href="#"  id="button-login-xs" class="elements-nav-xs" data-toggle="modal" data-target=".modal-logout " style=" margin-top:11px;">
                        <i class="fa fa-user"></i>&nbsp; '.$_SESSION['nombreAdmin'].' 
                    </a>';
                }else if(!$usuarioestandar==""){
                    echo '
                    <a href="#"  id="button-login-xs" class="elements-nav-xs" data-toggle="modal" data-target=".modal-logout"  style=" margin-top:11px;">
                        <i class="fa fa-user"></i>&nbsp; '.$usuarioestandar.' 
                    </a>';
                }else{
                    echo '
                       <a href="#" data-toggle="modal" data-target=".modal-login" id="button-login-xs" class="elements-nav-xs"  style=" margin-top:11px;">
                        <i class="fa fa-user"></i>&nbsp; Entrar
                        </a> 
                   ';
                }
                    ?>
            </div>
        </div>
    </nav>
    <!-- Modal login -->
    <div class="modal fade modal-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content" id="modal-form-login">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title text-center text-primary" id="myModalLabel" style="color:black;">Iniciar sesión en SIGMA</h4>
                </div>
            <form action="process/login.php" method="post" role="form" style="margin: 20px;" class="FormCatElec" data-form="login">
                  <div class="form-group">
                      <label><span class="glyphicon glyphicon-user"></span>&nbsp;Usuario</label>
                      <input type="text" class="form-control" name="nombre-login" placeholder="Escribe tu nombre de usuario" required=""/>
                  </div>
                  <div class="form-group">
                      <label><span class="glyphicon glyphicon-lock"></span>&nbsp;Contraseña</label>
                      <input type="password" class="form-control" name="clave-login" placeholder="Escribe tu contraseña" required=""/>
                  </div>

                  <p>¿Cómo iniciaras sesión?</p>
                  <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" value="option1" checked>
                        <h4>Usuario</h4>
                    </label>
                 </div>
                
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success  btn-sm">Iniciar sesión</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                  </div>
                  <div class="ResFormL" style="width: 100%; text-align: center; margin: 0;"></div>
              </form>
          </div>
      </div>
    </div>
    <!-- Fin Modal login -->
    <div id="mobile-menu-list" class="hidden-sm hidden-md hidden-lg">
        <br>
        <h3 class="text-center tittles-pages-logo" style='color:white;'>SIGMA</h3>
        <button class="btn btn-default button-mobile-menu" id="button-close-mobile-menu">
        <i class="fa fa-times"></i>
        </button>
        <br><br>
        <ul class="list-unstyled text-center">
            <li><a href="index.php">Inicio </a></li>
            <li><a href="product.php">Accesorios para celular</a></li>
            <li><a href="servicios.php">Servicios y reparaciones </a></li>
       

            
            <?php 
                if(!$_SESSION['nombreAdmin']==""){
                    echo '<li><a href="configAdmin.php">Administración</a></li>';
                }elseif(!$_SESSION['nombreUser']==""){
                    echo '<li><a href="pedido.php">Pedido</a></li>';
                }else{
                    echo '<li><a href="registration.php">Registro</a></li>';
                }
            ?>
        </ul>
    </div>
    <!-- Modal carrito -->
    <div class="modal fade modal-carrito" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <br>
            <p class="text-center"><i class="fa fa-shopping-cart fa-5x"></i></p>
            <p class="text-center">El producto se añadio al carrito</p>
            <p class="text-center"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Aceptar</button></p>
          </div>
      </div>
    </div>
    <!-- Fin Modal carrito -->
    
    <!-- Modal logout -->
    <div class="modal fade modal-logout" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <br>
            <p class="text-center">¿Quieres cerrar la sesión? </p>
            <p class="text-center"><i class="fa fa-exclamation-triangle fa-5x"></i></p>
            <p class="text-center">
                <a href="process/logout.php" class="btn btn-primary btn-sm">Cerrar la sesión</a>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
            </p>
          </div>
      </div>
    </div>
    <!-- Fin Modal logout -->