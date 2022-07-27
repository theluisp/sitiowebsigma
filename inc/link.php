<?php if(empty($_COOKIE["usuario"])){$caracteres = '1234567890';
for($x = 0; $x < 10; $x++){
	$aleatoria = substr(str_shuffle($caracteres), 0, 9);
}  
setcookie("usuario", $aleatoria, time()+2538000);   
}
else{
   echo '';
    
}

?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/21hhestilo.css">
<link rel="stylesheet" href="css/1211csspersonalizado.css">
<link rel="stylesheet" href="css/Lasqueries21.css">

<link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/logo.ico" />
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/autohidingnavbar.min.js"></script>
<script src="js/main.js"></script>
<script src="js/carrito.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

  
<!-- Bootstrap 4 Default CSS -->

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <!-- Additional CSS -->
  <link rel="stylesheet" href="css/main.css">

  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">



    <!-- Bootstrap JQuery Plugin -->


   