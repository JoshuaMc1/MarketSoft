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
                <div class="card shadow mt-2 mb-2">
                    <div class="card-body">
                        <h2 class="fw-bold">Inventario</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-3">
                <div class="card shadow mt-2 mb-4">
                    <div class="card-body">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active-2 fw-bold" aria-current="page" href="?View=Inventory"><i class="fas fa-home"></i> Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" href="#"><i class="fas fa-carrot"></i> Productos</a>
                            </li>
                            <?php
                            if ($_SESSION['p3'] == 1) {
                                echo '
                                    <li class="nav-item">
                                        <a class="nav-link text-black fw-bold" href="#"><i class="fas fa-shopping-cart"></i> Compras</a>
                                    </li>
                                ';
                            }
                            ?>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" href="#"><i class="fas fa-file-alt"></i> Reportes</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2 bg-white border-0">
                        <div class="icon icon-lg icon-shape bg-gradient-primary2 shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="fas fa-boxes opacity-10"></i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Inventario total</p>
                            <h4 class="mb-0">L.53, 000</h4>
                        </div>
                    </div>
                    <hr class="horizontal my-0">
                    <div class="card-footer p-3 bg-white border-0">
                        <p class="mb-0"><span class="text-secondary text-sm font-weight-bolder"><i class="fas fa-clock"></i> Actualizado hace 1 segundo</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2 bg-white border-0">
                        <div class="icon icon-lg icon-shape bg-gradient-warning shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="fas fa-minus-circle opacity-10"></i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Inventario bajo</p>
                            <h4 class="mb-0">2 Productos</h4>
                        </div>
                    </div>
                    <hr class="horizontal my-0">
                    <div class="card-footer p-3 bg-white border-0">
                        <p class="mb-0"><span class="text-secondary text-sm font-weight-bolder"><a href="#" class="text-success"><i class="fas fa-eye"></i> Ver inventario bajo</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2 bg-white border-0">
                        <div class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="fas fa-angle-double-up opacity-10"></i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Entradas</p>
                            <h4 class="mb-0">L.12, 000</h4>
                        </div>
                    </div>
                    <hr class="horizontal my-0">
                    <div class="card-footer p-3 bg-white border-0">
                        <p class="mb-0"><span class="text-secondary text-sm font-weight-bolder"><i class="fas fa-clock"></i> Actualizado hace 1 segundo</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2 bg-white border-0">
                        <div class="icon icon-lg icon-shape bg-gradient-danger shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="fas fa-angle-double-down opacity-10"></i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Salidas</p>
                            <h4 class="mb-0" data-count="5000">L.5, 000</h4>
                        </div>
                    </div>
                    <hr class="horizontal my-0">
                    <div class="card-footer p-3 bg-white border-0">
                        <p class="mb-0"><span class="text-secondary text-sm font-weight-bolder"><i class="fas fa-clock"></i> Actualizado hace 1 segundo</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-9">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12 my-4 my-xl-5">
                        <div class="card shadow">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-dark shadow border-radius-lg pt-4 pb-3">
                                    <h5 class="text-white text-capitalize ps-3"><i class="fas fa-chart-bar"></i> Grafica de productos por categoria</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <canvas id="chart3"></canvas>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-4 p-1">
                                            <div class="d-grid">
                                                <button class="btn btn-danger btn-sm"><i class="fas fa-file-pdf fw-bold"></i> Exportar PDF</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 p-1">
                                            <div class="d-grid">
                                                <button class="btn btn-success btn-sm"><i class="fas fa-file-excel fw-bold"></i> Exportar Excel</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 p-1">
                                            <div class="d-grid">
                                                <button class="btn btn-primary btn-sm"><i class="fas fa-image fw-bold"></i> Exportar Imagen</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12 my-4 my-xl-5">
                        <div class="card shadow">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-dark shadow border-radius-lg pt-4 pb-3">
                                    <h5 class="text-white text-capitalize ps-3"><i class="fas fa-chart-line"></i> Productos mas vendidos</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <canvas id="chart1"></canvas>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-4 p-1">
                                            <div class="d-grid">
                                                <button class="btn btn-danger btn-sm"><i class="fas fa-file-pdf fw-bold"></i> Exportar PDF</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 p-1">
                                            <div class="d-grid">
                                                <button class="btn btn-success btn-sm"><i class="fas fa-file-excel fw-bold"></i> Exportar Excel</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 p-1">
                                            <div class="d-grid">
                                                <button class="btn btn-primary btn-sm"><i class="fas fa-image fw-bold"></i> Exportar Imagen</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-dark shadow border-radius-lg pt-4 pb-3">
                                    <h5 class="text-white text-capitalize ps-3">Deuda a proveedores</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Proveedor</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cantidad adeudada</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody class="contenedorLista">
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="../resource/uploads/users/Joshua-bI1ARE8Q5nUMM6VZ/Power.jpg" class="avatar avatar-sm me-3" alt="Foto del proveedor">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Joshua Mclean</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold"> L. 14,000 </span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="badge rounded-pill bg-danger">No pagada</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="../resource/uploads/users/nophoto.png" class="avatar avatar-sm me-3" alt="Foto del proveedor">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Juan Martinez</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold"> L. 12,000 </span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="badge rounded-pill bg-danger">No pagada</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="../resource/uploads/users/Joshua-TNj6Q92xMVr0LkoC/80643075_2501985870054772_4749238612439072768_n.jpg" class="avatar avatar-sm me-3" alt="Foto del proveedor">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">David Escaleras</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold"> L. 23,300 </span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="badge rounded-pill bg-danger">No pagada</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-12 col-md-12 col-sm-12 my-4 my-xl-2">
                        <div class="card shadow">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-dark shadow border-radius-lg pt-4 pb-3">
                                    <h5 class="text-white text-capitalize ps-3"><i class="fas fa-chart-pie"></i> Productos con mayor inventario</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <canvas id="chart2"></canvas>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-4 p-1">
                                            <div class="d-grid">
                                                <button class="btn btn-danger btn-sm"><i class="fas fa-file-pdf fw-bold"></i> Exportar PDF</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 p-1">
                                            <div class="d-grid">
                                                <button class="btn btn-success btn-sm"><i class="fas fa-file-excel fw-bold"></i> Exportar Excel</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 p-1">
                                            <div class="d-grid">
                                                <button class="btn btn-primary btn-sm"><i class="fas fa-image fw-bold"></i> Exportar Imagen</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-xl-3 my-4 my-xl-5">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-warning shadow border-radius-lg pt-4 pb-3">
                                    <h5 class="text-white text-capitalize ps-3"><i class="fas fa-calendar-day"></i> Productos proximos a vencer</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <ol class="list-group list-group-numbered contenedorLista">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Nombre del producto</div>
                                            Fecha de vencimiento
                                        </div>
                                        <span class="badge bg-gradient-danger rounded-pill">14 dias</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Nombre del producto</div>
                                            Fecha de vencimiento
                                        </div>
                                        <span class="badge bg-gradient-danger rounded-pill">14 dias</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Nombre del producto</div>
                                            Fecha de vencimiento
                                        </div>
                                        <span class="badge bg-gradient-danger rounded-pill">14 dias</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Nombre del producto</div>
                                            Fecha de vencimiento
                                        </div>
                                        <span class="badge bg-gradient-danger rounded-pill">14 dias</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Nombre del producto</div>
                                            Fecha de vencimiento
                                        </div>
                                        <span class="badge bg-gradient-danger rounded-pill">14 dias</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Nombre del producto</div>
                                            Fecha de vencimiento
                                        </div>
                                        <span class="badge bg-gradient-danger rounded-pill">14 dias</span>
                                    </li>
                                </ol>
                                <div class="row">
                                    <div class="col-lg-6 mt-2">
                                        <div class="d-grid">
                                            <button class="btn btn-danger btn-sm"><i class="fas fa-file-pdf fw-bold"></i> Exportar PDF</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <div class="d-grid">
                                            <button class="btn btn-success btn-sm"><i class="fas fa-file-excel fw-bold"></i> Exportar Excel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("includes/footer.html");
    ?>
    <script src="../resource/js/inventory/graficos.js?v=27"></script>
</body>

</html>