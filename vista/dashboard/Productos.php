<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../resources/img/dashboard/icono.png" type="favicon/x-icon">

    <title>SunChemical</title>

    <!-- Bootstrap core CSS -->
    <link href="../../resources/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../resources/css/dashboard/dashboard.css" rel="stylesheet">


</head>

<body class="g-0 ">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="display-6">Administración de Productos</h1>
            </div>
            <div class="col-lg-6">
                <img class="" src="../../resources/img/dashboard/crud_usuario.png" alt="" width="70px">
            </div>    
        </div>  
        <div class="row">
            <div class="col-lg-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Agregar registro
                </button>
                <br>
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
                                <th>Nombre</th>
                                <th>Descripción</th>                                
                                <th>Costo de Venta $</th>  
                                <th>Cantidad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td>1</td>
                                <td>Cubeta de tinte</td>
                                <td>Solvente base color rojo</td>
                                <td>18.00</td>
                                <td>3</td>      
                                <td class="col-lg-2 ">
                                    <div class="row justify-content-md-center g-0">
                                    <button type="button" class="btn btn-danger col col-lg-4 me-3 p-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                        <img src="../../resources/img/dashboard/eliminar.png" alt="" width="25px">
                                    </button>
                                    <button type="button" class="btn btn-primary col col-lg-4 p-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                                        <img src="../../resources/img/dashboard/borrar.png" alt="" width="25px">
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
    
    <!-- Modal Crear-->
    <div class="modal fade col-lg-12" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Registrar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation ms-2 mt-2" novalidate>
                        <div class="row">    
                            <div class="col-md-4">
                                <div class="file-field ps-2 ">
                                    <div class="mb-2 ms-5 ">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
                                        class="rounded-circle z-depth-1-half avatar-pic img-responsive img-fluid" alt="example placeholder avatar" width="120px">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label"></label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Nombre Producto</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Descripción del producto</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    <div class="valid-feedback">
                                    Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Costo de Venta</label>
                                <div class="input-group mb-3">                            
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03" class="form-label">Cantidad de Producto</label>
                                <input type="number" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                Please provide a valid city.
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Tipo de Producto</label>
                                <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Escoje...</option>
                                <option>...</option>
                                </select>
                                <div class="invalid-feedback">
                                Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Marca</label>
                                <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Escoje...</option>
                                <option>...</option>
                                </select>
                                <div class="invalid-feedback">
                                Please select a valid state.
                                </div>
                            </div>
                            </div> 
                            <div class="row"> 
                                <div class="col-md-12">
                                    <label for="validationCustom05" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="validationCustom05" required>
                                    <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>
                    </form>
                </div><br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Crear</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Borrar-->
    <div class="modal fade col-lg-12" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Mensaje de advertencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Está seguro de eliminar el registro seleccionado?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Eliminar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Actualizar-->
    <div class="modal fade col-lg-12" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Actualizar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation ms-2 mt-2" novalidate>
                        <div class="row">    
                            <div class="col-md-4">
                                <div class="file-field ps-2 ">
                                    <div class="mb-2 ms-5 ">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
                                        class="rounded-circle z-depth-1-half avatar-pic img-responsive img-fluid" alt="example placeholder avatar" width="120px">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label"></label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Nombre Producto</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Descripción del producto</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    <div class="valid-feedback">
                                    Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Costo de Venta</label>
                                <div class="input-group mb-3">                            
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03" class="form-label">Cantidad de Producto</label>
                                <input type="number" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                Please provide a valid city.
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Tipo de Producto</label>
                                <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Escoje...</option>
                                <option>...</option>
                                </select>
                                <div class="invalid-feedback">
                                Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Marca</label>
                                <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Escoje...</option>
                                <option>...</option>
                                </select>
                                <div class="invalid-feedback">
                                Please select a valid state.
                                </div>
                            </div>
                            </div> 
                            <div class="row"> 
                                <div class="col-md-12">
                                    <label for="validationCustom05" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="validationCustom05" required>
                                    <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>
                    </form>
                </div><br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../../resources/js/jQuery/jquery.min.js"></script>
    <script src="../../resources/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../resources/js/dashboard/dashboard.js"></script>

</body>

</html>