<?php
    return array(
        1 => '
            <div class="j-nav__link j-collapse" data-bs-toggle="tooltip" data-bs-placement="right" title="Facturación">
                <i class="fas fa-file-invoice j-nav__icon"></i>
                <span class="j-nav__name">Facturación</span>
                <i class="fas fa-angle-down j-collapse__link"></i>
                <ul class="j-collapse__menu">
                    <a href="#" class="j-collapse__sublink text-truncate">Facturar</a>
                    <a href="#" class="j-collapse__sublink text-truncate" data-bs-toggle="tooltip" data-bs-placement="right" title="Ventas realizadas">Ventas</a>
                    <a href="#" class="j-collapse__sublink text-truncate" data-bs-toggle="tooltip" data-bs-placement="right" title="Estadisticas de ventas del usuario">Estadisticas</a>
                </ul>
            </div>
        ',
        2 => '
            <a href="?View=Inventory" class="j-nav__link" data-bs-toggle="tooltip" data-bs-placement="right" title="Inventario">
            <i class="fas fa-boxes j-nav__icon"></i>
                <span class="j-nav__name">Inventario</span>
            </a>
        ',
        3 => '
            <a href="?View=Users" class="j-nav__link" data-bs-toggle="tooltip" data-bs-placement="right" title="Usuarios">
            <i class="fas fa-users j-nav__icon"></i>
                <span class="j-nav__name">Usuarios</span>
            </a>
        ',
        4 => '
            <a href="?View=Statistics" class="j-nav__link" data-bs-toggle="tooltip" data-bs-placement="right" title="Estadisticas">
                <i class="fas fa-chart-pie j-nav__icon"></i>
                <span class="j-nav__name">Estadisticas</span>
            </a>
        ',
        5 => '
            <div class="j-nav__link j-collapse" data-bs-toggle="tooltip" data-bs-placement="right" title="Reportes">
                <i class="fas fa-file-pdf j-nav__icon"></i>
                <span class="j-nav__name">Reportes</span>
                <i class="fas fa-angle-down j-collapse__link"></i>
                <ul class="j-collapse__menu">
                    <a href="#" class="j-collapse__sublink d-inline-block text-truncate" data-bs-toggle="tooltip" data-bs-placement="right" title="Reportes generales">Reportes generales</a>
                    <a href="#" class="j-collapse__sublink d-inline-block text-truncate" data-bs-toggle="tooltip" data-bs-placement="right" title="Reportes por fecha">Reportes por fecha</a>
                    <a href="#" class="j-collapse__sublink d-inline-block text-truncate" data-bs-toggle="tooltip" data-bs-placement="right" title="Reportes por usuarios">Reportes por usuarios</a>
                </ul>
            </div>
        '
    );