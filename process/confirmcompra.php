<?php
session_start(); 

include '../library/configServer.php';
include '../library/consulSQL.php';
$num=$_POST['clien-number'];
if($num=='notlog'){
   $nameClien=$_POST['clien-name'];
   $passClien=md5($_POST['clien-pass']); 
}
if($num=='log'){
   $nameClien=$_POST['clien-name'];
   $passClien=$_POST['clien-pass']; 
}
sleep(3);



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
     
    
    $suma += $fila['Precio'];
    //Variables de inserción
    $nombreprod=$fila['NombreProd'];
    $modelo=$fila['Modelo'];   
    $userid=$_COOKIE["usuario"];
    $precio=$fila['Precio'];
    $idproducto = $fila['CodigoProd'];    
    $insercion="INSERT into pedidos_tienda (user_id, cantidad, nombre, modelo, precio, total)VALUES($userid,1,'$nombreprod','$modelo',$precio,1)";
        
    $queryconsulta2=$conn->query($insercion);
        
$actualizar="UPDATE producto SET Stock=Stock-1 WHERE CodigoProd=$idproducto";
$queryactualizar=$conn->query($actualizar);
    }
}
echo "<tr><td></td><td><h4 style='color:black;'><b>Total</b></h4></td><td>
<h4>$".number_format($suma,2).'MXN'."</h4></td></tr>";
echo "</table> <div>" ;
$_SESSION['sumaTotal']=$suma;
}}
                   
                   
                   

/**$verdata= "select * from cliente where Clave='".$passClien."' and Nombre='".$nameClien."' ";
$resultconf = $conn->query($verdata);                  

if($resultconf>0){
  if($_SESSION['sumaTotal']>0){
      
  $data= $resultconf->fetch_array(MYSQLI_NUM);
  $nitC=$data['NIT'];
  
  $StatusV="Pendiente";
  **/
  /*Insertando datos en tabla venta
  $venta=  "INSERT INTO venta (NumPedido, Fecha, NIT, Descuento, TotalPagar, Estado) VALUES ('1','".date('d-m-Y')."','".$nitC."','0','".$_SESSION['sumaTotal']."','".$StatusV."' )";
  $procesoventa=$conn->query($venta);
  if($conn->query($venta)===TRUE){
      echo 'Insertado correctamente';
  }
      else{
            echo 'Insertado incorrectamente';
      }
  /*recuperando el número del pedido actual
  $verId="select * from venta where NIT='$nitC' order by NumPedido desc limit 1";
  $connverid= $conn->query($verId);
  while($row = $connverid->fetch_assoc()){
     $Numpedido=$row['NumPedido'];
  }
  
  /*Insertando datos en detalle de la venta
  for($i = 0;$i< $_SESSION['contador'];$i++){
     $detalle= "INSERT INTO detalle (NumPedido, CodigoProd, CantidadProductos) VALUES 
     ('$Numpedido', '".$_SESSION['producto'][$i]."', '1' )";
  $venta1= $conn->query($detalle);

    /*Restando un stock a cada producto seleccionado en el carrit
    $prodStock="select * from producto where CodigoProd='".$_SESSION['producto'][$i]."'";
    $restando = $conn->query($prodStock);
    while($row = $restando->fetch_assoc()) {
        $existencias = $row['Stock'];
        $actualizar = 
    "UPDATE producto SET Stock=('$existencias'-1) WHERE CodigoProd='".$_SESSION['producto'][$i]."')";
        $queryactualizar=$conn->query($actualizar);
    }
  
    
    /*Vaciando el carrito*/
    unset($_SESSION['producto']);
    unset($_SESSION['contador']);
    /*  
    echo '<img src="assets/img/ok.png" class="center-all-contens"><br>El pedido se ha realizado con éxito';
  else{
    echo '<img src="assets/img/error.png" class="center-all-contens"><br>No has seleccionado ningún producto, revisa el carrito de compras';
  }

}else{
    echo '<img src="assets/img/error.png" class="center-all-contens"><br>El nombre o contraseña invalidos';
}

*/
echo ("<script>location.href='../index2.php'</script>");

?>

