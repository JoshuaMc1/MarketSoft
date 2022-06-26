<?php
    class navbar
    {
        const inicio = '
            <div class="l-navbar j-expander" id="j-navbar">
            <nav class="l-nav">
                <div class="content">
                    <div class="j-nav__brand sticky-top">
                        <i class="fas fa-bars j-nav__toggle" id="j-nav-toggle"></i>
                        <a href="?View=Dashboard" class="j-nav__logo"><img src="../resource/img/Logo-MarketSoft-2.1.png" width="50rem" alt="Logo de la empresa"> MarketSoft</a>
                    </div>
                    <div class="j-nav__list">
                        <a href="?View=Dashboard" class="j-nav__link" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                            <i class="fas fa-tachometer-alt j-nav__icon"></i>
                            <span class="j-nav__name">Dashboard</span>
                        </a>';
        const cierre1 = '
                    </div>
                </div>
                    <div class="btn-group dropdown position-static" id="drop">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="profile">';
        const cierre2 = '
                </div>
                </a>
                <ul class="dropdown-menu j-dropdown-color dropdown-menu-dark text-small shadow mb-2 border-white" aria-labelledby="dropdownUser1">
                    <li>
                        <a class="dropdown-item mb-2" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Perfil">
                            <i class="fas fa-user"></i> Perfil
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider text-white">
                    </li>
                    <li>
                        <a class="dropdown-item mb-2" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Configuración">
                            <i class="fas fa-cog j-nav__icon"></i> Configuración
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item j-btn-exit" href="../config/close_sessions.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Cerrar sesión">
                            <i class="fas fa-sign-out fa-fade j-nav__icon"></i> Cerrar sesión
                        </a>
                    </li>
                </ul>
            </div>
            </nav>
            </div>';

        public static function buildNavbar()
        {
            try{
                $navBar = include_once("optionsNavbar.php");
                $permisos = [$_SESSION['p1'], $_SESSION['p2'], $_SESSION['p3'], $_SESSION['p4'], $_SESSION['p5']];
                echo navbar::inicio;
                navbar::buildOptions($permisos, $navBar);
                echo navbar::cierre1;
                echo '
                    <img src="../resource/img/usuarios/'.$_SESSION['photo'].'" width="36" height="36" class="rounded-circle" alt="Foto de perfil">
                    <span class="d-none d-sm-inline mx-1">'.$_SESSION['nombre']." ".$_SESSION['apellido'].'</span>
                ';
                echo navbar::cierre2;
            }catch(Exception $ex){
                echo $ex->getMessage();
                die();
            }
        }

        public static function buildOptions($permisos, $navBar){
            if($permisos[0] == "1") echo $navBar[1];
            if($permisos[1] == "1") echo $navBar[2];
            if($permisos[2] == "1") echo $navBar[3];
            if($permisos[3] == "1") echo $navBar[4];
            if($permisos[4] == "1") echo $navBar[5];
        }
    }
