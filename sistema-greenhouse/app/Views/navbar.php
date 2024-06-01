<?php
    $session  = session();
    $nombre   = $session->get('nombre');
    $apellido = $session->get('apellido');
    $perfil   = $session->get('tipoUsuario-id');
?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0a3440;">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">
            <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" width="100" height="100"
                class="d-inline-block align-middle" style="margin-right: 10px;">
                <?php if ($session->has('nombre') && $session->has('apellido')): ?>
                    <a class="navbar-brand me-auto" href="#">¡Hola <?= $nombre ?>, <?= $apellido ?>!</a>
                <?php endif; ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <!--NAVBAR PARA USER Admin-->
        <?php if (($perfil == 1)) { ?>
            <ul class="navbar-nav ms-auto" id="item">                
                <li class="nav-item mx-2">
                    <a class="btn btn-primary btn-block fa-lg gradient-custom-2" style="font-weight: bold;"
                        href="<?= base_url('') ?>"><i class="bi bi-person-lines-fill"></i> CRUD Usuarios</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn btn-primary btn-block fa-lg gradient-custom-2" style="font-weight: bold;"
                        href="<?= base_url('') ?>"><i class="bi bi-houses-fill"></i> CRUD Cabañas</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn btn-primary btn-block fa-lg gradient-custom-2" style="font-weight: bold;"
                        href="<?= base_url('') ?>"><i class="bi bi-signal"></i> Consultas recibidas</a>
                </li>

                <li class="nav-item mx-2">
                    <a class="btn btn-primary btn-block fa-lg gradient-custom-2" style="background-color: #27D99D; font-weight: bold;" href="<?= base_url() ?>logout"><i
                            class="bi bi-door-open-fill"></i> Cerrar sesion</a>
                </li>
            </ul>
            <!--NAVBAR PARA USER Huesped-->
        <?php } else if (($perfil == 2)) { ?>
            <ul class="navbar-nav ms-auto" id="item">
                <li class="nav-item mx-2">
                    <a class="btn btn-primary btn-block fa-lg gradient-custom-2" style="font-weight: bold;"
                        href="<?= base_url('inicio') ?>"><i class="bi bi-house-door"></i> Inicio</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn btn-primary btn-block fa-lg gradient-custom-2" style="font-weight: bold;"
                        href="<?= base_url('consultar-cabanas') ?>"><i class="bi bi-house-heart-fill"></i> Explorar
                        cabañas</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn btn-primary btn-block fa-lg gradient-custom-2" style="font-weight: bold;"
                        href="<?= base_url() ?>"><i class="bi bi-pass-fill"></i> Mis reservas</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn btn-primary btn-block fa-lg gradient-custom-2" style="background-color: #27D99D; font-weight: bold;" href="<?= base_url() ?>logout"><i
                            class="bi bi-door-open-fill"></i> Cerrar sesion</a>
                </li>
            </ul>
        <?php } else { ?>
            <!--NAVBAR PARA USER No huesped-->
            <ul class="navbar-nav ms-auto" id="item">
                <li class="nav-item mx-2">
                    <a class="btn btn-primary btn-block fa-lg gradient-custom-2" style="font-weight: bold;"
                        href="<?= base_url('inicio') ?>"><i class="bi bi-house-door"></i> Inicio</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn btn-primary btn-block fa-lg gradient-custom-2" style="font-weight: bold;" href="#"><i
                            class="bi bi-signal"></i> Consultas</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn btn-primary btn-block fa-lg gradient-custom-2" style="font-weight: bold;"
                        href="<?= base_url('consultar-cabanas') ?>"><i class="bi bi-house-heart-fill"></i> Explorar
                        cabañas</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn btn-primary btn-block fa-lg gradient-custom-2" style="font-weight: bold;"
                        href="<?= base_url('inicio') ?>#conocenos"><i class="bi bi-tree-fill"></i> Conócenos</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn btn-primary btn-block fa-lg gradient-custom-2" style="background-color: #27D99D; font-weight: bold;" href="<?= base_url() ?>login"><i
                            class="bi bi-person-bounding-box"></i> Iniciar sesion</a>
                </li>
            </ul>
        <?php } ?>
        </div>
    </div>
</nav>