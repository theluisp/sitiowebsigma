<?php 

include 'library/configServer.php';
include 'library/consulSQL.php';
?>
<!DOCTYPE html>
<script type="text/javascript">
    (function(document) {
      'use strict';

      var LightTableFilter = (function(Arr) {

        var _input;

        function _onInputEvent(e) {
          _input = e.target;
          var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
          Arr.forEach.call(tables, function(table) {
            Arr.forEach.call(table.tBodies, function(tbody) {
              Arr.forEach.call(tbody.rows, _filter);
            });
          });
        }

        function _filter(row) {
          var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
          row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
        }

        return {
          init: function() {
            var inputs = document.getElementsByClassName('light-table-filter');
            Arr.forEach.call(inputs, function(input) {
              input.oninput = _onInputEvent;
            });
          }
        };
      })(Array.prototype);

      document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
          LightTableFilter.init();
        }
      });

    })(document);
    </script>
<html lang="es">
    <head>
        
        <title>Inventario</title>
        <?php include './inc/link.php';  
        ?>
                   <link rel="shortcut icon" href="img/sigmad.png">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    </head>
    <?php include './inc/navbar.php'; ?>
    <body style="margin-top:150px;">
    <h2 align="center">Inventario general</h2>
        <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Buscar."><br>

        <?php 
echo '<br><br><table   class="order-table" align="center">';

    $consulta="select * from producto where Stock>0";
    $queryconsulta=$conn->query($consulta);
    echo "<tr>
     <td><b>Nombre</b></td>
          <td><b>Precio</b></td>
           <td><b>Marca y modelo</b></td>
     <td><b>Unidades disponibles</b></td>

     </tr>";
    while( $fila  = $queryconsulta->fetch_assoc()){
     
    echo " <tr  align='center'>
    <td  align='center'><h5 style='color:black;'>".$fila['NombreProd']."</h5></td>
    <td  align='center'><h5 style='color:black;'>".'$'.$fila['Precio']."</h5></td>
    <td  align='center'><h5 style='color:black;'>".$fila['Marca_y_modelo']."</h5></td>
     <td align='center'><h5 style='color:black;'>".$fila['Stock']."</h5></td></tr>  ";
    
    $suma += $fila['Precio'];
    }

        ?>
    </body>
</html>
