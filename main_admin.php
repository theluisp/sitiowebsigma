<?PHP 
session_start();

?>
<!DOCTYPE>
<html>

<head>
    <title>Software punto de venta</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/navbar.css">

</head>

<body>
    <nav class="navbar navbar-dark bg-dark ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">ADMINISTRADOR</a>
            </div>
            <ul class="nav navbar-nav  navbar-right">
                <li class="active"><a style="color:white;"><?php echo  $_SESSION['user'];          ?></a></li>

            </ul>
            <a style="color:white;" href="backend/backend_logout.php"><img src="https://img.icons8.com/fluent/24/000000/user-male-circle.png" /> <b>Cerrar sesión</b></a>
        </div>
    </nav>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Punto de venta</h3>
            </div>

            <ul class="list-unstyled components">

                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Administración <img src="https://img.icons8.com/color/28/000000/gear.png" /></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Nuevo proveedor</a>
                        </li>
                        <li>
                            <a href="#">Nuevo producto</a>
                        </li>
                        <li>
                            <a href="#">Nuevo usuario</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Ventas <img src="https://img.icons8.com/office/22/000000/cash-register.png" /> </a>
                </li>

                <li>
                    <a href="#">Compras <img src="https://img.icons8.com/office/22/000000/cash-register.png" /></a>
                </li>
                <li>
                    <a href="#">Inventario <img src="https://img.icons8.com/color/22/000000/warehouse.png" /></a>
                </li>
                <li>
                    <a href="#">Proveedores <img src="https://img.icons8.com/color/22/000000/container-truck.png" />
                    </a>
                </li>
            </ul>
        </nav>


        <div id="content">
            <!-- We'll fill this with dummy content -->

            <div id="fuk" class="fuk">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">INGRESOS</div>
                    <div class="card-body">
                        <img src="https://img.icons8.com/color/48/000000/get-cash.png" />
                        <h1>
                            <p class="card-text" align="center">0.00</p>
                        </h1>
                    </div>
                </div>
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">GASTOS</div>
                    <div class="card-body">
                        <img src="https://img.icons8.com/color/48/000000/get-cash.png" />
                        <h1>
                            <p class="card-text" align="center">0.00</p>
                        </h1>
                    </div>
                </div>

            </div>
            <div class="fuk2" id="fuk2"> <img  src="img/logo.jpg"></div>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
</body>

</html>