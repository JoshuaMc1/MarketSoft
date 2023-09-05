<?php
include("layouts/navbar.php");
include("includes/header.html");
$navbar = new navbar;
?>

<body class="body-pd" id="body-pd">
    <header>
        <?php $navbar->buildNavbar(); ?>
    </header>
    <section class="container-fluid mb-4" id="contenido">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mt-2 mb-4">
                    <div class="card-body">
                        <h2 class="fw-bold">Usuarios</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-2">
                <div class="card shadow mb-2 bg-light">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="?View=Users"><i class="fas fa-user-plus"></i> Agregar usuarios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="?View=Admin_User"><i class="fas fa-user-edit"></i> Administrar usuarios</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 my-4">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="card">
                                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                                <div class="bg-gradient-dark shadow border-radius-lg pt-4 pb-3">
                                                    <h5 class="text-white text-capitalize ps-3"><i class="fas fa-user"></i> Datos del usuario</h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form action="php/users/updateUser" method="POST" enctype="multipart/form-data" id="formAdminUser">
                                                    <div class="row">
                                                        <div class="col-lg-4 mb-2 text-center">
                                                            <!-- <img src="<?php echo $__DIR__?>resource/uploads/users/nophoto.png" class="img-fluid" id="imgPerfil" alt="Foto de perfil"> -->
                                                            <img src="<?php echo $__DIR__ ?>resource/uploads/users/nophoto.svg" class="img-fluid" id="imgPerfil" alt="Foto de perfil">
                                                        </div>
                                                        <div class="col-lg-8 mb-2">
                                                            <div class="row">
                                                                <input type="hidden" name="idUser" id="txtId" class="form-control" autocomplete="off" readonly />
                                                                <div class="col-lg-4 mb-2">
                                                                    <label class="form-label" for="txtUsuario">Nombre de usuario:</label>
                                                                    <input type="text" name="usuario" id="txtUsuario" class="form-control" autocomplete="off" />
                                                                </div>
                                                                <div class="col-lg-8 mb-2">
                                                                    <label class="form-label" for="txtDNI">Numero de identidad:</label>
                                                                    <input type="text" name="dni" id="txtDNI" class="form-control" autocomplete="off" />
                                                                </div>
                                                                <div class="col-lg-6 mb-2">
                                                                    <label class="form-label" for="txtPrimerNombre">Primer nombre:</label>
                                                                    <input type="text" title="noNumber" name="primerNombre" id="txtPrimerNombre" class="form-control" autocomplete="off" />
                                                                </div>
                                                                <div class="col-lg-6 mb-2">
                                                                    <label class="form-label" for="txtSegundoNombre">Segundo nombre:</label>
                                                                    <input type="text" title="noNumber" name="segundoNombre" id="txtSegundoNombre" class="form-control" autocomplete="off" />
                                                                </div>
                                                                <div class="col-lg-6 mb-2">
                                                                    <label class="form-label" for="txtPrimerApellido">Primer apellido:</label>
                                                                    <input type="text" title="noNumber" name="primerApellido" id="txtPrimerApellido" class="form-control" autocomplete="off" />
                                                                </div>
                                                                <div class="col-lg-6 mb-2">
                                                                    <label class="form-label" for="txtSegundoApellido">Segundo apellido:</label>
                                                                    <input type="text" title="noNumber" name="segundoApellido" id="txtSegundoApellido" class="form-control" autocomplete="off" />
                                                                </div>
                                                                <div class="col-lg-12 mb-2">
                                                                    <label class="form-label" for="txtCorreo">Correo electronico:</label>
                                                                    <input type="email" name="correo" id="txtCorreo" class="form-control" autocomplete="off" />
                                                                </div>
                                                                <div class="col-lg-6 mb-2">
                                                                    <label class="form-label" for="txtTelefono">Numero de telefono:</label>
                                                                    <input type="text" name="telefono" id="txtTelefono" class="form-control" autocomplete="off" />
                                                                </div>
                                                                <div class="col-lg-6 mb-2">
                                                                    <label class="form-label" for="slcSexo">Sexo:</label>
                                                                    <select class="form-select" name="slcSexo" id="slcSexo">
                                                                        <option selected value="">Seleccione una opción</option>
                                                                        <option value="1">Masculino</option>
                                                                        <option value="2">Femenino</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-12 mb-3">
                                                                    <label class="form-label" for="txtDireccion">Direccion:</label>
                                                                    <textarea class="form-control" name="direccion" id="txtDireccion" rows="3"></textarea>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="d-grid">
                                                                        <button type="submit" class="btn btn-warning d-none" id="btnActualizar"><i class="fas fa-edit"></i> Actualizar datos</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row">
                                            <div class="col-lg-12 mb-4">
                                                <div class="card">
                                                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                                        <div class="bg-gradient-dark shadow border-radius-lg pt-4 pb-3">
                                                            <h5 class="text-white text-capitalize ps-3"><i class="fas fa-user-shield"></i> Editar permisos</h5>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="d-grid">
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPermisos"><i class="fas fa-edit"></i> Editar permisos</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 my-4">
                                                <div class="card">
                                                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                                        <div class="bg-gradient-dark shadow border-radius-lg pt-4 pb-3">
                                                            <h5 class="text-white text-capitalize ps-3"><i class="fas fa-user-slash"></i> Activar/desactivar usuarios</h5>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="d-grid">
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUsuariosActivos"><i class="fas fa-user-lock"></i> Activar o desactivar usuarios</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 my-4">
                                <div class="card">
                                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                        <div class="bg-gradient-dark shadow border-radius-lg pt-4 pb-3">
                                            <h5 class="text-white text-capitalize ps-3"><i class="fas fa-clipboard-list"></i> Tabla usuarios</h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="tableAdminUser" class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Usuario</th>
                                                        <th scope="col">DNI</th>
                                                        <th scope="col">Primer nombre</th>
                                                        <th scope="col">Segundo nombre</th>
                                                        <th scope="col">Primer apellido</th>
                                                        <th scope="col">Segundo apellido</th>
                                                        <th scope="col">Telefono</th>
                                                        <th scope="col">Dirección</th>
                                                        <th scope="col">Correo</th>
                                                        <th scope="col">Genero</th>
                                                        <th scope="col" class="text-center">Acciones</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal eliminar usuarios -->
        <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modalTitulo" aria-hidden="true">
            <div class="modal-dialog bg-light">
                <div class="modal-content">
                    <form action="php/users/deleteUser" method="POST" id="formEliminarUsuario">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitulo">Eliminar usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="txtId" name="idUser" readonly>
                            <span class="fw-bold">Estas seguro que deseas eliminar el usuario?</span>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Si, eliminar usuario</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal actualizar permisos de usuarios -->
        <div class="modal fade" id="modalPermisos" tabindex="-1" aria-labelledby="Permisos de usuarios" aria-hidden="true">
            <div class="modal-dialog modal-lg bg-light ">
                <div class="modal-content">
                    <form action="php/users/updatePermissions" method="POST" id="formPermisos">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitulo">Editar permisos de usuarios</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12 my-4">
                                    <div class="card">
                                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                            <div class="bg-gradient-dark shadow border-radius-lg pt-4 pb-3">
                                                <h5 class="text-white text-capitalize ps-3"><i class="fas fa-user-shield"></i> Permisos del usuario</h5>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <input type="hidden" id="txtId" name="idUser">
                                                    <label for="txtUsuario">Usuario:</label>
                                                    <input type="text" id="txtUsuario" class="form-control" readonly />
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-check form-switch" data-bs-toggle="tooltip" data-bs-placement="right" title="Permiso para realizar actividades de inventario">
                                                        <input class="form-check-input" type="checkbox" role="switch" name="permisos[]" id="permiso1" value="1">
                                                        <label class="form-check-label" for="permiso1">Permiso inventario</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-check form-switch" data-bs-toggle="tooltip" data-bs-placement="right" title="Permiso para ver el panel de facturación">
                                                        <input class="form-check-input" type="checkbox" role="switch" name="permisos[]" id="permiso2" value="2">
                                                        <label class="form-check-label" for="permiso2">Permiso facturación</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-check form-switch" data-bs-toggle="tooltip" data-bs-placement="right" title="Permiso para realizar compra de inventario">
                                                        <input class="form-check-input" type="checkbox" role="switch" name="permisos[]" id="permiso3" value="3">
                                                        <label class="form-check-label" for="permiso3">Permiso compra</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-check form-switch" data-bs-toggle="tooltip" data-bs-placement="right" title="Permiso para agregar usuarios/editar/eliminar usuarios">
                                                        <input class="form-check-input" type="checkbox" role="switch" name="permisos[]" id="permiso4" value="4">
                                                        <label class="form-check-label" for="permiso4">Permiso usuarios</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-check form-switch" data-bs-toggle="tooltip" data-bs-placement="right" title="Permiso para generar reportes">
                                                        <input class="form-check-input" type="checkbox" role="switch" name="permisos[]" id="permiso5" value="5">
                                                        <label class="form-check-label" for="permiso5">Permiso reportes</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 my-4">
                                    <div class="card">
                                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                            <div class="bg-gradient-dark shadow border-radius-lg pt-4 pb-3">
                                                <h5 class="text-white text-capitalize ps-3">Tabla permisos de usuario</h5>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="tablePermissions" class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Usuario</th>
                                                            <th scope="col">Permiso inventario</th>
                                                            <th scope="col">Permiso facturación</th>
                                                            <th scope="col">Permiso compra</th>
                                                            <th scope="col">Permiso usuarios</th>
                                                            <th scope="col">Permiso reportes</th>
                                                            <th scope="col">Editar</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar ventana</button>
                            <button type="submit" class="btn btn-success">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal activar o desactivar usuarios -->
        <div class="modal fade" id="modalUsuariosActivos" tabindex="-1" aria-labelledby="Usuarios activos e inactivos" aria-hidden="true">
            <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitulo">Habilidar/Deshabilitar usuarios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table id="tablaUsuariosStatus" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="contentTableStatus" class="tbodyDiv"></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar ventana</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("includes/footer.html");
    if (isset($_GET['message'])) {
        if ($_GET['message'] === "ok") $utilidades::message("Registro actualizado exitosamente", "1");
        else $utilidades::message("El registro no se a actualizado", "2");
    }
    ?>
</body>

</html>