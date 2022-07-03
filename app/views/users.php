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
            <div class="col-lg-12 mb-3">
                <div class="card shadow mb-2">
                    <div class="card-body">
                        <form action="php/users/createUser.php" method="POST" enctype="multipart/form-data" id="formAddUser">
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="?View=Users"><i class="fas fa-user-plus"></i> Agregar usuarios</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?View=Admin_User"><i class="fas fa-user-edit"></i> Administrar usuarios</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="?View=User_Permits"><i class="fas fa-user-shield"></i> Editar permisos de usuarios</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="fas fa-user-slash"></i> Habilitar/Deshabilitar usuarios</a>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="col-lg-3 my-4">
                                    <div class="card">
                                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                            <div class="bg-gradient-primary shadow border-radius-lg pt-4 pb-3">
                                                <h5 class="text-white text-capitalize ps-3"><i class="fas fa-camera"></i> Foto de perfil</h5>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <img src="<?php echo $__DIR__?>resource/uploads/users/nophoto.png" class="img-fluid" id="imgPerfil" alt="Foto de perfil">
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="btnImagen" class="form-label">Seleccione una imagen</label>
                                                        <input class="form-control" type="file" id="btnImagen" name="imagenPerfil" accept="image/*"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-8 my-4">
                                            <div class="card">
                                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                                    <div class="bg-gradient-primary shadow border-radius-lg pt-4 pb-3">
                                                        <h5 class="text-white text-capitalize ps-3"><i class="fas fa-user"></i> Datos del usuario</h5>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-6 mb-2">
                                                            <label class="form-label" for="txtUsuario">Nombre de usuario:</label>
                                                            <input type="text" name="usuario" id="txtUsuario" class="form-control" autocomplete="off" />
                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <label class="form-label" for="txtPassword">Contraseña:</label>
                                                            <input type="password" name="clave" id="txPassword" class="form-control" autocomplete="off" />
                                                        </div>
                                                        <div class="col-lg-12 mb-2">
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
                                                            <select class="form-select" name="sexo" id="slcSexo">
                                                                <option selected value="">Seleccione una opción</option>
                                                                <option value="1">Masculino</option>
                                                                <option value="2">Femenino</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-12 mb-2">
                                                            <label class="form-label" for="txtDireccion">Direccion:</label>
                                                            <textarea class="form-control" name="direccion" id="txtDireccion" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 my-4">
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <div class="card">
                                                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                                            <div class="bg-gradient-primary shadow border-radius-lg pt-4 pb-3">
                                                                <h5 class="text-white text-capitalize ps-3"><i class="fas fa-user-shield"></i> Permisos del usuario</h5>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 mb-3">
                                                                    <div class="form-check form-switch" data-bs-toggle="tooltip" data-bs-placement="right" title="Permiso para realizar actividades de inventario">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="permisos[]" id="permiso1" value="1">
                                                                        <label class="form-check-label" for="permiso1">Permiso inventario</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 mb-3">
                                                                    <div class="form-check form-switch" data-bs-toggle="tooltip" data-bs-placement="right" title="Permiso para ver el panel de facturación">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="permisos[]" id="permiso2" value="2">
                                                                        <label class="form-check-label" for="permiso2">Permiso facturación</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 mb-3">
                                                                    <div class="form-check form-switch" data-bs-toggle="tooltip" data-bs-placement="right" title="Permiso para realizar compra de inventario">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="permisos[]" id="permiso3" value="3">
                                                                        <label class="form-check-label" for="permiso3">Permiso compra</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 mb-3">
                                                                    <div class="form-check form-switch" data-bs-toggle="tooltip" data-bs-placement="right" title="Permiso para agregar usuarios/editar/eliminar usuarios">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="permisos[]" id="permiso4" value="4">
                                                                        <label class="form-check-label" for="permiso4">Permiso usuarios</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 mb-3">
                                                                    <div class="form-check form-switch" data-bs-toggle="tooltip" data-bs-placement="right" title="Permiso para generar reportes">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="permisos[]" id="permiso5" value="5">
                                                                        <label class="form-check-label" for="permiso5">Permiso reportes</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-grid">
                                                                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Crear usuario</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
        include("includes/footer.html"); 
        if (isset($_GET['message'])) {
            if ($_GET['message'] === "ok") $utilidades::message("Registro creado exitosamente", "1");
            else $utilidades::message("Error: No se registrado el usuario", "2");
        }
    ?>
</body>

</html>