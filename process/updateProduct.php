<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);

$codeOldProdUp=$_POST['code-old-prod'];
$codeProdUp=$_POST['code-prod'];
$nameProdUp=$_POST['prod-name'];
$catProdUp=$_POST['prod-category'];
$priceProdUp=$_POST['price-prod'];
$modelProdUp=$_POST['model-prod'];
$marcaProdUp=$_POST['marc-prod'];
$stockProdUp=$_POST['stock-prod'];
$proveProdUp=$_POST['prod-Prove'];

$sql12="UPDATE producto SET CodigoProd='$codeProdUp', NombreProd='$nameProdUp',
CodigoCat='$catProdUp', Precio=$priceProdUp, Marca_y_modelo='$modelProdUp', Stock='$stockProdUp', NITProveedor='$proveProdUp' WHERE CodigoProd='$codeProdUp'";
$ejecutaquery=$conn->query($sql12);
if ($conn->query($sql12) === TRUE) {
   echo '
    <br>
    <img class="center-all-contens" src="../assets/img/Check.png">
    <p><strong>Hecho</strong></p>
    <p class="text-center">
        Recargando<br>
        en 1 segundo
    </p>
    
    <script type="text/javascript">
function redireccionar(){
  window.location="../configAdmin.php";
} 
setTimeout ("redireccionar()", 1000); //tiempo expresado en milisegundos
</script>';
} else {
      echo "Error updating record: " . $conn->error;

   echo '
    <br>
    <img class="center-all-contens" src="assets/img/cancel.png">
    <p><strong>Error</strong></p>
    <p class="text-center">
        Recargando<br>
        en 7 segundos
    </p>
    <script>
        setTimeout(function(){
        url ="configAdmin.php";
        $(location).attr("href",url);
        },7000);
    </script>
 ';
}

$conn->close();
