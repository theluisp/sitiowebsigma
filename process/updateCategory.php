<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);

$codeOldCatUp=$_POST['categ-code-old'];
$codeCatUp=$_POST['categ-code'];
$nameCatUp=$_POST['categ-name'];
$descCatUp=$_POST['categ-descrip'];

$sql="UPDATE categoria SET CodigoCat='$codeCatUp',Nombre='$nameCatUp',Descripcion='$descCatUp' WHERE CodigoCat='$codeOldCatUp'";
$ejecutarsql= $conn->query($sql);
if($conn->query($sql)===TRUE){
   echo '
    <br>
    <img class="center-all-contens" src="assets/img/Check.png">
    <p><strong>Hecho</strong></p>';
}

else {
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

