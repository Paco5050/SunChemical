<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../resources/img/dashboard/icono.png" type="favicon/x-icon">

    <title>MarketFar</title>

    <!-- Custom styles for this template -->
    <link href="../../resources/css/dashboard/login.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap core CSS -->
    <link href="../../resources/css/bootstrap/bootstrap.min.css" rel="stylesheet">   
    
    <style>
      img {
        -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
        filter: grayscale(50%);
      }
      .fondo{background-color: #2A2C36;}
    </style>
</head>
<body class="bg-dark-x">
    <section class="h-auto">
      <div class="row g-0">
        <div class="col-lg-7 ">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../../resources/img/dashboard/login1.jpg" class="d-block h-auto img-fluid filtro" alt="...">
                <div class="carousel-caption d-none d-md-block text-light fondo rounded border border-light">
                  <h5>MarketFar</h5>
                  <p>Servicio de supermercado y farmacia, con envios hacia toda la zona metropolitana</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../../resources/img/dashboard/login3.jpg" class="d-block h-auto img-fluid filtro" alt="...">
                <div class="carousel-caption d-none d-md-block text-light fondo rounded border border-light">
                  <h5>MarketFar</h5>
                    <p>Servicio a domicilio a contrapago.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 d-flex justify-content-center mb-auto">
            <img src="../../resources/img/dashboard/logo.png" alt="" class="w-50" >
          </div>
          <div class="px-lg-5 py-lg-4 p-4 w-100 mt-auto">
            <h1 class="text-light font-weight-bold mb-4 display-6 mx-0 ">"Bienvenido al sistema"</h1>
            <form>
              <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label text-light">E-mail</label>
                <input type="email" class="form-control bg-dark py-2 border-0 text-light" placeholder="Ingresa tu correo" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label text-light">Contraseña</label>
                <input type="password" class="form-control bg-dark py-2 border-0 text-light" placeholder="Ingresa tu contraseña" id="exampleInputPassword1">
                <div class="pt-1"><a href="#" id="emailHelp" class="form-text text-muted text-decoration-none">¿Has olvidado tu contraseña?</a></div>
              </div>
              <a href="Dashboard.php" class="btn btn-dark w-100 py-2 btn-outline-light"><img src="../../resources/img/dashboard/usuario.png" alt="" width="25px" class="img-fluid img-thumbnail">Iniciar Sesión</a>
            </form>
          </div>
          <div class="mt-auto"></div>
        </div>        
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="../../resources/js/efectos/jquery.min.js"></script>
    <script src="../../resources/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../resources/js/dashboard/dashboard.js"></script>
</body>
</html>