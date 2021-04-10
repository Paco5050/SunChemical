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

    <div class="container m-3">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-12">
                <h1 class="page-header ">Productos</h1>
            </div>
        </div>
    </div>

    <div class="album py-5 bg-white h-100 ">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Categorias</label>
                    <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Escoje...</option>
                    <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Marcas</label>
                    <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Escoje...</option>
                    <option>...</option>
                    </select>
                </div>
            </div>
            <br>
            <hr>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-1">
                <div class="col">
                    <div class="card shadow-sm">
                    <img src="../../resources/img/sliders/chocolate.png" class="card-img-top 0" alt="...">
                        <div class="card-body">
                            
                        <p class="card-text"></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-success">Añadir Producto</button>
                            <button type="button" class="btn btn-sm btn-outline-danger">Eliminar Producto</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer class="mastfoot mt-auto ms-3">
    <div class="inner text-center mt-3">
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
