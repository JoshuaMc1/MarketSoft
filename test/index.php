<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resource/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resource/libs/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css?v=20">
    <title>Document</title>
</head>

<body class="body-pd" id="body-pd">
    <header>
        <div class="l-navbar j-expander" id="j-navbar">
            <nav class="l-nav">
                <div class="content">
                    <div class="j-nav__brand sticky-top">
                        <i class="fas fa-bars j-nav__toggle" id="j-nav-toggle"></i>
                        <a href="#" class="j-nav__logo"><img src="../resource/img/Logo-MarketSoft-2.1.png" width="50rem"
                                alt="Logo de la empresa"> MarketSoft</a>
                    </div>
                    <div class="j-nav__list">
                        <a href="#" class="j-nav__link j-active" data-bs-toggle="tooltip" data-bs-placement="right"
                            title="Dashboard">
                            <i class="fas fa-tachometer-alt j-nav__icon"></i>
                            <span class="j-nav__name">Dashboard</span>
                        </a>
                        <div class="j-nav__link j-collapse" data-bs-toggle="tooltip" data-bs-placement="right"
                            title="Facturación">
                            <i class="fas fa-file-invoice j-nav__icon"></i>
                            <span class="j-nav__name">Facturación</span>
                            <i class="fas fa-angle-down j-collapse__link"></i>
                            <ul class="j-collapse__menu">
                                <a href="#" class="j-collapse__sublink">Data</a>
                                <a href="#" class="j-collapse__sublink">Group</a>
                                <a href="#" class="j-collapse__sublink">Members</a>
                            </ul>
                        </div>
                        <div class="j-nav__link j-collapse" data-bs-toggle="tooltip" data-bs-placement="right"
                            title="Inventario">
                            <i class="fas fa-boxes j-nav__icon"></i>
                            <span class="j-nav__name">Inventario</span>
                            <i class="fas fa-angle-down j-collapse__link"></i>
                            <ul class="j-collapse__menu">
                                <a href="#" class="j-collapse__sublink">Data</a>
                                <a href="#" class="j-collapse__sublink">Group</a>
                                <a href="#" class="j-collapse__sublink">Members</a>
                            </ul>
                        </div>
                        <div class="j-nav__link j-collapse" data-bs-toggle="tooltip" data-bs-placement="right"
                            title="Usuarios">
                            <i class="fas fa-users j-nav__icon"></i>
                            <span class="j-nav__name">Usuarios</span>
                            <i class="fas fa-angle-down j-collapse__link"></i>
                            <ul class="j-collapse__menu">
                                <a href="#" class="j-collapse__sublink">Data</a>
                                <a href="#" class="j-collapse__sublink">Group</a>
                                <a href="#" class="j-collapse__sublink">Members</a>
                            </ul>
                        </div>
                        <a href="#" class="j-nav__link" data-bs-toggle="tooltip" data-bs-placement="right"
                            title="Estadisticas">
                            <i class="fas fa-chart-pie j-nav__icon"></i>
                            <span class="j-nav__name">Estadisticas</span>
                        </a>
                        <div class="j-nav__link j-collapse" data-bs-toggle="tooltip" data-bs-placement="right"
                            title="Reportes">
                            <i class="fas fa-file-pdf j-nav__icon"></i>
                            <span class="j-nav__name">Reportes</span>
                            <i class="fas fa-angle-down j-collapse__link"></i>
                            <ul class="j-collapse__menu">
                                <a href="#" class="j-collapse__sublink">Data</a>
                                <a href="#" class="j-collapse__sublink">Group</a>
                                <a href="#" class="j-collapse__sublink">Members</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="btn-group dropdown position-static" id="drop">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="profile">
                            <img src="../resource/img/usuarios/80643075_2501985870054772_4749238612439072768_n.jpg"
                                width="36" height="36" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1"> Joshua Mclean</span>
                        </div>
                    </a>
                    <ul class="dropdown-menu j-dropdown-color dropdown-menu-dark text-small shadow mb-2 border-white"
                        aria-labelledby="dropdownUser1">
                        <li>
                            <a class="dropdown-item mb-2" href="#" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Perfil">
                                <i class="fas fa-user"></i> Perfil
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider text-white">
                        </li>
                        <li>
                            <a class="dropdown-item mb-2" href="#" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Configuración">
                                <i class="fas fa-cog j-nav__icon"></i> Configuración
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item j-btn-exit" href="../" data-bs-toggle="tooltip"
                                data-bs-placement="right" title="Cerrar sesión">
                                <i class="fas fa-sign-out fa-fade j-nav__icon"></i> Cerrar sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section class="container-fluid mb-4" id="contenido">
        <div class="row g-3">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="fw-bold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat dolor, provident optio aperiam repudiandae in recusandae sequi perspiciatis aut alias.</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="fw-bold">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolor corporis atque
                            explicabo eaque sunt!
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="fw-bold">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolor corporis atque
                            explicabo eaque sunt!
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="fw-bold">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolor corporis atque
                            explicabo eaque sunt!
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="fw-bold">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolor corporis atque
                            explicabo eaque sunt!
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="fw-bold">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolor corporis atque
                            explicabo eaque sunt!
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="fw-bold">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolor corporis atque
                            explicabo eaque sunt!
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="fw-bold">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolor corporis atque
                            explicabo eaque sunt!
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="fw-bold">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolor corporis atque
                            explicabo eaque sunt!
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="fw-bold">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolor corporis atque
                            explicabo eaque sunt!
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="sticky-footer bg-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; MarketSoft 2022</span>
            </div>
        </div>
    </footer>
    <script src="../resource/libs/@popperjs/core@"></script>
    <script src="../resource/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../resource/libs/jquery/jquery.js"></script>
    <script src="app.js?v=1"></script>
</body>

</html>