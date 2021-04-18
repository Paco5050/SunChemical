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
                <h1 class="display-6">Administración de Empleados

                </h1>
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
                                <th>Profesion</th>   
                                <th>Correo</th>                             
                                <th>Dirección</th>  
                                <th>Tipo de Empleado</th>
                                <th>Tipo de Estado</th>
                                <th>Genero</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td>1</td>
                                <td>Diego Antonio</td>
                                <td>Graduado de Bachiller</td>
                                <td>diegoantonio2000@gmail.com</td>    
                                <td>Colonio Bernal</td> 
                                <td>Bodegero</td> 
                                <td>Activo</td> 
                                <td>Masculino</td> 
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
                    <h5 class="modal-title" id="staticBackdropLabel">Registrar Empleado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation ms-2 mt-2" novalidate>
                        
                        <div class="row">    
                            <div class="col-md-6">
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
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Nombre Empleado</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Profesion</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationCustomUsername" class="form-label">Correo Empleado</label>
                                <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Genero</label>
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
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Tipo Empleado</label>
                                <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Escoje...</option>
                                <option>...</option>
                                </select>
                                <div class="invalid-feedback">
                                Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Estado Empleado</label>
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
                                <label for="validationCustom02" class="form-label">Dirección del Empleado</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
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
                    <h5 class="modal-title" id="staticBackdropLabel">Actualizar Empleado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation ms-2 mt-2" novalidate>
                        
                        <div class="row">    
                            <div class="col-md-6">
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
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Nombre Empleado</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Profesion</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationCustomUsername" class="form-label">Correo Empleado</label>
                                <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Genero</label>
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
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Tipo Empleado</label>
                                <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Escoje...</option>
                                <option>...</option>
                                </select>
                                <div class="invalid-feedback">
                                Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Estado Empleado</label>
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
                                <label for="validationCustom02" class="form-label">Dirección del Empleado</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Actualizar</button>
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