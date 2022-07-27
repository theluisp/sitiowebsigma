<?php session_start();?>
 <script>   
function printDiv() { 
            var divContents = document.getElementById("GFG").innerHTML; 
            var a = window.open('', '', 'height=1000, width=1000'); 
            a.document.write('<html>'); 
            a.document.write('<body  style=" font-family: "FontFamilySPro";line-height: 6.5;font-size: 89px;"><h1>Accesorios <small class="tittles-pages-logo">SIGMA</small> <img src="assets/img/SIGMA.png" width="30px;"/> </h1> <br><h6>Fecha de expedición:  <?php $fechaActual = date('d-m-Y');
  
  echo $fechaActual; ?></h6> <h6>ID:<?php echo $_COOKIE["usuario"]; ?></h6><h6>Dirección de entrega: Col. Solidaridad nacional, calle federalismo n°122, interior 2. Puebla, pue.</h6><h6>Horarios y días de entrega: Lunes a viernes 12:00pm- 7:30 pm</h6>'); 
            a.document.write(divContents); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print(); 
        } 
    </script> 
<style>
.zoom {
  transition: transform .2s; /* Animation */
  width:120px;
  
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>


<!DOCTYPE html>
<html lang="es">
<head>

    <title>Pedido</title>
              <link rel="shortcut icon" href="img/sigmad.png">

    <?php include './inc/link.php'; ?>
</head>
   
<body id="container-page-index">
    <?php include './inc/navbar.php'; ?>
    <section id="container-pedido" >
        <div class="container"  >
            <div class="page-header">
              <h1 >Tú pedido</h1>
               <div id="GFG"> <?php
include './library/configServer.php';
include './library/consulSQL.php';
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
        echo '<tr>
        <td><b>Cantidad &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
             <td><b> Nombre &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
              <td><b> Modelo &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
              <td><b> Precio&nbsp;&nbsp;&nbsp;&nbsp; </b></td>
          </tr>';
for($i = 0;$i<$_SESSION['contador'];$i++){
    $consulta="select * from producto where CodigoProd='".$_SESSION['producto'][$i]."'";
    $queryconsulta=$conn->query($consulta);

    while( $fila  = $queryconsulta->fetch_assoc()){
     
    echo " <div id='feedback-bg-info'> 
   
<tr><td><h5 style='color:black;'>1</h5></td>
    <td><h5 style='color:black;'>".$fila['NombreProd']."</h5></td>
            <td><h5 style='color:black;'>".$fila['Modelo']."</h5></td>

    <td><h5 style='color:black;'>".'$'.$fila['Precio']."</h5></td></tr>";
    $suma += $fila['Precio'];
    //Variables de inserción
    $nombreprod=$fila['NombreProd'];
    $modelo=$fila['Modelo'];   
    $userid=$_COOKIE["usuario"];
    $precio=$fila['Precio'];
        
    $insercion="INSERT into pedidos_tienda (user_id, cantidad, nombre, modelo, precio, total)VALUES($userid,1,'$nombreprod','$modelo',$precio,1)";
        
    $queryconsulta2=$conn->query($insercion);

    }
}
echo "<tr><td></td><td></td><td><h5 style='color:black;'><b>Total</b></h5></td><td>
<h5>$".number_format($suma,2).'MXN'."</h5></td></tr>";
echo "</table> <div>" ;
$_SESSION['sumaTotal']=$suma;
}}
                   
                   
                   ?></div></div><?php
error_reporting(0);


$forma_de_entrega= $_POST['optradio'];

if($forma_de_entrega=='1'){
    echo ' <br><br><br><br><a href="process/confirmcompra.php"> <button style="  margin: 0 auto;

   margin: 0 auto;
width:50%;margin-top:0%;position: absolute;	left:25%;

    z-index:2;"
    class="btn btn-success btn-lg "
 type="submit" onclick="printDiv()"/>Obtener hoja de compra</button></a>
';
}
else{
    echo ' <br><br><br><br><div style=" 


width:60%;margin-top:0%;position: absolute;	left:20%;

"><h2>Genera una captura de pantalla a tu pedido y envianosla por el medio que desees para agendar una cita de entrega:</h2><h4>Puntos:<br>
    <b>
    -Aurrera villa frontera
    -Sams capu
    -Parque Puebla
    -Oxxo china poblana.
    -Plaza loreto
    -Elektra San pablo del monte
  </b><br><br>
    Horarios de entrega:<br>
  <b>  -Lunes a viernes de 10:00am-7:00pm 
    <br>-Sábados: 3:00pm - 6:00pm</b>
    </h4><br>
    <h4>Da clic al medio por el cual desees mandarnos tu pedido:</h4><br>
    <center>
    <h4>Messenger                        Whatsapp</h4>
    <a style="
" href="https://www.messenger.com/t/4490836157615491/"><img class="zoom"src="https://img.icons8.com/fluent/100/000000/facebook-messenger--v2.png"/></a>
<a href="https://wa.link/yq32a9" style="padding:20px;  
">
    <img class="zoom" src="https://img.icons8.com/officel/100/000000/whatsapp.png"/></a></div></center> ' ;}?>
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
           

    </section>

</body>
</html>