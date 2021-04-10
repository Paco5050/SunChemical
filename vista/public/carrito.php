<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../resources/img/dashboard/icono.png" type="favicon/x-icon">

    <title>MarketFar</title>

    <!-- Bootstrap core CSS -->
    <link href="../../resources/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../resources/css/dashboard/dashboard.css" rel="stylesheet">

</head>

<body class="d-flex flex-column h-100 g-0">
    
  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100 col-lg-12">
      <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item ms-2">
                <a href="login.php" class="btn btn-dark"><img alt="" >Iniciar Sesión</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categorias
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Productos</a></li>
                  <li><a class="dropdown-item" href="#">Ofertas</a></li>
                  <li><a class="dropdown-item" href="#"> Novedades</a></li>
                </ul>
              </li>              
            </ul>            
            <form class="d-flex">
              <input class="form-control me-2 w-50" type="search" placeholder="Search" aria-label="Search" >
              <button class="btn btn-outline-success btn-light" type="submit">Search</button>
              <a href="carrito.php" class="ms-2 btn btn-dark w-25 py-2 "><img src="../../resources/img/dashboard/carrito.png" alt="" width="25px"></a> 
            </form>
          </div>
        </div>
    </nav>
  </header>


  <section class="container">
      <div class="row mt-5">
        <section class="col-12 d-none d-md-block">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="trsn" title="Go back to Home">Home</a></li>
            <li class="breadcrumb-item"><span>Carrito</span></li>
          </ol>
        </section>
      </div>
    </section>

    <div class="container">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-12">
            <h1 class="page-header">Carrito de Compra</h1>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <section class="col-12">
            <div class="bg-secondary alert text-white">El carrito de compras esta actualmente lleno.</div>
            <a href="javascript:history.back()" class="btn btn-link" title="← Go back &amp; Keep Shopping">← Regresar y continuar llenando el carrito</a>
            </section>
        </div>
        <div class="table-responsive"> 
            <br>       
            <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                <thead class="text-center">
                    <tr class="align-middle">
                        <th>Nombre Producto</th>
                        <th>Subtotal $</th>     
                        <th>Total $</th>                              
                        <th>Cambio $</th>
                        <th>Impuesto</th>    
                        <th>Fecha</th>  
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle">
                        <td>Chocolate</td>
                        <td>3.15</td> 
                        <td>3.56</td>  
                        <td>0.04</td> 
                        <td>13.0%</td>  
                        <td>15/03/2021</td>
                    </tr>                              
                </tbody>        
            </table>     
            <a href="index.php" class="ms-2 btn btn-success w-25 py-2 ">Completar compra</a>               
        </div>
    </div>

    <footer class="mastfoot mt-auto ms-3">
        <div class="inner text-center">
            <p>Derechos Reservados 2021, S.A de C.V | Uso y condiciones | Política de privacidad | Derechos y obligaciones de los clientes | Garantía de los productos</p>
        </div>
        </div>
    </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../../resources/js/jQuery/jquery.min.js"></script>
  <script src="../../resources/js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="../../resources/js/dashboard/dashboard.js"></script>
      
  </body>
</html>
