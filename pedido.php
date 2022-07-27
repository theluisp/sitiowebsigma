<?php session_start(); 
error_reporting(0);
 ?>
<!DOCTYPE html>
<html lang="es">
<head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Pedido</title>
              <link rel="shortcut icon" href="img/sigmad.png">

    <?php include './inc/link.php'; ?>
</head>
   
<body id="container-page-index">
    <?php include './inc/navbar.php'; ?>
    <section id="container-pedido">
        <div class="container">
            <div class="page-header">
              <h1>Tú pedido</h1>
                <?php

include 'library/configServer.php';
include 'library/consulSQL.php';

$suma = 0;
if($_SESSION['contador']==0){
        echo '<h4>El carrito está vació, porfavor añade productos </h4>';
    }else{
if(isset($_GET['precio'])){
    $_SESSION['producto'][$_SESSION['contador']] = $_GET['precio'];
    $_SESSION['contador']++;
    
    
} 
else{
echo '<table  class="table" align="center">';
for($i = 0;$i<$_SESSION['contador'];$i++){
    $consulta="select * from producto where CodigoProd='".$_SESSION['producto'][$i]."'";
    $queryconsulta=$conn->query($consulta);
    
    while( $fila  = $queryconsulta->fetch_assoc()){
     
    echo " <div id='feedback-bg-info'> <th></th><th>Producto</th><th>Precio unitario</th><tr>

    <td><img style='height:60px; width:60px;' src='assets/img-products/".$fila['Imagen']."'></td>
    <td><h5 style='color:black;'>".$fila['NombreProd']."</h5></td>
    <td><h5 style='color:black;'>".'$'.$fila['Precio']."</h5></td></tr>";
    $suma += $fila['Precio'];
    }
}
echo "<tr><td></td><td><h5 style='color:black;'><b>Total</b></h5></td><td>
<h5>$".number_format($suma,2).'MXN'."</h5></td></tr>";
echo "</table> <div>" ;
$_SESSION['sumaTotal']=$suma;
}}
?>
<script type="text/javascript">

  $(document).ready(function(){
  $("#enviars").click(function(){
    var formulario = $("#frminformacioin").serializeArray();
    $.ajax({
      type: "POST",
      dataType: 'json',
      url: "process/vaciarcarrito.php",
      data: formulario,
    }).done(function(respuesta){
      $("#mensaje").html(respuesta.mensaje);
    });
  });
  
    function limpiarformulario(formulario){
  
  $(formulario).find('input').each(function() {
      switch(this.type) {
          case 'password':
        case 'text':
                $(this).val('');
              break;
          case 'checkbox':
          case 'radio':
              this.checked = false;
          }
      });
  
      $(formulario).find('select').each(function() {
          $("#"+this.id + " option[value=0]").attr("selected",true);
  
    });
  }
});
    
    
                    </script>   
            </div>
            <br>
            <div class="row" >
                <div style=" padding: 30px;">
            <form action="hojadecompra.php" method="post">    <h2 align="center">Selecciona forma de entrega</h2>
       <center>      <img  src="img/pickup.png" align="center"style="width:120px;"/>  </center> <div class="radio">
  <label><input type="radio" name="optradio" id= "optradio" value='1' checked > <h3> <b>Recoge en tienda.</b></h3> 
</label>
</div>
                    
<h4 style="font-size:131%">Obten tú orden de compra, te apartamos los productos,<br> solo pasa a nuestra tienda a pagar y recoger tus productos.<br>
                Tienes hasta 2 días naturales para recolectar los productos en nuestra tienda; si esto no llegará a suceder, el pedido se cancela de forma automática.</h4>
                <br><div class="radio"> <center> <img align="center"src="https://img.icons8.com/fluent/60/000000/maps.png"/></center>
      <label><input type="radio" name="optradio" id= "optradio" value='0'><h3><b>Recoge en puntos populares</b></h3></label>
<h4 style="font-size:131%">Entregas gratis en compras mayores a $150. <br>Obten tú orden de compra y envianosla por facebook messenger o whatsapp para generar una cita para la entrega de tu pedido en alguno de los siguientes puntos:<br> <b>Sams capu, Bodega Aurrera de villa frontera, Parque puebla, Plaza loreto, Oxxo de la china poblana, Elektra de san pablo del monte. </b> <br>Realizas tu pago cuando recibas los productos personalmente por uno de nuestros colaboradores. </h4>
                    </div>
              <br><br>
<button type="submit" class="btn btn-success btn-lg btn-block">Continuar</button></form>
                <br>  <a href="product.php">  <button type="button" class="btn btn-info btn-lg btn-block">Seguir comprando</button></a>

</div>


                             

                <div class="col-xs-12 col-sm-6">
                    <div id="form-compra">
                        <form action="process/confirmcompra.php" method="post" role="form" class="FormCatElec" data-form="save">
                            
                            <?php
                               /** if($_SESSION['nombreUser']=="" &&$_SESSION['claveUser']==""){
                                    echo '
                                        <h2 class="text-center">¿Confirmar pedido?</h2>
                                        <p class="text-center">Para confirmar tu pedido presiona el botón confirmar</p>
                                        <br>
                                        <img class="img-responsive center-all-contens" src="assets/img/shopping-cart.png">
                                          <input type="hidden" name="clien-name" value="'.$_SESSION['nombreUser'].'">
                                          <input type="hidden" name="clien-pass" value="'.$_SESSION['claveUser'].'">
                                          <input type="hidden"  name="clien-number" value="log">
                                        <br>
                                        <p class="text-center"><button class="btn btn-success" type="submit">Confirmar</button></p>
                                    ';
                                }else{
                                    echo '
                                        <h3 class="text-center">¿Confirmar el pedido?</h3>
                                        <p>
                                            Para confirmar tu compra debes haber iniciar sesión o introducir tu nombre de usuario
                                            y contraseña con la cual te registraste en <span class="tittles-pages-logo">Cat Electronics</span>.
                                        </p>
                                        <br>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                          <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su nombre" required name="clien-name" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre" pattern="[a-zA-Z]{1,9}" maxlength="9">
                                        </div>
                                      </div>
                                      <br>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                          <input class="form-control all-elements-tooltip" type="password" placeholder="Introdusca su contraseña" required name="clien-pass" data-toggle="tooltip" data-placement="top" title="Introdusca su contraseña">
                                        </div>
                                      </div>
                                      <input type="hidden"  name="clien-number" value="notlog">
                                      <br>
                                      <p class="text-center"><button class="btn btn-success" type="submit">Confirmar</button></p>
                                    '; 
                                }  **/
                            ?>
                            <div class="ResForm" style="width: 100%; text-align: center; margin: 0;"></div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
</body>
</html>