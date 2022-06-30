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
                <div class="card shadow mb-2">
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
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fas fa-user-shield"></i> Editar permisos de usuarios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fas fa-user-slash"></i> Habilitar/Deshabilitar usuarios</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 my-4">
                                <div class="card">
                                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                        <div class="bg-gradient-primary shadow border-radius-lg pt-4 pb-3">
                                            <h5 class="text-white text-capitalize ps-3"><i class="fas fa-user"></i> Datos del usuario</h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="php/users/updateUser.php" method="POST" enctype="multipart/form-data" id="formAdminUser">
                                            <div class="row">
                                                <div class="col-lg-4 mb-2">
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-3">
                                                            <img src="<?php echo $__DIR__ ?>resource/uploads/users/nophoto.png" class="img-fluid" id="imgPerfil" alt="Foto de perfil">
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <!-- <label for="btnImagen" class="form-label">Seleccione una imagen</label>
                                                                    <input class="form-control" type="file" name="imagenPerfil" id="btnImagen"> -->
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                            <input type="text" name="primerNombre" id="txtPrimerNombre" class="form-control" autocomplete="off" />
                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <label class="form-label" for="txtSegundoNombre">Segundo nombre:</label>
                                                            <input type="text" name="segundoNombre" id="txtSegundoNombre" class="form-control" autocomplete="off" />
                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <label class="form-label" for="txtPrimerApellido">Primer apellido:</label>
                                                            <input type="text" name="primerApellido" id="txtPrimerApellido" class="form-control" autocomplete="off" />
                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <label class="form-label" for="txtSegundoApellido">Segundo apellido:</label>
                                                            <input type="text" name="segundoApellido" id="txtSegundoApellido" class="form-control" autocomplete="off" />
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
                                                                <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i> Actualizar datos</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 my-4">
                                <div class="card">
                                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                        <div class="bg-gradient-primary shadow border-radius-lg pt-4 pb-3">
                                            <h5 class="text-white text-capitalize ps-3"><i class="fas fa-clipboard-list"></i> Tabla usuarios</h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="container-fluid">
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
        <!-- Modal -->
        <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modalTitulo" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="php/users/deleteUser.php" method="POST" id="formEliminarUsuario">
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
    </section>
    <?php
    include("includes/footer.html");
    if (isset($_GET['message'])) {
        if ($_GET['message'] === "ok") $utilidades::message("Registro eliminado exitosamente", "1");
        else $utilidades::message("El registro no se elimino", "2");
    }
    ?>
</body>

</html>