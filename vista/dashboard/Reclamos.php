<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="../../resources/img/dashboard/icono.png" type="favicon/x-icon">

    <title>SunChemical</title>

    <!-- Bootstrap core CSS -->
    <link href="../../resources/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../resources/css/dashboard/dashboard.css" rel="stylesheet">

</head>

<body class="g-0">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="display-6">Administración de Reclamos</h1>
            </div>
            <div class="col-lg-6">
                <img class="" src="../../resources/img/dashboard/crud_usuario.png" alt="" width="70px">
            </div>    
        </div>  
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-2">

                        <label for="inputPassword" class=" col-form-label ">Buscar:</label>
                        <input type="text" class="form-control" id="inputPassword">

                    </div>
                </div>
                <div class="table-responsive"> 
                    <br>       
                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed table-dark" style="width:100%">
                        <thead class="text-center">
                            <tr class="align-middle">
                                <th>ID</th>
                                <th>Tipo de reclamo</th>
                                <th>Producto</th>                             
                                <th>Cliente</th>  
                                <th>Tipo de defecto</th>
                                <th>Fecha</th>   
                                <th>Peso (Kg)</th>   
                                <th>Cubetas</th> 
                                <th>Lote</th>
                                <th>Estatus</th>  
                                <th>Descripción</th>  
                                <th>Foto</th>  
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td>1</td>
                                <td>Queja</td>
                                <td>Solvente base color rojo</td>   
                                <td>Ernesto Cuernavaca</td> 
                                <td>Cantidad</td> 
                                <td>15/03/2021</td> 
                                <td>70</td> 
                                <td>2</td> 
                                <td>#210-200</td>
                                <td>En proceso</td>
                                <td>Cantidad inexacta del lote de solvente color rojo</td>
                                <td><img src="../../resources/img/dashboard/rojo.jpg" alt="" class="img-responsive  w-100"></td>
                                <td class="col-lg-2">
                                    <div class="row justify-content-md-center g-0 pl-2">
                                    <button type="button" class="btn btn-primary col col-lg-5 me-3 p-0 w-100 mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                        Imprimir 
                                    </button>   
                                    <button type="button" class="btn btn-success     col col-lg-5 me-3 p-0 w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                                        Detalle
                                    </button>   
                                    </div>
                                </td>
                            </tr>                              
                        </tbody>        
                    </table>                    
                </div>
            </div>
        </div>  
    </div>   

    <!-- Modal Imprimir-->
    <div class="modal fade col-lg-12" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Mensaje informativo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Está seguro de generar el siguiente reclamo?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Generar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Ver Detalle-->
    <div class="modal fade col-lg-12" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Mensaje informativo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Desea generar el detalle del reclamo?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Generar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../../resources/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../resources/js/dashboard/dashboard.js"></script>
    
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="../../resources/js/bootstrap/jquery.maskedinput.min.js"></script>
    <script src="../../resources/js/bootstrap/masked.js"></script>
</body>

</html>