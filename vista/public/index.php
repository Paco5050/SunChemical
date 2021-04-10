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
                  <li><a class="dropdown-item" href="Productos.php">Productos</a></li>
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

  <section>
        <div class="row g-0">
          <div class="card mb-3 col-lg-6">
            <div class="">
              <img src="../../resources/img/sliders/cacao.jpg" class="card-img-top 0" alt="...">
              <div class="card-body">
                    <h5 class="card-title">Ofertas</h5>
                    <p class="card-text">Es un alimento rico en grasas, carbohidratos y proteínas, nutrientes indispensables para aportar energía al organismo humano.</p>
                    <button type="button" class="btn btn-success">Ver Oferta</button>
                  </div>
              </div>
            </div>
            <div class="card mb-3 col-lg-6">
              <img src="../../resources/img/sliders/chocolate.png" class="card-img-top 0" alt="...">
              <div class="card-body">
                    <h5 class="card-title">Ofertas</h5>
                    <p class="card-text">Es un alimento rico en grasas, carbohidratos y proteínas, nutrientes indispensables para aportar energía al organismo humano.</p>
                    <button type="button" class="btn btn-success">Ver Oferta</button>
                  </div>
              </div>
            </div>
          </div> 
        </div>
        
        
      <br>
      <div class="accordion accordion-flush mb-2" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Mision
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body"> Satisfacer a nuestros socios y clientes con una compra única de calidad, variedad, precio y servicio, basada en la atención y el compromiso de nuestros trabajadores.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Vision
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Ser una cooperativa independiente, innovadora, honesta y sostenible en la que comprar con capacidad de elección y buenos precios. Es decir, ser un modelo de empresa referente en el sector de la distribución.</div>
        </div>
      </div>
    </div>
    
  </section>


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
